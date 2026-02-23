<?php
require_once '../includes/config.php';

$pageTitle = 'Реквизиты ООО «БлагоСервис» | Киров';
$pageDescription = 'Официальные реквизиты ООО «БлагоСервис» для договора, выставления счета и безналичной оплаты услуг.';
$canonicalUrl = get_canonical_url('rekvizity');
$ogImage = SITE_URL . '/assets/blago-truck.png';

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Реквизиты ООО «БлагоСервис»',
    'url' => $canonicalUrl,
    'description' => $pageDescription
];

$organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => COMPANY_NAME,
    'legalName' => 'ООО "БЛАГОСЕРВИС"',
    'url' => SITE_URL . '/',
    'taxID' => '4345538044',
    'identifier' => [
        [
            '@type' => 'PropertyValue',
            'name' => 'КПП',
            'value' => '434501001'
        ],
        [
            '@type' => 'PropertyValue',
            'name' => 'ОГРН',
            'value' => '1254300004177'
        ]
    ],
    'email' => CONTACT_EMAIL,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'ул. Садаковская, д. 2, кв. 24',
        'addressLocality' => COMPANY_CITY,
        'addressRegion' => 'Кировская область',
        'postalCode' => COMPANY_POSTAL_CODE,
        'addressCountry' => COMPANY_COUNTRY
    ]
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
            'item' => get_canonical_url('dokumenty')
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => 'Реквизиты',
            'item' => $canonicalUrl
        ]
    ]
];

include '../includes/header.php';
?>

<script type="application/ld+json">
<?php echo json_encode($organizationSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<main style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <nav aria-label="Хлебные крошки" style="font-size:14px; color:#6c757d; margin-bottom:18px;">
        <a href="<?php echo SITE_URL; ?>/" style="color:#007bff; text-decoration:none;">Главная</a>
        <span style="margin:0 6px;">/</span>
        <a href="<?php echo SITE_URL; ?>/dokumenty/" style="color:#007bff; text-decoration:none;">Документы</a>
        <span style="margin:0 6px;">/</span>
        <span>Реквизиты</span>
    </nav>

    <h1 style="font-size: 36px; color: #2c3e50; margin-bottom: 20px; text-align: center;">
        Реквизиты ООО «БлагоСервис»
    </h1>

    <p style="font-size: 18px; color: #555; text-align: center; margin-bottom: 40px;">
        Данные для договора, выставления счета и безналичной оплаты.
    </p>

    <section style="margin-bottom: 50px; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; min-width: 760px;">
            <tbody>
                <tr>
                    <th style="width: 35%; padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Юридическое лицо</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">ООО "БЛАГОСЕРВИС"</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Юридический адрес</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">610050, Россия, Кировская область, г.о. город Киров, г. Киров, ул. Садаковская, д. 2, кв. 24</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">ИНН</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">4345538044</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">КПП</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">434501001</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">ОГРН</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">1254300004177</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Банк</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">АО «ТБанк»</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Юридический адрес банка</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">127287, г. Москва, ул. Хуторская 2-я, д. 38А, стр. 26</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">ИНН банка</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">7710140679</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">БИК банка</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">044525974</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Корреспондентский счет</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">30101810145250000974</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Расчетный счет</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">40702810710001925234</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Директор</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;">Перетягин Алексей Леонидович</td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Email</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="mailto:<?php echo CONTACT_EMAIL; ?>" style="color:#007bff; text-decoration:none;"><?php echo CONTACT_EMAIL; ?></a></td>
                </tr>
                <tr>
                    <th style="padding: 14px; text-align: left; border: 1px solid #dfe6ee; background:#f8f9fa;">Сайт</th>
                    <td style="padding: 14px; border: 1px solid #dfe6ee;"><a href="<?php echo SITE_URL; ?>/" style="color:#007bff; text-decoration:none;"><?php echo SITE_URL; ?>/</a></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section style="margin-bottom:50px; background:#f8f9fa; border-radius:10px; padding:30px;">
        <h2 style="font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Связанные разделы</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Документы</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/policy.php" style="display:inline-block; padding:10px 18px; border-radius:6px; background:#007bff; color:#fff; text-decoration:none;">Политика конфиденциальности</a>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
