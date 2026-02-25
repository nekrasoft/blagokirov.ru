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
            <a href="<?php echo SITE_URL; ?>/uslugi/">Услуги</a>
            <a href="<?php echo SITE_URL; ?>/ceny/">Цены</a>
            <a href="<?php echo SITE_URL; ?>/dlya-biznesa/">Для бизнеса</a>
            <a href="<?php echo SITE_URL; ?>/dokumenty/">Документы</a>
            <a href="<?php echo SITE_URL; ?>/vyvoz-stroitelnogo-musora-v-kirove/">Вывоз строймусора</a>
            <a href="<?php echo SITE_URL; ?>/arenda-kontejnera-8m3-v-kirove/">Контейнер 8 м3</a>
            <a href="<?php echo SITE_URL; ?>/demontazh-i-vyvoz-musora/">Демонтаж + вывоз</a>
        </div>
    </div>
</header>
