<?php
/**
 * Обработчик формы "Свяжитесь с нами"
 */

require_once 'config.php';

header('Content-Type: application/json; charset=utf-8');

// Проверка метода запроса
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Метод не разрешен']);
    exit;
}

// Получение данных из формы Elementor
$name = isset($_POST['form_fields']['name']) ? trim($_POST['form_fields']['name']) : '';
$email = isset($_POST['form_fields']['email']) ? trim($_POST['form_fields']['email']) : '';
$message = isset($_POST['form_fields']['message']) ? trim($_POST['form_fields']['message']) : '';
$acceptance = isset($_POST['form_fields']['acceptance']) ? true : false;

// Валидация
$errors = [];

if (empty($name)) {
    $errors[] = 'Необходимо указать имя';
}

if (empty($email)) {
    $errors[] = 'Необходимо указать email адрес';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный email адрес';
}

if (empty($message)) {
    $errors[] = 'Необходимо указать сообщение';
}

if (!$acceptance) {
    $errors[] = 'Необходимо принять условия';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode('. ', $errors)]);
    exit;
}

// Подготовка данных для письма
$subject = 'Новое сообщение с сайта БлагоСервис';

$email_message = "Новое сообщение с сайта " . SITE_URL . "\n\n";
$email_message .= "Имя: " . $name . "\n";
$email_message .= "Email: " . $email . "\n";
$email_message .= "Сообщение:\n" . $message . "\n\n";
$email_message .= "---\n";
$email_message .= "Время: " . date('d.m.Y H:i:s') . "\n";
$email_message .= "IP адрес: " . ($_SERVER['REMOTE_ADDR'] ?? 'не определен') . "\n";
$email_message .= "Страница: главная страница\n";

// Заголовки письма
$headers = "From: noreply@" . parse_url(SITE_URL, PHP_URL_HOST) . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Отправка письма
$mail_sent = mail(CONTACT_EMAIL, $subject, $email_message, $headers);

if ($mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Ошибка при отправке сообщения. Пожалуйста, позвоните нам по телефону.']);
}
exit;

