<?php
require_once '../includes/config.php';

// SEO настройки страницы
$pageTitle = "Демонтаж построек в Кирове | 42-45-23 | БлагоСервис";
$pageDescription = "Профессиональный демонтаж в Кирове с вывозом и утилизацией. Демонтажные работы оперативно. Звоните 42-45-23!";
$pageKeywords = "демонтаж построек, снос зданий, демонтаж Киров, снос домов, демонтаж с вывозом, разборка построек";
$canonicalUrl = get_canonical_url('demontazh-postroek');
$ogImage = SITE_URL . '/assets/demontazh.jpg';

// Schema.org для услуги
$serviceSchema = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Демонтаж построек",
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

$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Главная",
            "item" => SITE_URL . "/"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Услуги",
            "item" => get_canonical_url("uslugi")
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Демонтаж построек",
            "item" => $canonicalUrl
        ]
    ]
];

include '../includes/header.php';
?>

<main style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <nav aria-label="Хлебные крошки" style="font-size:14px; color:#6c757d; margin-bottom:18px;">
        <a href="<?php echo SITE_URL; ?>/" style="color:#007bff; text-decoration:none;">Главная</a>
        <span style="margin:0 6px;">/</span>
        <a href="<?php echo SITE_URL; ?>/uslugi/" style="color:#007bff; text-decoration:none;">Услуги</a>
        <span style="margin:0 6px;">/</span>
        <span>Демонтаж построек</span>
    </nav>

    <!-- Заголовок страницы -->
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Демонтаж построек в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        <span style="color: #dc3545">Бесплатный демонтаж</span>. Берём деньги только за вывоз и утилизацию.
    </p>

    <!-- Основной контент -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Демонтажные работы
        </h2>
        <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
            <div style="flex: 0 0 300px; max-width: 300px; min-width: 220px;">
                <img src="<?php echo SITE_URL; ?>/assets/deconstruction2.jpg" alt="Демонтаж построек"
                 style="width: 100%; max-width: 500px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>

            <div style="flex: 1 1 480px; min-width: 280px;">
                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    <strong>Благосервис</strong> предлагает профессиональные услуги по демонтажу построек с последующим вывозом
                    и утилизацией отходов. Наша технология прессования эффективно уплотняет мусор, уменьшая объём и транспортные
                    расходы.
                </p>

                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Этот метод идеально подходит для крупных проектов, обеспечивая более быстрое управление отходами и значительную
                    экономию средств для наших клиентов. Все работы выполняются оперативно на месте с использованием современного
                    оборудования.
                </p>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Преимущества нашего демонтажа
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">⚡ Оперативность</h3>
                <p style="color: #666; margin: 0;">Демонтаж выполняется быстро и профессионально</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🗜️ Прессование</h3>
                <p style="color: #666; margin: 0;">Эффективное уплотнение уменьшает объём и расходы</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🚛 Вывоз включён</h3>
                <p style="color: #666; margin: 0;">Вывоз и утилизация входят в услугу</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">💼 Лицензия</h3>
                <p style="color: #666; margin: 0;">Все работы выполняются по лицензии</p>
            </div>
        </div>
    </section>

    <!-- Виды демонтажа -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Виды демонтажных работ
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
            <div style="border-left: 4px solid #007bff; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Демонтаж зданий</h3>
                <p style="color: #666; margin: 0;">Полный демонтаж жилых и нежилых зданий</p>
            </div>

            <div style="border-left: 4px solid #28a745; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Разборка конструкций</h3>
                <p style="color: #666; margin: 0;">Разборка металлических и бетонных конструкций</p>
            </div>

            <div style="border-left: 4px solid #ffc107; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Снос заборов</h3>
                <p style="color: #666; margin: 0;">Демонтаж заборов и ограждений</p>
            </div>

            <div style="border-left: 4px solid #dc3545; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Удаление фундаментов</h3>
                <p style="color: #666; margin: 0;">Разборка и вывоз старых фундаментов</p>
            </div>
        </div>
    </section>

    <!-- Пакет услуг -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 40px; border-radius: 10px; text-align: center;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Демонтаж построек
        </h2>

        <div style="max-width: 400px; margin: 0 auto; border: 2px solid #007bff; padding: 30px; border-radius: 10px; background: #fff;">
            <h3 style="color: #007bff; font-size: 22px; margin-bottom: 15px;">Полный демонтаж</h3>
            <p style="font-size: 24px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;">30 000 ₽</p>
            <p style="color: #666; margin-bottom: 15px;">за операцию</p>
            <ul style="text-align: left; color: #333; margin-bottom: 20px; list-style: none; padding: 0;">
                <li style="margin: 10px 0;">✓ Эффективное уплотнение отходов</li>
                <li style="margin: 10px 0;">✓ Операция на месте</li>
                <li style="margin: 10px 0;">✓ Подходит для больших объёмов</li>
                <li style="margin: 10px 0;">✓ Вывоз и утилизация включены</li>
            </ul>
            <a href="<?php echo format_phone_link(PHONE_1); ?>"
               style="display: inline-block; background: #007bff; color: #fff; padding: 12px 30px;
                      text-decoration: none; border-radius: 5px; font-weight: bold;">
                Звоните!
            </a>
        </div>
    </section>

    <!-- Процесс работы -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Этапы демонтажа
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">1</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Оценка</h3>
                <p style="color: #666;">Осмотр объекта и расчёт стоимости</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">2</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Подготовка</h3>
                <p style="color: #666;">Подготовка техники и согласование</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">3</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Демонтаж</h3>
                <p style="color: #666;">Профессиональный демонтаж объекта</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">4</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Вывоз</h3>
                <p style="color: #666;">Вывоз и утилизация отходов</p>
            </div>
        </div>
    </section>

    <!-- Галерея выполненных работ -->
    <?php
    // Настройка галереи для страницы
    // Добавьте свои изображения и видео Rutube в массив ниже
    $galleryItems = [
        // Примеры - замените на свои данные
        // ['type' => 'image', 'url' => '/assets/demontazh1.jpg', 'alt' => 'Демонтаж построек', 'title' => 'Проект 1', 'caption' => 'Описание работы'],
        // ['type' => 'image', 'url' => '/assets/demontazh2.jpg', 'alt' => 'Демонтаж построек 2'],
        // ['type' => 'video', 'url' => 'https://rutube.ru/video/123456/', 'title' => 'Видео с работой', 'caption' => 'Процесс демонтажа'],
    ];

    if (!empty($galleryItems)) {
        include '../includes/gallery.php';
    }
    ?>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Смотрите также
        </h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/uslugi/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Все услуги</a>
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/demontazh-i-vyvoz-musora/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Демонтаж и вывоз</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
        </div>
    </section>

    <!-- Призыв к действию -->
    <section style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: #fff; padding: 40px 20px;
                    border-radius: 10px; margin-bottom: 50px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
                <div>
                    <h2 style="font-size: 32px; margin-bottom: 20px; text-align: center;">
                        Закажите демонтаж построек прямо сейчас!
                    </h2>
                    <p style="font-size: 18px; margin-bottom: 30px; text-align: center;">
                        Опытная команда, современное оборудование, гарантированная утилизация
                    </p>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 20px;">
                        <a href="<?php echo format_phone_link(PHONE_1); ?>"
                           style="display: inline-block; background: #fff; color: #28a745; padding: 15px 40px;
                                  text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 18px;">
                            <?php echo PHONE_1; ?>
                        </a>
                        <a href="<?php echo format_phone_link(PHONE_2); ?>"
                           style="display: inline-block; background: #fff; color: #28a745; padding: 15px 40px;
                                  text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 18px;">
                            <?php echo PHONE_2; ?>
                        </a>
                    </div>
                    <div style="text-align: center;">
                        <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>"
                           target="_blank"
                           title="Скачать коммерческое предложение"
                           class="header-btn-kp header-btn-kp-mobile"
                           style="display: inline-block; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff !important; text-decoration: none; border-radius: 5px; font-weight: 600; font-size: 14px; border: 2px solid #fff;">
                            Коммерческое предложение
                        </a>
                    </div>
                </div>
                <div>
                    <?php
                    $formType = 'order';
                    $pageName = 'Демонтаж построек';
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
