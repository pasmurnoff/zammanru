<?php

namespace App;

// Подключаем файл для AJAX
require_once __DIR__ . '/ajax.php'; // Подключаем ajax.php, если нужно

// Подключаем скрипты и стили
add_action('wp_enqueue_scripts', function () {
    // Подключение основного скрипта (main.js)
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    // Подключение стилей
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);

    // Передача AJAX URL в main.js
    wp_localize_script('sage/main.js', 'wp', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
});
