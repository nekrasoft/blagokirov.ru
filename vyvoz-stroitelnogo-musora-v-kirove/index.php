<?php
require_once '../includes/config.php';

$pageTitle = 'Вывоз строительного мусора в Кирове | БлагоСервис 42-45-23';
$pageDescription = 'Вывоз строительного мусора в Кирове после ремонта и демонтажа. Подача техники, погрузка и лицензированная утилизация. Оперативный выезд по заявке.';
$canonicalUrl = get_canonical_url('vyvoz-stroitelnogo-musora-v-kirove');
$ogImage = SITE_URL . '/assets/blago-truck-shacman-3.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Вывоз строительного мусора',
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
            'name' => 'Вывоз мусора',
            'item' => get_canonical_url('vyvoz-musora')
        ],
        [
            '@type' => 'ListItem',
            'position' => 4,
            'name' => 'Вывоз строительного мусора',
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
        <a href="<?php echo SITE_URL; ?>/vyvoz-musora/" style="color:#007bff; text-decoration:none;">Вывоз мусора</a>
        <span style="margin:0 6px;">/</span>
        <span>Вывоз строительного мусора</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Вывоз строительного мусора в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Вывозим мусор после ремонта, перепланировки и демонтажа. Работаем быстро, официально и с подтверждением утилизации.
    </p>

    <section style="margin-bottom: 50px;">
        <div style="display:flex; gap:30px; flex-wrap:wrap; align-items:flex-start;">
            <div style="flex:0 0 320px; max-width:320px;">
                <img src="<?php echo SITE_URL; ?>/assets/blago-truck-shacman-3.jpg" alt="Вывоз строительного мусора в Кирове" style="width:100%; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div style="flex:1 1 480px; min-width:280px;">
                <h2 style="font-size:28px; color:#2c3e50; margin-top:0; margin-bottom:16px;">Что вывозим</h2>
                <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
                    <li>Бой кирпича, бетона, плитки, штукатурки</li>
                    <li>Мешки после ремонта, остатки отделочных материалов</li>
                    <li>Крупногабаритные отходы после демонтажа</li>
                    <li>Смешанный строительный мусор с объекта</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Ориентировочные тарифы</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">По объему</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 1 200 ₽</p>
                <p style="margin:0; color:#666;">за 1 м3, для точных объемов и разового вывоза</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Контейнер 8 м3</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 11 000 ₽</p>
                <p style="margin:0; color:#666;">за вывоз заполненного контейнера</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Почасовой формат</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 3 500 ₽</p>
                <p style="margin:0; color:#666;">удобно для объектов с переменным объемом</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Связанные страницы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/vyvoz-musora/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Вывоз мусора (все форматы)</a>
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Контейнер 8 м3</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Оставьте заявку на вывоз</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Подберем машину под объем, согласуем удобное время и подготовим расчет до выезда.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap; margin-bottom:18px;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_2; ?></a>
                </div>
                <div style="text-align:center;">
                    <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>" target="_blank" style="display:inline-block; padding:10px 20px; background:rgba(255,255,255,0.2); color:#fff; text-decoration:none; border-radius:5px; border:2px solid #fff;">Коммерческое предложение</a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Вывоз строительного мусора';
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
