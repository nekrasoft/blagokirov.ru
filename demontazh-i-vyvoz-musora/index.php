<?php
require_once '../includes/config.php';

$pageTitle = 'Демонтаж и вывоз мусора в Кирове | БлагоСервис 42-45-23';
$pageDescription = 'Комплексный демонтаж и вывоз мусора в Кирове: разборка построек, погрузка, вывоз и лицензированная утилизация отходов. Работаем под ключ.';
$pageKeywords = 'демонтаж и вывоз мусора Киров, демонтаж построек с вывозом, снос и вывоз мусора, демонтаж под ключ';
$canonicalUrl = get_canonical_url('demontazh-i-vyvoz-musora');
$ogImage = SITE_URL . '/assets/demontazh.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Демонтаж и вывоз мусора',
    'provider' => [
        '@type' => 'LocalBusiness',
        'name' => COMPANY_NAME,
        'telephone' => PHONE_1,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => COMPANY_ADDRESS,
            'addressLocality' => COMPANY_CITY,
            'postalCode' => COMPANY_POSTAL_CODE,
            'addressCountry' => COMPANY_COUNTRY
        ]
    ],
    'areaServed' => [
        '@type' => 'City',
        'name' => COMPANY_CITY
    ],
    'description' => $pageDescription
];

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Главная',
            'item' => SITE_URL . '/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Услуги',
            'item' => get_canonical_url('uslugi')
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => 'Демонтаж построек',
            'item' => get_canonical_url('demontazh-postroek')
        ],
        [
            '@type' => 'ListItem',
            'position' => 4,
            'name' => 'Демонтаж и вывоз мусора',
            'item' => $canonicalUrl
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
        <a href="<?php echo SITE_URL; ?>/demontazh-postroek/" style="color:#007bff; text-decoration:none;">Демонтаж построек</a>
        <span style="margin:0 6px;">/</span>
        <span>Демонтаж и вывоз мусора</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Демонтаж и вывоз мусора в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Берем на себя полный цикл работ: демонтаж конструкций, погрузка, вывоз и утилизация отходов по договору.
    </p>

    <section style="margin-bottom: 50px;">
        <div style="display:flex; gap:30px; flex-wrap:wrap; align-items:flex-start;">
            <div style="flex:0 0 320px; max-width:320px;">
                <img src="<?php echo SITE_URL; ?>/assets/demontazh.jpg" alt="Демонтаж и вывоз мусора" style="width:100%; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div style="flex:1 1 480px; min-width:280px;">
                <h2 style="font-size:28px; color:#2c3e50; margin-top:0; margin-bottom:16px;">Что входит в услугу</h2>
                <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
                    <li>Осмотр объекта и расчет стоимости работ</li>
                    <li>Демонтаж конструкций и подготовка к вывозу</li>
                    <li>Погрузка и вывоз отходов собственным транспортом</li>
                    <li>Лицензированная утилизация мусора</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Ориентировочная стоимость</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3; text-align:center;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Комплексный демонтаж</h3>
                <p style="margin:0 0 8px 0; font-size:30px; font-weight:700; color:#2c3e50;">от 30 000 ₽</p>
                <p style="margin:0; color:#666;">стоимость зависит от объема и типа конструкций</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3; text-align:center;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Срочные работы</h3>
                <p style="margin:0 0 8px 0; font-size:30px; font-weight:700; color:#2c3e50;">по запросу</p>
                <p style="margin:0; color:#666;">приоритетная подача техники и бригады</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Где применяем</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">Частный сектор</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Снос старых построек, гаражей, хозяйственных блоков.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">Коммерческие объекты</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Подготовка площадок под реконструкцию и перепланировку.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">Стройплощадки</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Разборка временных сооружений и вывоз накопленного мусора.</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom:50px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Связанные страницы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/demontazh-postroek/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Общая страница демонтажа</a>
            <a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Вывоз строительного мусора</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Закажите демонтаж под ключ</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Оценим объект, согласуем этапы работ и сразу включим вывоз отходов в общий план.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap; margin-bottom:18px;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#28a745; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>" style="display:inline-block; background:#fff; color:#28a745; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_2; ?></a>
                </div>
                <div style="text-align:center;">
                    <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>" target="_blank" style="display:inline-block; padding:10px 20px; background:rgba(255,255,255,0.2); color:#fff; text-decoration:none; border-radius:5px; border:2px solid #fff;">Коммерческое предложение</a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Демонтаж и вывоз мусора';
                include '../includes/callback-form.php';
                ?>
            </div>
        </div>

        <style>
            @media (max-width: 768px) {
                .cta-grid {
                    grid-template-columns: 1fr !important;
                }
            }
        </style>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
