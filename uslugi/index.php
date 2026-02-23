<?php
require_once '../includes/config.php';

$pageTitle = 'Услуги БлагоСервис в Кирове | Вывоз мусора, контейнеры, демонтаж';
$pageDescription = 'Все услуги БлагоСервис в Кирове: вывоз мусора, аренда контейнеров 8 м3, демонтаж построек и расчистка участков. Быстрый заказ по телефону 42-45-23.';
$pageKeywords = 'услуги вывоза мусора Киров, аренда контейнеров 8 м3, демонтаж и вывоз мусора, расчистка участка';
$canonicalUrl = get_canonical_url('uslugi');
$ogImage = SITE_URL . '/assets/blago-truck.png';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Услуги БлагоСервис',
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
            'name' => 'Услуги',
            'item' => $canonicalUrl
        ]
    ]
];

include '../includes/header.php';
?>

<main style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Услуги БлагоСервис в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Вывоз мусора, аренда контейнеров, демонтаж и расчистка территории для частных и корпоративных клиентов.
    </p>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Основные услуги
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
            <a href="<?php echo SITE_URL; ?>/vyvoz-musora/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px; background:#fff;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Вывоз мусора</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Строительный, крупногабаритный и смешанный мусор с лицензированной утилизацией.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/arenda-kontejnerov/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px; background:#fff;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Аренда контейнеров</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Контейнеры 8 м3 с подачей, заменой и вывозом по согласованному графику.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/demontazh-postroek/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px; background:#fff;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Демонтаж построек</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Демонтаж частных и коммерческих объектов с вывозом отходов за одну услугу.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/raschistka-uchastka/" style="display:block; text-decoration:none; color:#2c3e50; border:1px solid #dfe6ee; border-radius:10px; padding:22px; background:#fff;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Расчистка участка</h3>
                <p style="margin:0; color:#555; line-height:1.6;">Подготовка участка к строительству: расчистка, вывоз и планировка территории.</p>
            </a>
        </div>
    </section>

    <section style="margin-bottom: 50px; background: #f8f9fa; padding: 30px; border-radius: 10px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Приоритетные коммерческие направления
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/" style="display:block; text-decoration:none; color:#2c3e50; background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Вывоз строительного мусора</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Вывоз после ремонта и стройки с подбором транспорта по объему и срокам.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:block; text-decoration:none; color:#2c3e50; background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Аренда контейнера 8 м3</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Оптимальный формат для стройплощадок, УК и объектов со стабильным потоком отходов.</p>
            </a>

            <a href="<?php echo SITE_URL; ?>/demontazh-i-vyvoz-musora/" style="display:block; text-decoration:none; color:#2c3e50; background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#2c3e50;">Демонтаж и вывоз мусора</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Комплексная услуга под ключ: демонтаж, погрузка и лицензированная утилизация.</p>
            </a>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">
            Смежные разделы
        </h2>

        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Документы</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: #fff; padding: 40px 20px; border-radius: 10px; margin-bottom: 50px;">
        <div class="cta-grid" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
            <div>
                <h2 style="font-size: 32px; margin-bottom: 20px; text-align: center;">Подберем услугу под ваш объект</h2>
                <p style="font-size: 18px; margin-bottom: 25px; text-align: center;">Позвоните или оставьте заявку. Рассчитаем формат вывоза и стоимость в день обращения.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_2; ?></a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Услуги';
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
