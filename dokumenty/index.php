<?php
require_once '../includes/config.php';

$pageTitle = 'Документы и реквизиты | БлагоСервис Киров';
$pageDescription = 'Документы БлагоСервис: коммерческое предложение, мини-презентация, реквизиты, политика конфиденциальности. Работаем официально по договору.';
$canonicalUrl = get_canonical_url('dokumenty');
$ogImage = SITE_URL . '/assets/blago-truck.png';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Документы БлагоСервис',
    'url' => $canonicalUrl,
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
            'name' => 'Документы',
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
        <span>Документы</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Документы и реквизиты
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Собрали ключевые документы в одном разделе для быстрого согласования с бухгалтерией и отделом закупок.
    </p>

    <section style="margin-bottom: 50px;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>" target="_blank" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px;">
                <h2 style="font-size:22px; margin:0 0 10px 0; color:#007bff;">Коммерческое предложение</h2>
                <p style="margin:0; color:#555; line-height:1.6;">PDF с условиями работы, тарифами и вариантами обслуживания.</p>
            </a>

            <a href="<?php echo LICENSE_PDF_URL; ?>" target="_blank" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px;">
                <h2 style="font-size:22px; margin:0 0 10px 0; color:#007bff;">Лицензия</h2>
                <p style="margin:0; color:#555; line-height:1.6;">Действующая лицензия на деятельность по обращению с отходами.</p>
            </a>

            <a href="<?php echo SERVICES_PRESENTATION_PDF_URL; ?>" target="_blank" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px;">
                <h2 style="font-size:22px; margin:0 0 10px 0; color:#007bff;">Мини-презентация</h2>
                <p style="margin:0; color:#555; line-height:1.6;">Краткая презентация услуг и преимуществ для внутреннего согласования.</p>
            </a>

            <a href="<?php echo REQUISITES_URL; ?>" target="_blank" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px;">
                <h2 style="font-size:22px; margin:0 0 10px 0; color:#007bff;">Реквизиты компании</h2>
                <p style="margin:0; color:#555; line-height:1.6;">Актуальные реквизиты для договора, счета и оплаты услуг.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/policy.php" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px;">
                <h2 style="font-size:22px; margin:0 0 10px 0; color:#007bff;">Политика конфиденциальности</h2>
                <p style="margin:0; color:#555; line-height:1.6;">Условия обработки персональных данных на сайте.</p>
            </a>
        </div>
    </section>

    <section style="margin-bottom:50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Документооборот для юрлиц</h2>
        <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
            <li>Работа по договору с фиксированными условиями</li>
            <li>Оплата с НДС и без НДС</li>
            <li>Закрывающие документы по факту оказания услуг</li>
            <li>Подтверждение утилизации отходов по заявке</li>
        </ul>
    </section>

    <section style="margin-bottom:50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Связанные разделы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/uslugi/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Услуги</a>
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #2c3e50 0%, #1f2d3a 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Нужен комплект документов под тендер или закупку?</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Свяжитесь с нами, подготовим пакет документов и согласуем формат взаимодействия.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#2c3e50; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_3); ?>" style="display:inline-block; background:#fff; color:#2c3e50; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_3; ?></a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Документы';
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
