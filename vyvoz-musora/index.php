<?php
require_once '../includes/config.php';

// SEO настройки страницы
$pageTitle = "Вывоз мусора в Кирове | 42-45-23 | БлагоСервис";
$pageDescription = "Профессиональный вывоз мусора в Кирове. Эффективная утилизация отходов, лицензированные услуги. Быстро, надёжно, выгодно. Звоните 42-45-23!";
$pageKeywords = "вывоз мусора, утилизация отходов, вывоз мусора Киров, вывоз строительного мусора, утилизация отходов Киров";
$canonicalUrl = get_canonical_url('vyvoz-musora');
$ogImage = SITE_URL . '/assets/blago-truck-shacman-3.jpg';

// Schema.org для услуги
$serviceSchema = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Вывоз мусора",
    "provider" => [
        "@type" => "LocalBusiness",
        "name" => COMPANY_NAME,
        "telephone" => PHONE_1,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => COMPANY_ADDRESS,
            "addressLocality" => COMPANY_CITY,
            "postalCode" => COMPANY_POSTAL_CODE,
            "addressCountry" => COMPANY_COUNTRY
        ]
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => COMPANY_CITY
    ],
    "description" => $pageDescription
];

include '../includes/header.php';
?>

<main style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <!-- Заголовок страницы -->
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Вывоз мусора в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Профессиональный вывоз мусора с лицензированной утилизацией отходов
    </p>

    <!-- Основной контент -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Эффективные услуги по вывозу мусора
        </h2>
        <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
            <div style="flex: 0 0 300px; max-width: 300px; min-width: 220px;">
                <img src="<?php echo SITE_URL; ?>/assets/vyvoz-musora.jpg" alt="Демонтаж построек"
                 style="width: 100%; max-width: 300px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>

            <div style="flex: 1 1 480px; min-width: 280px;">
                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    <strong>Благосервис</strong> предлагает экономичные услуги по вывозу мусора, сокращая потребность в транспорте
                    и обеспечивая экологически безопасную утилизацию отходов с помощью наших лицензированных услуг.
                </p>

                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Наше передовое оборудование заменяет несколько стандартных транспортных средств, оптимизируя ваши расходы
                    и обеспечивая надёжную утилизацию отходов. Мы используем современные технологии прессования и умные системы
                    сбора отходов с GPS-отслеживанием для оптимизации маршрутов.
                </p>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Почему выбирают нас?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">💰 Минимальные цены</h3>
                <p style="color: #666; margin: 0;">от 1200 ₽ за услугу</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">⚡ Быстрая работа</h3>
                <p style="color: #666; margin: 0;">Оперативный вывоз в день обращения</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">📋 Лицензия</h3>
                <p style="color: #666; margin: 0;">Лицензированная утилизация отходов</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🚚 Современный автопарк</h3>
                <p style="color: #666; margin: 0;">Пресс-загрузка и умные контейнеры</p>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Типы вывозимого мусора
        </h2>

        <ul style="line-height: 2; color: #333; font-size: 16px;">
            <li>Строительный мусор (бетон, кирпич, арматура)</li>
            <li>Бытовой мусор</li>
            <li>Крупногабаритные отходы</li>
            <li>Деревянные конструкции</li>
            <li>Металлолом</li>
            <li>Прочие отходы для утилизации</li>
        </ul>
    </section>

    <!-- Пакеты услуг -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Доступные пакеты
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="border: 2px solid #007bff; padding: 25px; border-radius: 10px; text-align: center;">
                <h3 style="color: #007bff; font-size: 22px; margin-bottom: 15px;">Базовый вывоз</h3>
                <p style="font-size: 24px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;">30 000 ₽</p>
                <p style="color: #666; margin-bottom: 15px;">за 25 м³</p>
                <p style="color: #333; margin-bottom: 20px;">Идеально для небольших и средних проектов</p>
                <a href="<?php echo format_phone_link(PHONE_1); ?>"
                   style="display: inline-block; background: #007bff; color: #fff; padding: 12px 30px;
                          text-decoration: none; border-radius: 5px; font-weight: bold;">
                    Звоните!
                </a>
            </div>

            <div style="border: 2px solid #28a745; padding: 25px; border-radius: 10px; text-align: center;">
                <h3 style="color: #28a745; font-size: 22px; margin-bottom: 15px;">Премиум вывоз</h3>
                <p style="font-size: 24px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;">36 000 ₽</p>
                <p style="color: #666; margin-bottom: 15px;">за 30 м³</p>
                <p style="color: #333; margin-bottom: 20px;">Для крупных проектов с приоритетом</p>
                <a href="<?php echo format_phone_link(PHONE_1); ?>"
                   style="display: inline-block; background: #28a745; color: #fff; padding: 12px 30px;
                          text-decoration: none; border-radius: 5px; font-weight: bold;">
                    Звоните!
                </a>
            </div>
        </div>
    </section>

    <!-- Дополнительная информация -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Как мы работаем
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">1</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Обращение</h3>
                <p style="color: #666;">Звонок или заявка на сайте</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">2</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Расчёт</h3>
                <p style="color: #666;">Оценка объёма и стоимости</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">3</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Вывоз</h3>
                <p style="color: #666;">Оперативный вывоз мусора</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">4</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Утилизация</h3>
                <p style="color: #666;">Лицензированная утилизация</p>
            </div>
        </div>
    </section>

    <!-- Галерея выполненных работ -->
    <?php
    // Настройка галереи для страницы
    // Добавьте свои изображения и видео Rutube в массив ниже
    $galleryItems = [
        // Примеры - замените на свои данные
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora1.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora2.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora3.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora4.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora5.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora6.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora8.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora9.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Устранение несанкционированной свалки'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora10.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Вывоз строительного мусора'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora11.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Вывоз строительного мусора'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora12.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Вывоз строительного мусора'],
        ['type' => 'image', 'url' => '/assets/vyvoz-musora/vyvoz-musora13.jpg', 'alt' => 'Вывоз мусора', 'title' => 'Киров', 'caption' => 'Демонтаж и вывоз мусора'],
    ];

    if (!empty($galleryItems)) {
        include '../includes/gallery.php';
    }
    ?>

    <!-- Призыв к действию -->
    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: #fff; padding: 40px 20px;
                    border-radius: 10px; margin-bottom: 50px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
                <!-- Левая часть: Текст и телефоны -->
                <div>
                    <h2 style="font-size: 32px; margin-bottom: 20px; text-align: center;">
                        Закажите вывоз мусора прямо сейчас!
                    </h2>
                    <p style="font-size: 18px; margin-bottom: 30px; text-align: center;">
                        Мы работаем ежедневно с 07:00 до 21:00. Оставьте заявку или позвоните нам!
                    </p>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 20px;">
                        <a href="<?php echo format_phone_link(PHONE_1); ?>"
                           style="display: inline-block; background: #fff; color: #007bff; padding: 15px 40px;
                                  text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 18px;">
                            <?php echo PHONE_1; ?>
                        </a>
                        <a href="<?php echo format_phone_link(PHONE_2); ?>"
                           style="display: inline-block; background: #fff; color: #007bff; padding: 15px 40px;
                                  text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 18px;">
                            <?php echo PHONE_2; ?>
                        </a>
                    </div>
                    <!-- Кнопка КП на мобильных -->
                    <div style="text-align: center;">
                        <a href="<?php echo SITE_URL; ?>/<?php echo COMMERCIAL_PROPOSAL_PDF; ?>"
                           target="_blank"
                           title="Скачать коммерческое предложение"
                           class="header-btn-kp header-btn-kp-mobile"
                           style="display: inline-block; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff !important; text-decoration: none; border-radius: 5px; font-weight: 600; font-size: 14px; border: 2px solid #fff;">
                            Коммерческое предложение
                        </a>
                    </div>
                </div>

                <!-- Правая часть: Форма -->
                <div>
                    <?php
                    $formType = 'order';
                    $pageName = 'Вывоз мусора';
                    include '../includes/callback-form.php';
                    ?>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 768px) {
                section > div > div {
                    grid-template-columns: 1fr !important;
                }
            }
        </style>
    </section>

</main>

<?php include '../includes/footer.php'; ?>

