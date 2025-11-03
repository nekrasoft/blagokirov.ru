    <footer style="background: #2c3e50; color: #ecf0f1; padding: 40px 20px; margin-top: 60px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 30px;">

                <!-- Контакты -->
                <div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 18px;">Контакты</h3>
                    <p style="margin: 5px 0;">
                        <a href="<?php echo format_phone_link(PHONE_1); ?>" style="color: #ecf0f1; text-decoration: none;">
                            <?php echo PHONE_1; ?>
                        </a>
                    </p>
                    <p style="margin: 5px 0;">
                        <a href="<?php echo format_phone_link(PHONE_2); ?>" style="color: #ecf0f1; text-decoration: none;">
                            <?php echo PHONE_2; ?>
                        </a>
                    </p>
                    <p style="margin: 5px 0;">
                        <a href="<?php echo format_phone_link(PHONE_3); ?>" style="color: #ecf0f1; text-decoration: none;">
                            <?php echo PHONE_3; ?>
                        </a>
                    </p>
                    <p style="margin-top: 15px; color: #bdc3c7;">
                        <?php echo COMPANY_ADDRESS; ?><br>
                        <?php echo COMPANY_CITY; ?>, <?php echo COMPANY_POSTAL_CODE; ?><br>
                        Время работы: <?php echo WORKING_HOURS; ?>
                    </p>
                </div>

                <!-- Наши услуги -->
                <div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 18px;">Наши услуги</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin: 8px 0;">
                            <a href="<?php echo SITE_URL; ?>/vyvoz-musora/" style="color: #ecf0f1; text-decoration: none;">Вывоз мусора в Кирове</a>
                        </li>
                        <li style="margin: 8px 0;">
                            <a href="<?php echo SITE_URL; ?>/demontazh-postroek/" style="color: #ecf0f1; text-decoration: none;">Демонтаж построек в Кирове</a>
                        </li>
                        <li style="margin: 8px 0;">
                            <a href="<?php echo SITE_URL; ?>/arenda-kontejnerov/" style="color: #ecf0f1; text-decoration: none;">Аренда контейнеров в Кирове</a>
                        </li>
                        <li style="margin: 8px 0;">
                            <a href="<?php echo SITE_URL; ?>/raschistka-uchastka/" style="color: #ecf0f1; text-decoration: none;">Расчистка участка</a>
                        </li>
                    </ul>
                    <div style="margin-top: 20px;">
                        <a href="<?php echo VK_URL; ?>" target="_blank" style="color: #ecf0f1; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.785 16.241s.336-.041.508-.25c.101-.178.098-.512.098-.512s-.014-1.546.674-1.773c.686-.224 1.571 1.492 2.507 2.149.695.487 1.221.381 1.221.381l2.5-.036s1.31-.084.688-1.117c-.051-.083-.363-.75-1.851-2.48-1.565-1.825-1.352-.508.529-3.106.362-.498.635-1.047.416-1.217-.217-.167-.512-.123-.512-.123l-2.909.018s-.214-.028-.373.074c-.155.1-.255.331-.255.331s-.458 1.223-1.064 2.265c-1.283 2.102-1.798 2.213-2.006 2.084-.489-.307-.367-1.23-.367-1.887 0-2.048.303-2.906-.594-3.126-.298-.073-.516-.121-1.278-.129-.977-.01-1.804.003-2.272.207-.316.139-.559.448-.411.467.182.023.594.11.811.404.281.378.27 1.226.27 1.226s.162 2.387-.376 2.683c-.369.202-.876-.21-1.968-2.078-.558-1.005-.98-2.115-.98-2.115s-.082-.207-.228-.32c-.177-.136-.427-.179-.427-.179l-2.77.018s-.416.013-.569.193c-.136.162-.01.494-.01.494s1.788 4.176 3.808 6.287c1.855 1.924 3.966 1.797 3.966 1.797h.953z"/>
                            </svg>
                            Мы в VK
                        </a>
                    </div>
                </div>

                <!-- Информация -->
                <div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 18px;">О компании</h3>
                    <p style="color: #bdc3c7; line-height: 1.6;">
                        <?php echo COMPANY_NAME; ?> предоставляет профессиональные услуги по вывозу мусора,
                        утилизации отходов, демонтажу построек и аренде контейнеров в Кирове.
                    </p>
                </div>

            </div>

            <div style="border-top: 1px solid #34495e; padding-top: 20px; text-align: center; color: #95a5a6;">
                <p style="margin: 0;">
                    © <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. Все права защищены. Киров.
                </p>
                <p style="margin: 10px 0 0 0;">
                    <a href="<?php echo SITE_URL; ?>/policy.htm" style="color: #95a5a6; text-decoration: none;">Политика конфиденциальности</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo SITE_URL; ?>/assets/jquery.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/jquery-migrate.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/scripts.min.js"></script>

    <!-- Блок hcard для структурированных данных -->
    <div id="hcard" class="hcard" style="display: none">

      <div class="fn n">
        <div class="org"><a href="<?php echo SITE_URL; ?>/" title="Благосервис: Вывоз мусора и утилизация отходов">Вывоз мусора в Кирове</a></div>
      </div>

      <div class="tagline">Благосервис: Вывоз мусора и аренда контейнеров, демонтаж построек</div>

      <div class="adr">
        <span class="postal-code"><?php echo COMPANY_POSTAL_CODE; ?></span>,
        <span class="country-name">Россия</span>,
        <span class="region">Кировская область</span>,
        <span class="locality">город <?php echo COMPANY_CITY; ?></span>,
        <span class="street-address"><?php echo COMPANY_ADDRESS; ?></span>
        <br />
        <span>время работы: <span class="workhours"><?php echo WORKING_HOURS; ?></span></span>
        <span class="tel"><i class="value"><?php echo PHONE_1; ?></i></span>
        <span class="tel"><i class="value"><?php echo PHONE_2; ?></i></span>
        <span class="tel"><i class="value"><?php echo PHONE_3; ?></i></span>
      </div>

      <div>
        <span class="category">Вывоз мусора</span>,
        <span class="category">Утилизация отходов</span>,
        <span class="category">Контейнеры</span>
      </div>
      <div class="phone">
        <span class="tel"><i class="value"><?php echo PHONE_1; ?></i></span>
        <span class="tel"><i class="value"><?php echo PHONE_2; ?></i></span>
        <span class="tel"><i class="value"><?php echo PHONE_3; ?></i></span>
      </div>
      <a class="url" href="<?php echo SITE_URL; ?>" title="Благосервис: Вывоз мусора и аренда контейнеров, демонтаж построек"><?php echo SITE_URL; ?></a>

      <div class="tags"><a href="<?php echo SITE_URL; ?>" title="Благосервис: Вывоз мусора и аренда контейнеров">Благосервис: Вывоз мусора и аренда контейнеров</a></div>

    </div>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                (function(m, e, t, r, i, k, a) {
                    m[i] = m[i] || function() {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                    m[i].l = 1 * new Date();
                    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                })
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(103011812, "init", {
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    trackHash: true
                });
            }, 5000);
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/103011812" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

</body>
</html>

