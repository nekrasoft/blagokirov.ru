<?php
require_once '../includes/config.php';

$pageTitle = "Аренда контейнеров для мусора в Кирове | БлагоСервис 42-45-23";
$pageDescription = "Аренда контейнеров для мусора в Кирове для стройки, ремонта и бизнеса. Подача и замена контейнера по графику, вывоз и лицензированная утилизация отходов.";
$canonicalUrl = get_canonical_url('arenda-kontejnerov');
$ogImage = SITE_URL . '/assets/blago-bunker3.jpg';

$serviceSchema = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Аренда мусорных контейнеров",
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
            "name" => "Аренда контейнеров",
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
        <span>Аренда контейнеров</span>
    </nav>

    <!-- Заголовок страницы -->
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Аренда контейнеров для мусора в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Подберем формат обслуживания под объект: разовый вывоз или работа по графику. Базовый и самый востребованный вариант — контейнер 8 м3.
    </p>

    <!-- Основной контент -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Форматы аренды контейнеров
        </h2>
        <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
            <div style="flex: 0 0 300px; max-width: 300px; min-width: 220px;">
                <img src="<?php echo SITE_URL; ?>/assets/blago-bunker4.jpg" alt="Бункер-накопитель 8м3" style="width:100%; height:auto; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.12); display:block;">
            </div>

            <div style="flex: 1 1 480px; min-width: 280px;">
                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    <strong>Благосервис</strong> организует аренду контейнеров для стройки, ремонта, демонтажа и обслуживания
                    коммерческих объектов. Работаем в разовом формате и на регулярной основе с заменой по согласованному графику.
                </p>

                <p style="line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Основной рабочий формат — контейнер 8 м3: оптимален для большинства задач и доступен с оперативной подачей.
                    Для этого формата у нас есть отдельная коммерческая страница с точечными условиями и тарифами.
                </p>

                <p style="margin: 0;">
                    <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:inline-block; padding:10px 16px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none; font-weight:600;">
                        Контейнер 8 м3
                    </a>
                </p>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Преимущества аренды контейнеров
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">📦 Базовый формат 8 м³</h3>
                <p style="color: #666; margin: 0;">Самый востребованный объем для большинства объектов</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">📡 Без отдельной платы за подачу</h3>
                <p style="color: #666; margin: 0;">Оплата — за вывоз заполненного контейнера (от 11 000 ₽).</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">🚚 Быстрая доставка</h3>
                <p style="color: #666; margin: 0;">Доставка и установка в день заказа</p>
            </div>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: #007bff; margin-bottom: 10px;">⏰ Гибкие сроки</h3>
                <p style="color: #666; margin: 0;">Аренда на любой удобный вам срок</p>
            </div>
        </div>
    </section>

    <!-- Применение -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Для чего подходят наши контейнеры
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="border: 1px solid #ddd; padding: 25px; border-radius: 10px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">🏗️ Строительные площадки</h3>
                <p style="color: #666; margin: 0;">Сбор строительного мусора на объектах</p>
            </div>

            <div style="border: 1px solid #ddd; padding: 25px; border-radius: 10px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">🏢 Коммерческие объекты</h3>
                <p style="color: #666; margin: 0;">Регулярный сбор отходов от бизнеса</p>
            </div>

            <div style="border: 1px solid #ddd; padding: 25px; border-radius: 10px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">🔧 Ремонтные работы</h3>
                <p style="color: #666; margin: 0;">Сбор мусора при ремонте и реконструкции</p>
            </div>
        </div>
    </section>

    <!-- Пакет услуг -->
    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 40px; border-radius: 10px; text-align: center;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 25px;">
            Аренда бункеров
        </h2>

        <div style="max-width: 400px; margin: 0 auto; border: 2px solid #007bff; padding: 30px; border-radius: 10px; background: #fff;">
            <h3 style="color: #007bff; font-size: 22px; margin-bottom: 15px;">Контейнер 8 м³</h3>
            <p style="font-size: 24px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;">11 000 ₽</p>
            <p style="color: #666; margin-bottom: 15px;">за 1 вывоз</p>
            <ul style="text-align: left; color: #333; margin-bottom: 20px; list-style: none; padding: 0;">
                <li style="margin: 10px 0;">✓ Контейнер 8 м³</li>
                <li style="margin: 10px 0;">✓ Гибкая продолжительность аренды</li>
                <li style="margin: 10px 0;">✓ Планируемый забор и доставка</li>
                <li style="margin: 10px 0;">✓ Мониторинг заполнения</li>
            </ul>
            <a href="<?php echo format_phone_link(PHONE_1); ?>"
               style="display: inline-block; background: #007bff; color: #fff; padding: 12px 30px;
                      text-decoration: none; border-radius: 5px; font-weight: bold;">
                Звоните!
            </a>
        </div>

        <p style="margin-top: 20px; color: #666; font-size: 14px;">
            * Цена может варьироваться в зависимости от срока аренды и объёма вывоза
        </p>
    </section>

    <!-- Процесс работы -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Как работает аренда
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">1</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Заявка</h3>
                <p style="color: #666;">Звонок или заявка на аренду</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">2</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Доставка</h3>
                <p style="color: #666;">Доставка контейнера на объект</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">3</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Мониторинг</h3>
                <p style="color: #666;">Контроль уровня заполнения</p>
            </div>

            <div style="text-align: center; padding: 20px;">
                <div style="background: #007bff; color: #fff; width: 60px; height: 60px; border-radius: 50%;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;
                            font-size: 24px; font-weight: bold;">4</div>
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Забор</h3>
                <p style="color: #666;">Своевременный забор и вывоз</p>
            </div>
        </div>
    </section>

    <!-- Галерея выполненных работ -->
    <?php
    // Настройка галереи для страницы
    // Добавьте свои изображения и видео Rutube в массив ниже
    $galleryItems = [
        // Примеры - замените на свои данные
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-1-do.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'До'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-1-posle.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'После'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-2-do.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'До'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-2-posle.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'После'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-3-do.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'До'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-3-posle.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'После'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-5-do.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'До'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunker-5-posle.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'После'],
        ['type' => 'image', 'url' => '/assets/bunkers/bunkers.jpg', 'alt' => 'Аренда контейнеров', 'title' => 'Киров', 'caption' => 'Микрорайон "Знак"'],
        // ['type' => 'video', 'url' => 'https://rutube.ru/video/123456/', 'title' => 'Видео с работой', 'caption' => 'Процесс установки контейнера'],
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
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Контейнер 8 м3</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
        </div>
    </section>

    <!-- Призыв к действию -->
    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: #fff; padding: 40px 20px;
                    border-radius: 10px; margin-bottom: 50px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
                <div>
                    <h2 style="font-size: 32px; margin-bottom: 20px; text-align: center;">
                        Закажите аренду контейнера прямо сейчас!
                    </h2>
                    <p style="font-size: 18px; margin-bottom: 30px; text-align: center;">
                        Гибкие условия аренды, надёжная доставка, своевременный вывоз, постоплата. Звоните!
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
                    $pageName = 'Аренда контейнеров';
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
