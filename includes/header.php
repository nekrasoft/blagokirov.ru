<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Получаем значения из переменных, установленных на странице
    $pageTitle = isset($pageTitle) ? $pageTitle : 'БлагоСервис: Вывоз мусора и утилизация отходов в Кирове';
    $pageDescription = isset($pageDescription) ? $pageDescription : 'БлагоСервис – профессиональный вывоз мусора, аренда контейнеров, демонтаж построек в Кирове. Честность, надёжность, оперативность.';
    $pageKeywords = isset($pageKeywords) ? $pageKeywords : 'вывоз мусора, утилизация отходов, аренда контейнеров, демонтаж построек, Киров';
    $canonicalUrl = isset($canonicalUrl) ? $canonicalUrl : get_canonical_url();
    $ogImage = isset($ogImage) ? $ogImage : TRUCK_IMAGE;
    ?>

    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?php echo SITE_URL; ?>/favicon.svg">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_URL; ?>/apple-touch-icon.png">

    <!-- Open Graph -->
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo COMPANY_NAME; ?>",
        "image": "<?php echo TRUCK_IMAGE; ?>",
        "@id": "<?php echo SITE_URL; ?>/",
        "url": "<?php echo SITE_URL; ?>/",
        "telephone": "<?php echo PHONE_1; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo COMPANY_ADDRESS; ?>",
            "addressLocality": "<?php echo COMPANY_CITY; ?>",
            "postalCode": "<?php echo COMPANY_POSTAL_CODE; ?>",
            "addressCountry": "<?php echo COMPANY_COUNTRY; ?>"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
            "opens": "07:00",
            "closes": "21:00"
        }
        <?php if (defined('VK_URL')): ?>
        ,"sameAs": [
            "<?php echo VK_URL; ?>",
            "<?php echo FACEBOOK_URL; ?>"
        ]
        <?php endif; ?>
    }
    </script>

    <?php if (isset($serviceSchema)): ?>
    <!-- Service Schema for this page -->
    <script type="application/ld+json">
    <?php echo json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
    <?php endif; ?>

    <!-- CSS стили -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/frontend.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/frontend.min_002.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/styles.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/post-149.css">

    <!-- Google Fonts - Montserrat -->
    <link rel="stylesheet" id="elementor-gf-local-montserrat-css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" type="text/css" media="all">

    <style>
        /* Применение шрифта Montserrat ко всему документу */
        body {
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        /* Применение к основным текстовым элементам */
        h1, h2, h3, h4, h5, h6, p, a, span, div, li, td, th, label, input, textarea, button, select {
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        /* Дополнительные стили для PHP-версии */
        .header-container {
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo img {
            height: 80px;
        }
        .contact-phones {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .contact-phones a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
        }
        .contact-phones a:hover {
            color: #007bff;
        }
        .header-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .header-btn-kp {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
        }
        .header-btn-kp:hover {
            background: #0056b3;
            color: #fff !important;
        }
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 15px;
            }
            .contact-phones {
                justify-content: center;
            }
            .header-buttons {
                flex-direction: column;
                width: 100%;
            }
            .header-btn-kp {
                width: 100%;
                text-align: center;
            }
        }
        /* Скрыть кнопку КП на мобильных в шапке, но показать отдельную версию ниже */
        @media (max-width: 1024px) {
            .header-btn-kp-desktop {
                display: none;
            }
        }
        @media (min-width: 1025px) {
            .header-btn-kp-mobile {
                display: none;
            }
        }
    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KCJQ2RK9');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCJQ2RK9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header-container">
        <nav class="nav-menu">
            <div class="logo">
                <a href="<?php echo SITE_URL; ?>/" title="<?php echo COMPANY_NAME; ?>">
                    <img src="<?php echo LOGO_URL; ?>" alt="<?php echo COMPANY_NAME; ?>">
                </a>
            </div>
            <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                <div class="contact-phones">
                    <a href="<?php echo format_phone_link(PHONE_1); ?>"><?php echo PHONE_1; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_2); ?>"><?php echo PHONE_2; ?></a>
                    <a href="<?php echo format_phone_link(PHONE_3); ?>"><?php echo PHONE_3; ?></a>
                </div>
                <div class="header-buttons">
                    <a href="<?php echo SITE_URL; ?>/<?php echo COMMERCIAL_PROPOSAL_PDF; ?>"
                       target="_blank"
                       title="Скачать коммерческое предложение"
                       class="header-btn-kp header-btn-kp-desktop">
                        Коммерческое предложение
                    </a>
                </div>
            </div>
        </nav>
    </header>

