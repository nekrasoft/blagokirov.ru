<?php
/**
 * Обработчик формы подписки на рассылку
 */

require_once 'config.php';

header('Content-Type: application/json; charset=utf-8');

// Проверка метода запроса
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Метод не разрешен']);
    exit;
}

// Получение email из разных возможных форматов
$email = '';
if (isset($_POST['form_fields']['email'])) {
    $email = trim($_POST['form_fields']['email']);
} elseif (isset($_POST['email'])) {
    $email = trim($_POST['email']);
}

// Валидация email
if (empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Необходимо указать email адрес']);
    exit;
}

// Проверка формата email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Некорректный email адрес']);
    exit;
}

// Подготовка данных для письма
$subject = 'Новая подписка на рассылку';
$message = "Новая подписка на рассылку с сайта " . SITE_URL . "\n\n";
$message .= "Email: " . $email . "\n";
$message .= "Время: " . date('d.m.Y H:i:s') . "\n";
$message .= "IP адрес: " . ($_SERVER['REMOTE_ADDR'] ?? 'не определен') . "\n";
$message .= "Страница: главная страница\n";

// Заголовки письма
$headers = "From: noreply@" . parse_url(SITE_URL, PHP_URL_HOST) . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Отправка письма на указанный адрес
$mail_sent = mail('blagoservice@mail.ru', $subject, $message, $headers);

if ($mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Спасибо! Вы успешно подписались на нашу рассылку.'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Ошибка при отправке заявки. Пожалуйста, попробуйте позже.']);
}
exit;

