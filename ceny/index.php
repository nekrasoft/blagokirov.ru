<?php
require_once '../includes/config.php';

$pageTitle = 'Цены на вывоз мусора и демонтаж в Кирове | БлагоСервис';
$pageDescription = 'Актуальные цены БлагоСервис в Кирове: вывоз строительного мусора, аренда контейнера 8 м3, демонтаж и расчистка участка. Работаем по договору.';
$canonicalUrl = get_canonical_url('ceny');
$ogImage = SITE_URL . '/assets/blago-truck-shacman-3.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Цены БлагоСервис',
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
            'name' => 'Цены',
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
        <span>Цены</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Цены на услуги в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Прайс носит ориентировочный характер. Точная стоимость зависит от объема, логистики и состава отходов.
    </p>

    <section style="margin-bottom: 50px; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; min-width: 720px;">
            <thead>
                <tr style="background: #2c3e50; color: #fff;">
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee;">Услуга</th>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee;">Цена от</th>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee;">Что включено</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/" style="color:#007bff; text-decoration:none; font-weight:600;">Вывоз мусора</a></td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">1 200 ₽ / м3</td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">Подача техники, вывоз, утилизация</td>
                </tr>
                <tr style="background: #f8f9fa;">
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="color:#007bff; text-decoration:none; font-weight:600;">Аренда контейнера 8 м3</a></td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">11 000 ₽ / вывоз</td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">Контейнер, доставка, забор заполненного контейнера</td>
                </tr>
                <tr>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="<?php echo SITE_URL; ?>/demontazh-i-vyvoz-musora/" style="color:#007bff; text-decoration:none; font-weight:600;">Демонтаж и вывоз мусора</a></td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">30 000 ₽ / объект</td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">Демонтаж, погрузка, вывоз, утилизация</td>
                </tr>
                <tr style="background: #f8f9fa;">
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="<?php echo SITE_URL; ?>/raschistka-uchastka/" style="color:#007bff; text-decoration:none; font-weight:600;">Расчистка участка</a></td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">24 000 ₽ / объект</td>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">Расчистка, вывоз грунта и отходов, подготовка площадки</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Что влияет на стоимость</h2>
        <ul style="margin:0; padding-left: 20px; color:#333; line-height:1.9;">
            <li>Объем и тип отходов (строительные, КГО, смешанные)</li>
            <li>Наличие подъезда и условия погрузки на площадке</li>
            <li>Срочность подачи техники</li>
            <li>Требуемые документы для юрлица (договор, УПД, талоны полигона)</li>
        </ul>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Смотрите также</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/uslugi/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Все услуги</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Документы</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #2c3e50 0%, #1f2d3a 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Рассчитаем стоимость под ваш объем</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Позвоните или оставьте заявку, подготовим расчет и предложим оптимальный формат работы.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#2c3e50; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>" style="display:inline-block; background:#fff; color:#2c3e50; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_2; ?></a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Цены';
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
