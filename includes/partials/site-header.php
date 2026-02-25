<?php
$currentRequestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentRequestPath = rawurldecode($currentRequestPath ?: '/');
$currentRequestPath = trim($currentRequestPath, '/');

$isMenuItemActive = static function ($currentPath, $matchPaths) {
    foreach ($matchPaths as $matchPath) {
        $normalizedMatchPath = trim((string) $matchPath, '/');
        if ($normalizedMatchPath === '') {
            continue;
        }
        if ($currentPath === $normalizedMatchPath || strpos($currentPath, $normalizedMatchPath . '/') === 0) {
            return true;
        }
    }
    return false;
};

$sectionNavItems = [
    [
        'href' => SITE_URL . '/uslugi/',
        'label' => 'Услуги',
        'match' => [
            'uslugi',
            'vyvoz-musora',
            'arenda-kontejnerov',
            'demontazh-postroek',
            'raschistka-uchastka',
        ]
    ],
    [
        'href' => SITE_URL . '/ceny/',
        'label' => 'Цены',
        'match' => ['ceny']
    ],
    [
        'href' => SITE_URL . '/dlya-biznesa/',
        'label' => 'Для бизнеса',
        'match' => [
            'dlya-biznesa',
            'vyvoz-musora-dlya-uk-i-tszh',
            'vyvoz-musora-dlya-zastroyshchikov',
            'vyvoz-musora-dlya-podryadchikov',
            'vyvoz-musora-dlya-predpriyatiy'
        ]
    ],
    [
        'href' => SITE_URL . '/dokumenty/',
        'label' => 'Документы',
        'match' => ['dokumenty', 'rekvizity', 'policy']
    ],
    [
        'href' => SITE_URL . '/vyvoz-stroitelnogo-musora-v-kirove/',
        'label' => 'Вывоз строймусора',
        'match' => ['vyvoz-stroitelnogo-musora-v-kirove']
    ],
    [
        'href' => SITE_URL . '/arenda-kontejnera-8m3-v-kirove/',
        'label' => 'Контейнер 8 м3',
        'match' => ['arenda-kontejnera-8m3-v-kirove']
    ],
    [
        'href' => SITE_URL . '/demontazh-i-vyvoz-musora/',
        'label' => 'Демонтаж + вывоз',
        'match' => ['demontazh-i-vyvoz-musora']
    ]
];
?>
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
                <a href="<?php echo COMMERCIAL_PROPOSAL_PDF_URL; ?>"
                   target="_blank"
                   title="Скачать коммерческое предложение"
                   class="header-btn-kp header-btn-kp-desktop">
                    Коммерческое предложение
                </a>
            </div>
        </div>
    </nav>
    <div class="section-nav">
        <div class="section-nav-inner">
            <?php foreach ($sectionNavItems as $item): ?>
                <?php $isActive = $isMenuItemActive($currentRequestPath, $item['match']); ?>
                <a href="<?php echo htmlspecialchars($item['href']); ?>"<?php echo $isActive ? ' class="is-active" aria-current="page"' : ''; ?>>
                    <?php echo htmlspecialchars($item['label']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</header>
