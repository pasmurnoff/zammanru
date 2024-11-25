<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $contact = htmlspecialchars(trim($_POST['contact']));

    // Проверка заполнения полей
    if (empty($name) || empty($contact)) {
        echo json_encode(['status' => 'error', 'message' => 'Пожалуйста, заполните все поля.']);
        exit();
    }

    // Проверка валидности email или номера телефона
    if (!filter_var($contact, FILTER_VALIDATE_EMAIL) && !preg_match('/^\+?\d{10,15}$/', $contact)) {
        echo json_encode(['status' => 'error', 'message' => 'Введите корректный email или номер телефона.']);
        exit();
    }

    // Настройка и отправка письма
    $to = 'alexander.pasmurnov@yandex.ru'; // Укажите ваш email
    $subject = 'Форма обратной связи';
    $message = "Имя: $name\nКонтакт: $contact";
    $headers = "From: no-reply@yoursite.com\r\n"; // Замените на ваш домен
    $headers .= "Reply-To: $contact\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Ваша заявка отправлена!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Ошибка при отправке сообщения.']);
    }

    exit(); // Завершаем выполнение, чтобы исключить повторный вывод HTML
}
?>