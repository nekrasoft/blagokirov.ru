<?php
require_once '../includes/config.php';

$pageTitle = 'Вывоз мусора для застройщиков в Кирове | Контейнеры и стройплощадки';
$pageDescription = 'Вывоз мусора для застройщиков и генподрядчиков в Кирове: контейнеры 8 м3, график замен, документы и подтверждение утилизации.';
$canonicalUrl = get_canonical_url('vyvoz-musora-dlya-zastroyshchikov');
$ogImage = SITE_URL . '/assets/blago-truck-shacman-4.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Вывоз мусора для застройщиков',
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
            'item' => get_canonical_url('dlya-biznesa')
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => 'Вывоз мусора для застройщиков',
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
        <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="color:#007bff; text-decoration:none;">Для бизнеса</a>
        <span style="margin:0 6px;">/</span>
        <span>Застройщики</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Вывоз мусора для застройщиков в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Обслуживаем стройплощадки и объекты капитального ремонта: подача контейнеров, вывоз по графику,
        закрывающие документы и подтверждение утилизации.
    </p>

    <section style="margin-bottom: 50px;">
        <div style="display:flex; gap:30px; flex-wrap:wrap; align-items:flex-start;">
            <div style="flex:0 0 320px; max-width:320px;">
                <img src="<?php echo SITE_URL; ?>/assets/blago-truck-shacman-4.jpg" alt="Вывоз мусора для застройщиков в Кирове" style="width:100%; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div style="flex:1 1 480px; min-width:280px;">
                <h2 style="font-size:28px; color:#2c3e50; margin-top:0; margin-bottom:16px;">Что получаете на объекте</h2>
                <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
                    <li>Контейнеры 8 м3 с быстрой подачей на площадку</li>
                    <li>Регулярная замена заполненных контейнеров без простоев</li>
                    <li>Вывоз строительных отходов после демонтажа и отделки</li>
                    <li>Работа по договору с фиксированными SLA и ответственными</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Ориентиры по стоимости</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Контейнер 8 м3</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 11 000 ₽</p>
                <p style="margin:0; color:#666;">за вывоз заполненного контейнера</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">По объему</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 1 200 ₽</p>
                <p style="margin:0; color:#666;">за 1 м3 для точечных задач</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Почасовой выезд</h3>
                <p style="margin:0 0 8px 0; font-size:28px; font-weight:700; color:#2c3e50;">от 3 500 ₽</p>
                <p style="margin:0; color:#666;">если объемы меняются от смены к смене</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom:50px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Связанные разделы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Вывоз строительного мусора</a>
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Контейнер 8 м3</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Соберем схему вывоза под ваш объект</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Зафиксируем график замен контейнеров, порядок заявок и пакет документов для бухгалтерии.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_3); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_3; ?></a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Вывоз для застройщиков';
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
