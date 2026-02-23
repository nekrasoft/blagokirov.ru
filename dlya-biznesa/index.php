<?php
require_once '../includes/config.php';

$pageTitle = 'Вывоз мусора для бизнеса в Кирове | УК, застройщики, подрядчики';
$pageDescription = 'B2B-решения по вывозу мусора в Кирове: обслуживание УК и ТСЖ, стройплощадок и предприятий. Работаем по договору, с НДС и без НДС.';
$pageKeywords = 'вывоз мусора для бизнеса Киров, вывоз мусора для УК и ТСЖ, контейнеры для застройщиков, b2b вывоз отходов';
$canonicalUrl = get_canonical_url('dlya-biznesa');
$ogImage = SITE_URL . '/assets/blago-truck-shacman-4.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Вывоз мусора для бизнеса',
    'provider' => [
        '@type' => 'LocalBusiness',
        'name' => COMPANY_NAME,
        'telephone' => PHONE_1
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
            'name' => 'Для бизнеса',
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
        <span>Для бизнеса</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Для бизнеса: вывоз мусора и обслуживание объектов
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Работаем с УК и ТСЖ, застройщиками, подрядчиками и предприятиями. Договор, график работ, отчетные документы.
    </p>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Кому подходим</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="border:1px solid #dfe6ee; border-radius:10px; padding:20px;">
                <h3 style="margin-top:0; color:#007bff;">УК и ТСЖ</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Регулярный вывоз мусора и замена контейнеров по графику.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:10px; padding:20px;">
                <h3 style="margin-top:0; color:#007bff;">Застройщики</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Контейнеры на объекте и оперативный вывоз строительных отходов.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:10px; padding:20px;">
                <h3 style="margin-top:0; color:#007bff;">Подрядчики</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Разовые и регулярные выезды после демонтажа или ремонта.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:10px; padding:20px;">
                <h3 style="margin-top:0; color:#007bff;">Предприятия</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Вывоз накопленных отходов и обслуживание производственных площадок.</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Формат сотрудничества</h2>
        <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
            <li>Разовый выезд по заявке</li>
            <li>Обслуживание по фиксированному графику</li>
            <li>Вывоз контейнера заказчика или установка нашего контейнера</li>
            <li>Документооборот: договор, акты, УПД, подтверждение утилизации</li>
        </ul>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Коммерческие направления</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #e0e7ef; border-radius:10px; padding:20px;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Вывоз строительного мусора</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Подходит для генподрядчиков, ремонтных бригад и стройплощадок.</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #e0e7ef; border-radius:10px; padding:20px;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Контейнер 8 м3</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Решение для объектов с постоянным накоплением отходов.</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/demontazh-i-vyvoz-musora/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #e0e7ef; border-radius:10px; padding:20px;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Демонтаж + вывоз</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Удобный формат под ключ для реконструкций и подготовки площадок.</p>
            </a>
        </div>
    </section>

    <section style="margin-bottom:50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Документы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Пакет документов</a>
            <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>" target="_blank" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Коммерческое предложение PDF</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Обсудим условия для вашего объекта</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Согласуем график вывоза, формат оплаты и документооборот под требования вашей компании.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_3); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_3; ?></a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Для бизнеса';
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
