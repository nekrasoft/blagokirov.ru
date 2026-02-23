<?php
require_once '../includes/config.php';

$pageTitle = 'Аренда контейнера 8 м3 в Кирове | БлагоСервис 42-45-23';
$pageDescription = 'Аренда контейнера 8 м3 в Кирове для стройки, ремонта и бизнеса. Быстрая подача, замена контейнера по графику, вывоз и утилизация отходов.';
$pageKeywords = 'аренда контейнера 8 м3 Киров, заказать контейнер для мусора, бункер 8 кубов, вывоз контейнера Киров';
$canonicalUrl = get_canonical_url('arenda-kontejnera-8m3-v-kirove');
$ogImage = SITE_URL . '/assets/blago-bunker4.jpg';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Аренда контейнера 8 м3',
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

include '../includes/header.php';
?>

<main style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Аренда контейнера 8 м3 в Кирове
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Контейнер для строительного мусора, КГО и смешанных отходов. Подача в день обращения и своевременная замена.
    </p>

    <section style="margin-bottom: 50px;">
        <div style="display:flex; gap:30px; flex-wrap:wrap; align-items:flex-start;">
            <div style="flex:0 0 320px; max-width:320px;">
                <img src="<?php echo SITE_URL; ?>/assets/blago-bunker4.jpg" alt="Аренда контейнера 8 м3 в Кирове" style="width:100%; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div style="flex:1 1 480px; min-width:280px;">
                <h2 style="font-size:28px; color:#2c3e50; margin-top:0; margin-bottom:16px;">Условия аренды</h2>
                <ul style="margin:0; padding-left:20px; color:#333; line-height:1.9;">
                    <li>Аренда контейнера 0 ₽, оплата только за вывоз</li>
                    <li>Объем 8 м3 - универсальный формат для большинства задач</li>
                    <li>Работаем с НДС и без НДС, доступна постоплата для юрлиц</li>
                    <li>По запросу подключаем обслуживание по графику</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Ориентировочная стоимость</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3; text-align:center;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Контейнер 8 м3</h3>
                <p style="margin:0 0 8px 0; font-size:30px; font-weight:700; color:#2c3e50;">от 10 000 ₽</p>
                <p style="margin:0; color:#666;">за вывоз заполненного контейнера</p>
            </div>
            <div style="background:#fff; border-radius:8px; padding:20px; border:1px solid #e7edf3; text-align:center;">
                <h3 style="margin:0 0 10px 0; color:#007bff;">Для бизнеса</h3>
                <p style="margin:0 0 8px 0; font-size:30px; font-weight:700; color:#2c3e50;">по графику</p>
                <p style="margin:0; color:#666;">фиксируем периодичность замены и документооборот в договоре</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 50px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Для каких задач подходит</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">Стройка и ремонт</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Сбор и накопление отходов прямо на площадке.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">УК и ТСЖ</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Плановая замена контейнеров для обслуживания домов.</p>
            </div>
            <div style="border:1px solid #dfe6ee; border-radius:8px; padding:20px;">
                <h3 style="margin-top:0; color:#2c3e50;">Подрядные организации</h3>
                <p style="margin:0; color:#666; line-height:1.6;">Удобный формат для временных или поэтапных работ.</p>
            </div>
        </div>
    </section>

    <section style="margin-bottom:50px;">
        <h2 style="font-size:28px; color:#2c3e50; margin-bottom:20px;">Связанные страницы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnerov/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Общая страница услуги</a>
        </div>
    </section>

    <section style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color:#fff; padding:40px 20px; border-radius:10px; margin-bottom:50px;">
        <div class="cta-grid" style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start;">
            <div>
                <h2 style="font-size:32px; margin-bottom:20px; text-align:center;">Закажите контейнер 8 м3</h2>
                <p style="font-size:18px; margin-bottom:25px; text-align:center;">Согласуем время подачи и формат замены контейнера под ваш объект.</p>
                <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap; margin-bottom:18px;">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>" style="display:inline-block; background:#fff; color:#007bff; padding:14px 34px; text-decoration:none; border-radius:5px; font-weight:bold;"><?php echo PHONE_2; ?></a>
                </div>
                <div style="text-align:center;">
                    <a href="<?php echo SITE_URL; ?>/<?php echo COMMERCIAL_PROPOSAL_PDF; ?>" target="_blank" style="display:inline-block; padding:10px 20px; background:rgba(255,255,255,0.2); color:#fff; text-decoration:none; border-radius:5px; border:2px solid #fff;">Коммерческое предложение</a>
                </div>
            </div>
            <div>
                <?php
                $formType = 'order';
                $pageName = 'Аренда контейнера 8 м3';
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
