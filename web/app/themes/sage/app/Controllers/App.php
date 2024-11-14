<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    // Добавляем новый метод для получения записей из категории "Галерея"
    public static function galleryAlbums()
    {
        return get_posts([
            'post_type' => 'post',           // Укажите тип записи, если это посты или другой кастомный тип
            'category_name' => 'gallery',   // Слаг категории "Галерея" (замените на ваш слаг)
            'numberposts' => -1              // Получить все записи
        ]);
    }

    public static function productItems()
    {
        return get_posts([
            'post_type' => 'post',
            'category_name' => 'product', // Слаг категории "Product"
            'numberposts' => -1,
            'orderby' => 'date',              // Сортировать по дате
            'order' => 'ASC',   
        ]);
    }
}
