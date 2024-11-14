<?php

namespace App;

// Обработка AJAX-запросов
add_action('wp_ajax_contact_form', 'App\handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'App\handle_contact_form');

function handle_contact_form()
{
    // Получение данных из формы
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $contact = isset($_POST['contact']) ? sanitize_text_field($_POST['contact']) : '';

    // Проверяем заполненность полей
    if (empty($name) || empty($contact)) {
        wp_send_json_error(['message' => 'Заполните все поля!']);
    }

    // Пример: отправка письма (вы можете настроить свою логику)
    $to = 'alexander.pasmurnov@yandex.ru';
    $subject = 'Новая заявка с сайта';
    $message = "Имя: $name\nКонтакт: $contact";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    if (wp_mail($to, $subject, $message, $headers)) {
        wp_send_json_success(['message' => 'Ваше сообщение успешно отправлено!']);
    } else {
        wp_send_json_error(['message' => 'Ошибка отправки сообщения. Попробуйте позже.']);
    }
}
