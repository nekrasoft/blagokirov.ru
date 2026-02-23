<?php
require_once 'includes/config.php';

http_response_code(404);
header('X-Robots-Tag: noindex, nofollow', true);

$pageTitle = '404 - Страница не найдена | БлагоСервис';
$pageDescription = 'Запрошенная страница не найдена. Перейдите в основные разделы БлагоСервис.';
$pageRobots = 'noindex, nofollow';
$canonicalUrl = SITE_URL . '/404.php';
$ogImage = TRUCK_IMAGE;

include 'includes/header.php';
?>

<main style="max-width: 1100px; margin: 0 auto; padding: 40px 20px 60px;">
    <section style="background:#f8f9fa; border:1px solid #e7edf3; border-radius:12px; padding:40px 24px; text-align:center;">
        <p style="margin:0 0 10px; font-size:14px; color:#6c757d; font-weight:600; letter-spacing:0.08em;">ERROR 404</p>
        <h1 style="margin:0 0 16px; font-size:40px; line-height:1.2; color:#2c3e50;">Страница не найдена</h1>
        <p style="margin:0 auto 28px; max-width:760px; font-size:18px; color:#495057; line-height:1.7;">
            Возможно, ссылка устарела или страница была перемещена. Откройте нужный раздел ниже
            или позвоните нам, если нужна помощь с подбором услуги.
        </p>

        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap; margin-bottom:24px;">
            <a href="<?php echo SITE_URL; ?>/" style="display:inline-block; padding:12px 20px; border-radius:8px; background:#007bff; color:#fff; text-decoration:none; font-weight:600;">На главную</a>
            <a href="<?php echo SITE_URL; ?>/uslugi/" style="display:inline-block; padding:12px 20px; border-radius:8px; background:#2c3e50; color:#fff; text-decoration:none; font-weight:600;">Все услуги</a>
            <a href="<?php echo SITE_URL; ?>/ceny/" style="display:inline-block; padding:12px 20px; border-radius:8px; background:#2c3e50; color:#fff; text-decoration:none; font-weight:600;">Цены</a>
            <a href="<?php echo SITE_URL; ?>/dokumenty/" style="display:inline-block; padding:12px 20px; border-radius:8px; background:#2c3e50; color:#fff; text-decoration:none; font-weight:600;">Документы</a>
        </div>

        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
            <a href="<?php echo format_phone_link(PHONE_1); ?>" style="display:inline-block; padding:12px 20px; border-radius:8px; border:1px solid #ced4da; background:#fff; color:#2c3e50; text-decoration:none; font-weight:600;"><?php echo PHONE_1; ?></a>
            <a href="<?php echo format_phone_link(PHONE_3); ?>" style="display:inline-block; padding:12px 20px; border-radius:8px; border:1px solid #ced4da; background:#fff; color:#2c3e50; text-decoration:none; font-weight:600;"><?php echo PHONE_3; ?></a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
