<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__) . '/config/assets.php',
            'theme' => require dirname(__DIR__) . '/config/theme.php',
            'view' => require dirname(__DIR__) . '/config/view.php',
        ]);
    }, true);


/**
 * On this file we only append another function files
 */
require_once dirname(__DIR__ . '/resources') . '/functions/remove.php';
require_once __DIR__ . '/functions/setup.php';
require_once __DIR__ . '/functions/ajax.php';
// require_once dirname(__DIR__ . '/resources') . '/functions/send-mail.php';

function use_custom_template_for_category_posts($template)
{
    if (is_single()) {
        if (has_category('gallery')) {
            $new_template = locate_template('views/single-gallery-post.blade.php');
        } elseif (has_category('news')) {
            $new_template = locate_template('views/single-news-post.blade.php');
        }

        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}

add_filter('template_include', 'use_custom_template_for_category_posts', 99);

@ini_set('upload_max_filesize', '128M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');

add_filter('deprecated_function_trigger_error', '__return_false'); // Скрыть предупреждения об устаревших функциях
add_filter('deprecated_argument_trigger_error', '__return_false'); // Скрыть предупреждения об устаревших аргументах
add_filter('deprecated_file_trigger_error', '__return_false'); // Скрыть предупреждения об устаревших файлах

function modify_yoast_breadcrumb($links)
{
    // Проверяем, что в хлебных крошках больше двух элементов
    if (count($links) >= 2) {
        // Убираем ссылку у второго элемента (индекс 1)
        $links[1]['url'] = '';  // Убираем ссылку
        $links[1]['class'] = 'current';  // Добавляем класс 'current', чтобы это был просто текст
    }
    return $links;
}

add_filter('wpseo_breadcrumb_links', 'modify_yoast_breadcrumb');


function fetch_vk_posts($owner_id, $count = 10) {
    $access_token = 'b35f1132b35f1132b35f113217b07805d9bb35fb35f1132d4318e1ea249544519f8d069'; // Замените на ваш токен
    $api_version = '5.131';
    $url = "https://api.vk.com/method/wall.get?owner_id={$owner_id}&count={$count}&access_token={$access_token}&v={$api_version}";

    $response = wp_remote_get($url);
    if (is_wp_error($response)) {
        return [];
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (isset($data['response']['items'])) {
        return $data['response']['items'];
    }

    return [];
}


function import_vk_posts_to_events($posts) {
    foreach ($posts as $post) {
        $vk_post_id = $post['id'];
        $existing_post = get_posts([
            'meta_key' => 'vk_post_id',
            'meta_value' => $vk_post_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => 1,
        ]);

        if ($existing_post) {
            continue; // Пропускаем уже импортированные посты
        }

        $post_content = $post['text'] ?? '';
        $attachments = isset($post['attachments']) ? $post['attachments'] : [];

        $category = get_category_by_slug('events');
        if (!$category) {
            $category_id = wp_insert_category([
                'cat_name' => 'События',
                'category_nicename' => 'events',
                'category_description' => 'Посты из ВКонтакте для раздела "События"',
            ]);
        } else {
            $category_id = $category->term_id;
        }

        $post_id = wp_insert_post([
            'post_title' => wp_trim_words($post_content, 10, '...'),
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_category' => [$category_id],
        ]);

        if ($post_id && !is_wp_error($post_id)) {
            update_post_meta($post_id, 'vk_post_id', $vk_post_id);

            if (!empty($attachments)) {
                if (!function_exists('media_sideload_image')) {
                    require_once ABSPATH . 'wp-admin/includes/media.php';
                    require_once ABSPATH . 'wp-admin/includes/file.php';
                    require_once ABSPATH . 'wp-admin/includes/image.php';
                }

                $first_image_set = false; // Флаг для миниатюры
                $gallery_images = []; // Массив для галереи

                foreach ($attachments as $attachment) {
                    if ($attachment['type'] === 'photo' && isset($attachment['photo']['sizes'])) {
                        $sizes = $attachment['photo']['sizes'];
                        if (is_array($sizes)) {
                            $image_url = $sizes[count($sizes) - 1]['url'] ?? null;

                            if ($image_url) {
                                $image_id = media_sideload_image($image_url, $post_id, null, 'id');
                                if (!is_wp_error($image_id)) {
                                    // Устанавливаем миниатюру
                                    if (!$first_image_set) {
                                        set_post_thumbnail($post_id, $image_id);
                                        $first_image_set = true;
                                    }

                                    // Добавляем ID изображения в галерею
                                    $gallery_images[] = $image_id;
                                }
                            }
                        }
                    }
                }

                // Сохраняем данные в кастомное поле только если есть изображения
                if (!empty($gallery_images) && is_array($gallery_images)) {
                    update_post_meta($post_id, 'event-gallery', $gallery_images);
                } else {
                    // Если нет изображений, удаляем поле, чтобы избежать ошибок
                    delete_post_meta($post_id, 'event-gallery');
                }
            }
        }
    }
}




function sync_vk_posts_to_events() {
    $posts = fetch_vk_posts('-202473780', 10); // Укажите ID группы

    if (!empty($posts)) {
        import_vk_posts_to_events($posts); // Добавляем посты в рубрику "События"
    }
}
add_action('vk_sync_cron', 'sync_vk_posts_to_events');

function setup_vk_sync_cron() {
    if (!wp_next_scheduled('vk_sync_cron')) {
        wp_schedule_event(time(), 'hourly', 'vk_sync_cron'); // Запускается каждый час
    }
}
add_action('wp', 'setup_vk_sync_cron');

function remove_vk_sync_cron() {
    wp_clear_scheduled_hook('vk_sync_cron');
}
add_action('switch_theme', 'remove_vk_sync_cron');

if (isset($_GET['run_vk_sync'])) {
    do_action('vk_sync_cron');
    echo "Синхронизация завершена!";
    exit;
}
