<?php
/**
 * Конфигурационный файл для сайта Благосервис
 * Общие настройки, контакты и переменные
 */

// Контактные телефоны
define('PHONE_1', '+7 (922) 905-74-94');
define('PHONE_2', '+7 (922) 942-45-23');
define('PHONE_3', '+7 (8332) 42-45-23');

// Основной телефон для отображения
define('MAIN_PHONE', '42-45-23');

// Адрес компании
define('COMPANY_ADDRESS', 'ул. Садаковская, 2');
define('COMPANY_CITY', 'Киров');
define('COMPANY_POSTAL_CODE', '610000');
define('COMPANY_COUNTRY', 'RU');

// Название компании
define('COMPANY_NAME', 'БлагоСервис');
define('COMPANY_FULL_NAME', 'ООО Благосервис');

// URL сайта
define('SITE_URL', 'https://blagokirov.ru');

// Время работы
define('WORKING_HOURS', 'пн-сб 07:00-21:00');

// Email (если есть)
define('EMAIL', 'info@blagokirov.ru');

// Социальные сети
define('VK_URL', 'https://vk.com/dreamblago');
define('FACEBOOK_URL', 'https://facebook.com/blagoservice');

// Изображения
define('LOGO_URL', SITE_URL . '/assets/logo_transparent.png');
define('TRUCK_IMAGE', SITE_URL . '/assets/blago-truck.jpg');

// Документы
define('COMMERCIAL_PROPOSAL_PDF', 'КП Благосервис.pdf');
define('SERVICES_PRESENTATION_PDF', 'Мини-презентация Благосервис.pdf');

// Ссылки
define('REQUISITES_URL', 'https://blagokirov.tb.ru/');

// Изображения для контента
define('MISSION_IMAGE', SITE_URL . '/assets/mission-image.jpg');

// Email для отправки заявок
define('CONTACT_EMAIL', 'blagoservice@mail.ru');

// Функция для форматирования телефона в ссылку
function format_phone_link($phone) {
    return 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
}

// Функция для получения canonical URL
function get_canonical_url($path = '') {
    $url = SITE_URL;
    if ($path) {
        $url .= '/' . trim($path, '/') . '/';
    } else {
        $url .= '/';
    }
    return $url;
}

