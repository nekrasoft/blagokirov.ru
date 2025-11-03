<?php
/**
 * Компонент галереи для страниц услуг
 * Поддерживает изображения и видео Rutube
 *
 * Использование:
 * $galleryItems = [
 *     ['type' => 'image', 'url' => '/assets/image1.jpg', 'alt' => 'Описание'],
 *     ['type' => 'video', 'url' => 'https://rutube.ru/video/123456/', 'title' => 'Название видео'],
 * ];
 * include '../includes/gallery.php';
 */

// Функция для извлечения ID видео из URL Rutube
function extract_rutube_id($url) {
    // Поддерживаемые форматы:
    // https://rutube.ru/video/{id}/
    // https://rutube.ru/play/embed/{id}
    // http://rutube.ru/video/{id}/

    if (preg_match('/rutube\.ru\/video\/([a-zA-Z0-9]+)/', $url, $matches)) {
        return $matches[1];
    }
    if (preg_match('/rutube\.ru\/play\/embed\/([a-zA-Z0-9]+)/', $url, $matches)) {
        return $matches[1];
    }
    return null;
}

// Проверяем наличие переменной с элементами галереи
if (!isset($galleryItems) || empty($galleryItems)) {
    // Если галерея не настроена, не выводим ничего
    return;
}
?>

<style>
    .service-gallery {
        margin: 50px 0;
        padding: 40px 20px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .service-gallery h2 {
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 30px;
        text-align: center;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
    }

    .gallery-item {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .gallery-item-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
        cursor: pointer;
    }

    .gallery-item-video {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        background: #000;
    }

    .gallery-item-video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .gallery-item-caption {
        padding: 15px;
        background: #fff;
        color: #333;
        font-size: 14px;
        line-height: 1.5;
    }

    .gallery-item-caption strong {
        display: block;
        margin-bottom: 5px;
        color: #2c3e50;
        font-weight: 600;
    }

    .gallery-item-video .video-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        z-index: 1;
    }

    /* Lightbox для изображений */
    .gallery-lightbox {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .gallery-lightbox.active {
        display: flex;
    }

    .gallery-lightbox-content {
        max-width: 90%;
        max-height: 90%;
        position: relative;
    }

    .gallery-lightbox-content img {
        max-width: 100%;
        max-height: 90vh;
        border-radius: 8px;
    }

    .gallery-lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        line-height: 1;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transition: background 0.3s;
    }

    .gallery-lightbox-close:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 768px) {
        .gallery-lightbox-content {
            max-width: 95%;
        }

        .gallery-lightbox-close {
            top: -50px;
            font-size: 30px;
            width: 35px;
            height: 35px;
        }
    }
</style>

<section class="service-gallery">
    <h2>Галерея выполненных работ</h2>
    <p style="text-align: center; color: #666; margin-bottom: 20px;">
        Посмотрите примеры наших работ и результаты выполнения заказов
    </p>

    <div class="gallery-grid">
        <?php foreach ($galleryItems as $index => $item): ?>
            <?php if ($item['type'] === 'image'): ?>
                <div class="gallery-item">
                    <img src="<?php echo htmlspecialchars($item['url']); ?>"
                         alt="<?php echo htmlspecialchars($item['alt'] ?? 'Изображение галереи'); ?>"
                         class="gallery-item-image"
                         data-lightbox-index="<?php echo $index; ?>"
                         loading="lazy">
                    <?php if (isset($item['caption']) && !empty($item['caption'])): ?>
                        <div class="gallery-item-caption">
                            <?php if (isset($item['title'])): ?>
                                <strong><?php echo htmlspecialchars($item['title']); ?></strong>
                            <?php endif; ?>
                            <?php echo htmlspecialchars($item['caption']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ($item['type'] === 'video'): ?>
                <?php
                $videoId = extract_rutube_id($item['url']);
                if ($videoId):
                ?>
                    <div class="gallery-item">
                        <div class="gallery-item-video">
                            <iframe src="https://rutube.ru/play/embed/<?php echo htmlspecialchars($videoId); ?>"
                                    allow="clipboard-write; autoplay"
                                    webkitAllowFullScreen
                                    mozallowfullscreen
                                    allowFullScreen></iframe>
                        </div>
                        <?php if (isset($item['title']) || isset($item['caption'])): ?>
                            <div class="gallery-item-caption">
                                <?php if (isset($item['title'])): ?>
                                    <strong><?php echo htmlspecialchars($item['title']); ?></strong>
                                <?php endif; ?>
                                <?php if (isset($item['caption'])): ?>
                                    <?php echo htmlspecialchars($item['caption']); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Lightbox для просмотра изображений в полном размере -->
<div class="gallery-lightbox" id="galleryLightbox">
    <div class="gallery-lightbox-content">
        <span class="gallery-lightbox-close" onclick="closeGalleryLightbox()">&times;</span>
        <img id="lightboxImage" src="" alt="">
    </div>
</div>

<script>
    // Инициализация lightbox для изображений
    document.addEventListener('DOMContentLoaded', function() {
        const galleryImages = document.querySelectorAll('.gallery-item-image');
        const lightbox = document.getElementById('galleryLightbox');
        const lightboxImage = document.getElementById('lightboxImage');

        galleryImages.forEach(function(img) {
            img.addEventListener('click', function() {
                lightboxImage.src = this.src;
                lightboxImage.alt = this.alt;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Закрытие по клику на фон
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                closeGalleryLightbox();
            }
        });

        // Закрытие по ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeGalleryLightbox();
            }
        });
    });

    function closeGalleryLightbox() {
        const lightbox = document.getElementById('galleryLightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
</script>

