<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <?php if (function_exists('yoast_breadcrumb')): ?>
        <?php yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
        <?php endif; ?>
    </div>

    <section class="regular-page">
        <div class="container">
            <div class="regular-page__wrap">
                <h1 class="regular-page__title" id="page-title-mobile"><?php echo e(the_title()); ?></h1>

                <?php
                    $images = get_field('event-gallery'); // Получаем изображения из поля ACF 'event-gallery'
                    $video_url = get_field('video_url'); // Получаем URL видео
                    $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
                ?>

                <?php if($images): ?>
                    <!-- Мобильная галерея -->
                    <div id="slider4" class="slider-container">
                        <div class="slider" id="gallery-mob">
                            
                            <?php if($video_url && $video_thumbnail): ?>
                                <div class="slide" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"<?php echo e($video_url); ?>", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="<?php echo e($video_thumbnail['url']); ?>" class="mobile-gallery">
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="slide">
                                    <a href="<?php echo e($image['url']); ?>" data-src="<?php echo e($image['url']); ?>"
                                        data-sub-html="<?php echo e($image['alt']); ?>">
                                        <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>" class="mobile-gallery">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="pagination" id="pag_mobile" data-slider="slider4"></div>
                    </div>
                <?php endif; ?>

                <div class="regular-page__gallery">
                    <?php
                        $images = get_field('event-gallery'); // Подставь правильное название поля ACF
                        $video_url = get_field('video_url'); // Получаем URL видео
                        $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
                    ?>

                    <?php if($images): ?>
                        <div class="custom-gallery-grid" id="gallery">
                            
                            <?php if($video_url && $video_thumbnail): ?>
                                <div class="custom-gallery-main-image" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"<?php echo e($video_url); ?>", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="<?php echo e($video_thumbnail['url']); ?>" class="custom-large-image">
                                    </a>
                                </div>
                            <?php elseif($images): ?>
                                
                                <div class="custom-gallery-main-image">
                                    <a href="<?php echo e($images[0]['url']); ?>" data-src="<?php echo e($images[0]['url']); ?>"
                                        data-sub-html="<?php echo e($images[0]['alt']); ?>">
                                        <img src="<?php echo e($images[0]['url']); ?>" alt="<?php echo e($images[0]['alt']); ?>"
                                            class="custom-large-image">
                                    </a>
                                </div>
                            <?php endif; ?>

                            
                            <div class="custom-small-images">
                                
                                <?php if($video_url && $images): ?>
                                    <a href="<?php echo e($images[0]['url']); ?>" data-src="<?php echo e($images[0]['url']); ?>"
                                        data-sub-html="<?php echo e($images[0]['alt']); ?>">
                                        <img src="<?php echo e($images[0]['url']); ?>" alt="<?php echo e($images[0]['alt']); ?>"
                                            class="custom-small-image">
                                    </a>
                                <?php endif; ?>

                                
                                <?php if($images): ?>
                                    <?php $__currentLoopData = array_slice($images, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e($image['url']); ?>" data-src="<?php echo e($image['url']); ?>"
                                            data-sub-html="<?php echo e($image['alt']); ?>">
                                            <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>"
                                                class="custom-small-image">
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php
                        $useful_files = get_field('useful_files'); // Получаем все файлы за один запрос
                    ?>

                    <?php if($useful_files): ?>
                        <div class="additionally-files" id="additional-file-full">
                            <div class="additionally-files__title">
                                <span>Полезные файлы</span>
                            </div>
                            <div class="useful-files">
                                <?php $__currentLoopData = $useful_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!empty($file_row['file'])): ?>
                                        <!-- Используем ключ на русском языке -->
                                        <?php
                                            $file_url = $file_row['file']; // Получаем URL файла
                                            $file_id = attachment_url_to_postid($file_url); // Получаем ID файла
                                            $file_size = filesize(get_attached_file($file_id)); // Получаем размер файла в байтах
                                            $file_size_formatted = size_format($file_size); // Форматируем размер в понятный формат
                                            $file_type_info = wp_check_filetype($file_url); // Получаем информацию о файле (тип и расширение)
                                            $file_extension = strtoupper($file_type_info['ext']); // Преобразуем расширение в верхний регистр
                                            $file_name = !empty($file_row['file-name'])
                                                ? $file_row['file-name']
                                                : 'file'; // Название файла
                                        ?>
                                        <div
                                            class="useful-files__item<?php echo e($index === 0 ? ' useful-files__item--first' : ''); ?>">
                                            <div class="useful-files__info">
                                                <div class="useful-files__title">
                                                    <span><?php echo e($file_name); ?></span>
                                                </div>
                                                <div class="useful-files__descr">
                                                    <span><?php echo e($file_extension); ?> <?php echo e($file_size_formatted); ?></span>
                                                </div>
                                            </div>
                                            <div class="useful-files__download">
                                                <img src="<?= App\asset_path('images/download.svg'); ?>">
                                                <a href="<?php echo e(esc_url($file_url)); ?>" class="a"
                                                    target="_blank">Скачать</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <p id="NothingIsHere"></p>
                    <?php endif; ?>
                </div>

                <div class="regular-page__content" id="page/content/mobile">
                    <h1 class="regular-page__title" id="page-title-full"><?php echo e(the_title()); ?></h1>
                    <?php echo the_content(); ?>


                    <?php if($useful_files): ?>
                        <div class="additionally-files" id="additional-file-mobile">
                            <div class="additionally-files__title">
                                <span>Полезные файлы</span>
                            </div>
                            <div class="useful-files">
                                <?php $__currentLoopData = $useful_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!empty($file_row['file'])): ?>
                                        <!-- Используем ключ на русском языке -->
                                        <?php
                                            $file_url = $file_row['file']; // Получаем URL файла
                                            $file_id = attachment_url_to_postid($file_url); // Получаем ID файла
                                            $file_size = filesize(get_attached_file($file_id)); // Получаем размер файла в байтах
                                            $file_size_formatted = size_format($file_size); // Форматируем размер в понятный формат
                                            $file_type_info = wp_check_filetype($file_url); // Получаем информацию о файле (тип и расширение)
                                            $file_extension = strtoupper($file_type_info['ext']); // Преобразуем расширение в верхний регистр
                                            $file_name = !empty($file_row['file-name'])
                                                ? $file_row['file-name']
                                                : 'file'; // Название файла
                                        ?>
                                        <div
                                            class="useful-files__item<?php echo e($index === 0 ? ' useful-files__item--first' : ''); ?>">
                                            <div class="useful-files__info">
                                                <div class="useful-files__title">
                                                    <span><?php echo e($file_name); ?></span>
                                                </div>
                                                <div class="useful-files__descr">
                                                    <span><?php echo e($file_extension); ?> <?php echo e($file_size_formatted); ?></span>
                                                </div>
                                            </div>
                                            <div class="useful-files__download">
                                                <img src="<?= App\asset_path('images/download.svg'); ?>">
                                                <a href="<?php echo e(esc_url($file_url)); ?>" class="a"
                                                    target="_blank">Скачать</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <p id="NothingIsHere"></p>
                    <?php endif; ?>

                    <?php if(!has_category('product')): ?>
                        <!-- Проверка: если рубрика не 'production' -->
                        <div class="regular-page__date">
                            <span><?php echo e(the_date()); ?></span>
                            <a href="/sobytiya">
                                <div class="regular-page__all">
                                    <span>все события</span><img src="<?= App\asset_path('images/arrow.svg'); ?>">
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if($cerfs = get_field('cerfs')): ?>
                        <div class="additionally-files">
                            <div class="additionally-files__title">
                                <span>Сертификаты соответсвия</span>
                            </div>
                            <div class="additionally-files__docs">
                                <div class="additionally-files__gallery" id="cerfs">
                                    <?php $__currentLoopData = $cerfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="additionally-gallery-item">
                                            <a href="<?php echo e(esc_url($image['url'])); ?>"
                                                data-src="<?php echo e(esc_url($image['url'])); ?>"
                                                data-sub-html="<?php echo e(esc_attr($image['alt'])); ?>" target="_blank">
                                                <img src="<?php echo e(esc_url($image['url'])); ?>"
                                                    alt="<?php echo e(esc_attr($image['alt'])); ?>" />
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <p id="nothingishere"></p>
                    <?php endif; ?>


                    <?php if($cerfs = get_field('reviews')): ?>
                        <div class="additionally-files">
                            <div class="additionally-files__title">
                                <span>Отзывы</span>
                            </div>
                            <div class="additionally-files__docs">
                                <div class="additionally-files__gallery" id="reviews">
                                    <?php $__currentLoopData = $cerfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="additionally-gallery-item">
                                            <a href="<?php echo e(esc_url($image['url'])); ?>"
                                                data-src="<?php echo e(esc_url($image['url'])); ?>"
                                                data-sub-html="<?php echo e(esc_attr($image['alt'])); ?>" target="_blank">
                                                <img src="<?php echo e(esc_url($image['url'])); ?>"
                                                    alt="<?php echo e(esc_attr($image['alt'])); ?>" />
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <p id="nothingishere"></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="page__contactus">
        <?php echo $__env->make('components.contactus.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            // Инициализируем lightGallery для галереи с id="gallery"
            lightGallery(document.getElementById('gallery'), {
                selector: 'a', // Все ссылки внутри контейнера
                thumbnail: true, // Включение миниатюр
                plugins: [lgVideo], // Подключение плагина для видео
                videoMaxWidth: '100%', // Максимальная ширина видео
            });

            lightGallery(document.getElementById('gallery-mob'), {
                selector: 'a', // Все ссылки внутри контейнера
                thumbnail: true, // Включение миниатюр
                plugins: [lgVideo], // Подключение плагина для видео
                videoMaxWidth: '100%', // Максимальная ширина видео
            });

            // Инициализируем lightGallery для галереи с id="cerfs"
            lightGallery(document.getElementById('cerfs'), {
                selector: 'a',
                thumbnail: true
            });

            // Инициализируем lightGallery для галереи с id="cerfs"
            lightGallery(document.getElementById('reviews'), {
                selector: 'a',
                thumbnail: true
            });
        });
    </script>

    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>