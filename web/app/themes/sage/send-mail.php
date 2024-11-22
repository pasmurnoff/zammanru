<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из POST-запроса
    $name = htmlspecialchars(trim($_POST['name']));
    $contact = htmlspecialchars(trim($_POST['contact']));

    // Проверяем заполнение полей
    if (empty($name) || empty($contact)) {
        echo 'Пожалуйста, заполните все поля.';
        exit;
    }

    // Настройки письма
    $to = 'alexander.pasmurnov@yandex.ru'; // Укажите ваш email
    $subject = 'Форма обратной связи';
    $message = "Имя: $name\nКонтакт: $contact";
    $headers .= "Reply-To: $contact\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo 'Сообщение отправлено успешно.';
    } else {
        echo 'Ошибка при отправке сообщения.';
    }
} else {
    echo 'Некорректный метод запроса.';
}
?>