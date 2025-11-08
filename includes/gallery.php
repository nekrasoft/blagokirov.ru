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

    /* Fade transition for image changes */
    .fade-image {
        opacity: 0;
        transition: opacity 260ms ease-in-out;
        will-change: opacity;
    }

    .fade-image.visible {
        opacity: 1;
    }

    .gallery-lightbox-counter {
        background: rgba(0,0,0,0.25);
        padding: 6px 10px;
        border-radius: 6px;
        color: #fff;
    }

    /* расширенная зона для тач-свайпа (мобильные) */
    .gallery-lightbox-touch-zone {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 55%;
        left: 22.5%;
        z-index: 10000;
    }

    .gallery-lightbox-close {
        position: absolute;
        top: -40px;
        right: -40px;
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

    /* Навигационные стрелки в lightbox */
    .gallery-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(255,255,255,0.12);
        color: #fff;
        border: none;
        font-size: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        z-index: 10001;
        padding: .3em 1em .4em;
    }

    .gallery-lightbox-nav:hover { background: rgba(255,255,255,0.18); }

    .gallery-lightbox-nav.prev { left: -70px; }
    .gallery-lightbox-nav.next { right: -70px; }

    @media (max-width: 768px) {
        .gallery-lightbox-nav { display: none; }
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
        <div id="lightboxTopRow" style="position:absolute; left:50%; top:-48px; transform:translateX(-50%); display:flex; gap:12px; align-items:center; z-index:10002;">
            <div id="lightboxCounter" class="gallery-lightbox-counter" aria-hidden="false" style="color:#fff; font-size:16px; font-weight:600;">
                0 / 0
            </div>
        </div>
        <button class="gallery-lightbox-nav prev" id="lightboxPrev" aria-label="Previous image">&#8249;</button>
        <button class="gallery-lightbox-nav next" id="lightboxNext" aria-label="Next image">&#8250;</button>
        <div class="gallery-lightbox-touch-zone" id="lightboxTouchZone" aria-hidden="true"></div>
        <div id="lightboxVideoContainer" style="display:none;">
            <iframe id="lightboxVideo" src="" allow="autoplay; fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0" style="width:100%; height:80vh; border-radius:8px;"></iframe>
        </div>
        <img id="lightboxImage" src="" alt="" class="fade-image">
    </div>
</div>

<script>
    // gallery data from PHP
    const galleryData = <?php echo json_encode(array_values($galleryItems), JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?>;
    // Инициализация lightbox для изображений
    document.addEventListener('DOMContentLoaded', function() {
        const galleryImages = document.querySelectorAll('.gallery-item-image');
        const lightbox = document.getElementById('galleryLightbox');
        const lightboxImage = document.getElementById('lightboxImage');
    const btnPrev = document.getElementById('lightboxPrev');
    const btnNext = document.getElementById('lightboxNext');
        const videoContainer = document.getElementById('lightboxVideoContainer');
        const videoIframe = document.getElementById('lightboxVideo');
    const counter = document.getElementById('lightboxCounter');
    const touchZone = document.getElementById('lightboxTouchZone');

        // Use PHP-provided galleryData for mixed items (image/video)
        const items = galleryData.map(function(it, idx){
            return {
                type: it.type || 'image',
                url: it.url || '',
                alt: it.alt || '',
                title: it.title || ''
            };
        });

        let currentIndex = -1;
        // Scroll lock state to preserve page position when lightbox is open
        let _savedScrollY = 0;
        let _bodyLocked = false;

        function isFirefox() {
            try {
                return navigator && /Firefox\//i.test(navigator.userAgent);
            } catch (e) {
                return false;
            }
        }

        function lockBodyScroll() {
            if (_bodyLocked) return;
            _savedScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;

            if (isFirefox()) {
                // Firefox: avoid position:fixed on body which can cause issues.
                // Lock by setting overflow hidden and negative margin on root element.
                document.documentElement.style.overflow = 'hidden';
                // compensate position by shifting root margin
                document.documentElement.style.marginTop = `-${_savedScrollY}px`;
                // also set body overflow as a fallback
                document.body.style.overflow = 'hidden';
            } else {
                // Other browsers: use body fixed technique
                document.body.style.position = 'fixed';
                document.body.style.top = `-${_savedScrollY}px`;
                document.body.style.left = '0';
                document.body.style.right = '0';
                document.body.style.width = '100%';
                // also hide overflow on root to be safe
                document.documentElement.style.overflow = 'hidden';
            }

            _bodyLocked = true;
        }

        function unlockBodyScroll() {
            if (!_bodyLocked) return;

            // Always clear both root and body styles to be defensive
            try {
                document.documentElement.style.overflow = '';
                document.documentElement.style.marginTop = '';
            } catch (e) {}
            try {
                document.body.style.position = '';
                document.body.style.top = '';
                document.body.style.left = '';
                document.body.style.right = '';
                document.body.style.width = '';
                document.body.style.overflow = '';
            } catch (e) {}

            _bodyLocked = false;

            // Restore scroll immediately and also after a short delay to handle browser quirks
            try { window.scrollTo(0, _savedScrollY || 0); } catch(e) {}
            setTimeout(function() {
                try { window.scrollTo(0, _savedScrollY || 0); } catch(e) {}
            }, 60);
        }

        // Thumbnails (images) open corresponding index
        galleryImages.forEach(function(img) {
            img.addEventListener('click', function() {
                const idx = parseInt(this.dataset.lightboxIndex, 10);
                showImageByIndex(idx);
            });
        });

        function showImageByIndex(idx) {
            if (!items.length) return;
            // wrap around
            if (idx < 0) idx = items.length - 1;
            if (idx >= items.length) idx = 0;
            currentIndex = idx;
            // ensure lightbox visible
                lightbox.classList.add('active');
                lockBodyScroll();

            // update counter
            if (counter) {
                counter.textContent = (currentIndex + 1) + ' / ' + items.length;
            }

            const item = items[currentIndex];
            if (!item) return;

            if (item.type === 'video') {
                // hide image, stop previous image transition
                lightboxImage.classList.remove('visible');
                lightboxImage.src = '';
                // show video container and set src (try to enable autoplay)
                let videoSrc = item.url;
                // if it's a standard rutube video id or url, ensure embed format
                if (videoSrc.indexOf('rutube.ru') !== -1 && videoSrc.indexOf('embed') === -1) {
                    // try to convert video URL to embed if possible
                    // examples: https://rutube.ru/video/{id}/ -> https://rutube.ru/play/embed/{id}
                    const m = videoSrc.match(/rutube\.ru\/(?:video|play\/embed)\/?([a-zA-Z0-9_-]+)/);
                    if (m && m[1]) {
                        videoSrc = 'https://rutube.ru/play/embed/' + m[1] + '?autoplay=1';
                    }
                } else if (videoSrc.indexOf('embed') !== -1 && videoSrc.indexOf('autoplay') === -1) {
                    videoSrc += (videoSrc.indexOf('?') === -1 ? '?' : '&') + 'autoplay=1';
                }
                videoIframe.src = videoSrc;
                videoContainer.style.display = 'block';
                videoIframe.style.display = 'block';
                // hide image element
                lightboxImage.style.display = 'none';
            } else {
                // image
                // stop video playback if any
                videoIframe.src = '';
                videoContainer.style.display = 'none';
                videoIframe.style.display = 'none';
                // show image element
                lightboxImage.style.display = 'block';
                // fade-in flow
                lightboxImage.classList.remove('visible');
                lightboxImage.onload = function() {
                    requestAnimationFrame(function() {
                        lightboxImage.classList.add('visible');
                    });
                };
                // determine alt from thumbnail if exists
                const thumb = document.querySelector('.gallery-item-image[data-lightbox-index="' + currentIndex + '"]');
                lightboxImage.alt = thumb ? thumb.alt : (item.alt || '');
                lightboxImage.src = item.url;
            }
        }

        function showNextImage() {
            showImageByIndex(currentIndex + 1);
        }

        function showPrevImage() {
            showImageByIndex(currentIndex - 1);
        }

        // Bind nav buttons
        if (btnNext) btnNext.addEventListener('click', function(e){ e.stopPropagation(); showNextImage(); });
        if (btnPrev) btnPrev.addEventListener('click', function(e){ e.stopPropagation(); showPrevImage(); });

        // Touch-swipe support for mobile
        if (touchZone) {
            let touchStartX = 0;
            let touchStartY = 0;
            let touchMoved = false;

            touchZone.addEventListener('touchstart', function(e) {
                if (!e.touches || e.touches.length === 0) return;
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
                touchMoved = false;
            }, {passive: true});

            touchZone.addEventListener('touchmove', function(e) {
                touchMoved = true;
            }, {passive: true});

            touchZone.addEventListener('touchend', function(e) {
                const touch = e.changedTouches && e.changedTouches[0];
                if (!touch) return;
                const dx = touch.clientX - touchStartX;
                const dy = touch.clientY - touchStartY;
                // horizontal swipe threshold for swipe
                if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy)) {
                    if (dx < 0) {
                        showNextImage();
                    } else {
                        showPrevImage();
                    }
                    return;
                }
                // if it's a tap (no significant move), go to next image
                if (!touchMoved || (Math.abs(dx) < 10 && Math.abs(dy) < 10)) {
                    showNextImage();
                }
            }, {passive: true});
        }

        // click/tap on the displayed image should move to next (and not close the lightbox)
        /*lightboxImage.addEventListener('click', function(e) {
            e.stopPropagation();
            // only advance on image click (not when a video is shown)
            if (items[currentIndex] && items[currentIndex].type === 'image') {
                showNextImage();
            }
        });
        */

        // Закрытие по клику на фон
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                closeGalleryLightbox();
            }
        });

        // Клавиатурная навигация: Esc для закрытия, стрелки для навигации
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') {
                closeGalleryLightbox();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'ArrowLeft') {
                showPrevImage();
            }
        });

        // Expose scroll lock/unlock to global scope so closeGalleryLightbox can call unlockBodyScroll
        try {
            window.lockBodyScroll = lockBodyScroll;
            window.unlockBodyScroll = unlockBodyScroll;
        } catch (e) {
            // ignore
        }
    });

    function closeGalleryLightbox() {
        const lightbox = document.getElementById('galleryLightbox');
        lightbox.classList.remove('active');
        // stop video playback and clear iframe
        const videoIframe = document.getElementById('lightboxVideo');
        if (videoIframe) {
            try { videoIframe.src = ''; } catch (e) {}
        }
        const img = document.getElementById('lightboxImage');
        if (img) { img.src = ''; img.classList.remove('visible'); }

        // unlock body scroll
        unlockBodyScroll();

        // On some mobile browsers repaint is needed to re-enable scrolling
        setTimeout(function(){
            document.body.offsetHeight; // force reflow
        }, 60);
    }
</script>

