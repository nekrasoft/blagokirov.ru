<?php
require_once '../includes/config.php';

// SEO настройки страницы
$pageTitle = "Расчистка и подготовка участка к строительству в Кирове - БлагоСервис | 42-45-23";
$pageDescription = "Профессиональная расчистка и подготовка участка к строительству в Кирове. Вывоз грунта, демонтаж старых построек, планировка территории. Полный комплекс работ. Звоните 42-45-23!";
$pageKeywords = "расчистка участка, подготовка к строительству, вывоз грунта, расчистка территории, планировка участка, подготовка участка Киров";
$canonicalUrl = get_canonical_url('raschistka-uchastka');
$ogImage = SITE_URL . '/assets/raschistka/raschistka3.jpg';

// Schema.org для услуги
$serviceSchema = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Расчистка и подготовка участка",
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
            "name" => "Расчистка участка",
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
        <span>Расчистка участка</span>
    </nav>

    <!-- Заголовок страницы -->
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Расчистка и подготовка участка к строительству
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Комплексная расчистка территории с вывозом отходов и планировкой участка
    </p>

    <!-- Основной контент -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Подготовка участка к строительству
        </h2>
        <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
            <div style="flex: 0 0 300px; max-width: 300px; min-width: 220px;">
                <img src="<?php echo SITE_URL; ?>/assets/raschistka/raschistka3.jpg" alt="Расчистка участка"
                 style="width: 100%; max-width: 500px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>

            <div style="flex: 1 1 480px; min-width: 280px;">
                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    <strong>Благосервис</strong> предоставляет полный комплекс работ по расчистке и подготовке участка к строительству.
                    Мы выполняем все необходимые этапы: от вывоза старых построек до планировки территории и вывоза грунта.
                </p>

                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Наши квалифицированные специалисты используют современное оборудование для эффективной расчистки территории
                    любого размера. Мы обеспечиваем быстрый и надёжный сервис для больших объёмов работ с гарантией качества.
                </p>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Преимущества наших работ
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🔧 Полный комплекс</h3>
                <p style="color: #666; margin: 0;">Все работы по расчистке в одном месте</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🚛 Собственная техника</h3>
                <p style="color: #666; margin: 0;">Современный автопарк и оборудование</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">⚡ Быстро</h3>
                <p style="color: #666; margin: 0;">Оперативное выполнение работ</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">✅ Гарантия</h3>
                <p style="color: #666; margin: 0;">Гарантия качества выполненных работ</p>
            </div>
        </div>
    </section>

    <!-- Виды работ -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Что включает расчистка участка
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
            <div style="border-left: 4px solid #007bff; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">🌳 Удаление растительности</h3>
                <p style="color: #666; margin: 0;">Вырубка деревьев и кустарников, очистка от травы</p>
            </div>

            <div style="border-left: 4px solid #28a745; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">🏚️ Демонтаж построек</h3>
                <p style="color: #666; margin: 0;">Разборка и снос старых зданий и сооружений</p>
            </div>

            <div style="border-left: 4px solid #ffc107; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">🚜 Вывоз грунта</h3>
                <p style="color: #666; margin: 0;">Вывоз лишнего грунта и планировка территории</p>
            </div>

            <div style="border-left: 4px solid #dc3545; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">📦 Вывоз мусора</h3>
                <p style="color: #666; margin: 0;">Сбор и вывоз всех отходов с участка</p>
            </div>

            <div style="border-left: 4px solid #17a2b8; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">🗺️ Планировка</h3>
                <p style="color: #666; margin: 0;">Выравнивание участка под строительство</p>
            </div>

            <div style="border-left: 4px solid #6f42c1; padding-left: 20px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">🚛 Утилизация</h3>
                <p style="color: #666; margin: 0;">Лицензированная утилизация всех отходов</p>
            </div>
        </div>
    </section>

    <!-- Этапы работы -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Этапы выполнения работ
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">1</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Осмотр</h3>
                <p style="color: #666; margin: 0;">Выезд специалиста и оценка участка</p>
            </div>

            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">2</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Планирование</h3>
                <p style="color: #666; margin: 0;">Составление плана и сметы работ</p>
            </div>

            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">3</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Расчистка</h3>
                <p style="color: #666; margin: 0;">Выполнение всех работ по расчистке</p>
            </div>

            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">4</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Вывоз</h3>
                <p style="color: #666; margin: 0;">Вывоз всех отходов и мусора</p>
            </div>

            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">5</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Планировка</h3>
                <p style="color: #666; margin: 0;">Выравнивание и подготовка участка</p>
            </div>

            <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 10px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">6</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Приёмка</h3>
                <p style="color: #666; margin: 0;">Приёмка работ и сдача участка</p>
            </div>
        </div>
    </section>

    <!-- Оборудование -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Используемое оборудование
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px; background: #fff; border-radius: 8px;">
                <div style="font-size: 48px; margin-bottom: 10px;">🚚</div>
                <h3 style="color: #2c3e50; margin-bottom: 5px;">Грузовики</h3>
                <p style="color: #666; margin: 0; font-size: 14px;">Вывоз мусора и грунта</p>
            </div>

            <div style="text-align: center; padding: 20px; background: #fff; border-radius: 8px;">
                <div style="font-size: 48px; margin-bottom: 10px;">🔨</div>
                <h3 style="color: #2c3e50; margin-bottom: 5px;">Экскаваторы</h3>
                <p style="color: #666; margin: 0; font-size: 14px;">Для работ по расчистке</p>
            </div>

            <div style="text-align: center; padding: 20px; background: #fff; border-radius: 8px;">
                <div style="font-size: 48px; margin-bottom: 10px;">⚙️</div>
                <h3 style="color: #2c3e50; margin-bottom: 5px;">Пресс-загрузка</h3>
                <p style="color: #666; margin: 0; font-size: 14px;">Уплотнение отходов</p>
            </div>

            <div style="text-align: center; padding: 20px; background: #fff; border-radius: 8px;">
                <div style="font-size: 48px; margin-bottom: 10px;">📦</div>
                <h3 style="color: #2c3e50; margin-bottom: 5px;">Контейнеры</h3>
                <p style="color: #666; margin: 0; font-size: 14px;">Временное хранение</p>
            </div>
        </div>
    </section>

    <!-- Галерея выполненных работ -->
    <?php
    // Настройка галереи для страницы
    // Добавьте свои изображения и видео Rutube в массив ниже
    $galleryItems = [
        // Примеры - замените на свои данные
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka1.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka2.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka2_1.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka2_2.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka3.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka4.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka5.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        ['type' => 'image', 'url' => '/assets/raschistka/raschistka6.jpg', 'alt' => 'Расчистка участка', 'title' => 'Киров, д.Шустовы', 'caption' => 'Подготовка участка к строительству'],
        // ['type' => 'video', 'url' => 'https://rutube.ru/video/123456/', 'title' => 'Видео с работой', 'caption' => 'Процесс расчистки участка'],
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
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Документы</a>
        </div>
    </section>

    <!-- Призыв к действию -->
    <section style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: #fff; padding: 40px 20px;
                    border-radius: 10px; margin-bottom: 50px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
                <div>
                    <h2 style="font-size: 32px; margin-bottom: 20px; text-align: center;">
                        Закажите расчистку участка прямо сейчас!
                    </h2>
                    <p style="font-size: 18px; margin-bottom: 30px; text-align: center;">
                        Полный комплекс работ по подготовке участка к строительству. Быстро, качественно, с гарантией!
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
                    <div style="text-align: center; margin-top: 20px;">
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
                    $pageName = 'Расчистка участка';
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

