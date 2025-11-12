<?php
/**
 * Обработчик формы обратной связи
 */

require_once 'config.php';

header('Content-Type: application/json; charset=utf-8');

// Проверка метода запроса
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Метод не разрешен']);
    exit;
}

// Получение данных
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$page = isset($_POST['page']) ? trim($_POST['page']) : '';
$type = isset($_POST['type']) ? trim($_POST['type']) : 'callback'; // callback или order

// Валидация
if (empty($phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Необходимо указать номер телефона']);
    exit;
}

// Базовая валидация телефона (российские форматы)
$phone_clean = preg_replace('/[^0-9+]/', '', $phone);
if (strlen($phone_clean) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Некорректный номер телефона']);
    exit;
}

// Форматирование телефона для отображения
if (!preg_match('/^\+?7/', $phone_clean)) {
    if (preg_match('/^8/', $phone_clean)) {
        $phone_clean = '7' . substr($phone_clean, 1);
    } else {
        $phone_clean = '7' . $phone_clean;
    }
}

// Подготовка данных для письма
$subject = $type === 'order' ? 'Новая заявка с сайта' : 'Запрос обратного звонка';
$page_name = !empty($page) ? $page : 'главная страница';

$message = "Новая заявка с сайта " . SITE_URL . "\n\n";
$message .= "Тип: " . ($type === 'order' ? 'Заявка на услугу' : 'Запрос обратного звонка') . "\n";
$message .= "Телефон: " . $phone . "\n";
if (!empty($name)) {
    $message .= "Имя: " . $name . "\n";
}
$message .= "Страница: " . $page_name . "\n";
$message .= "Время: " . date('d.m.Y H:i:s') . "\n";
$message .= "IP адрес: " . ($_SERVER['REMOTE_ADDR'] ?? 'не определен') . "\n";

// Заголовки письма
$headers = "From: noreply@" . parse_url(SITE_URL, PHP_URL_HOST) . "\r\n";
$headers .= "Reply-To: noreply@" . parse_url(SITE_URL, PHP_URL_HOST) . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Отправка письма
$mail_sent = mail(CONTACT_EMAIL, $subject, $message, $headers);

if ($mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => $type === 'order' ? 'Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.' : 'Заявка принята! Мы перезвоним вам в ближайшее время.'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Ошибка при отправке заявки. Пожалуйста, позвоните нам по телефону.']);
}
exit;





