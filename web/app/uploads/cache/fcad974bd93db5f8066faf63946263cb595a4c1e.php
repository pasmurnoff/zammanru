<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <?php
            $images = get_field('page-gallery'); // Подставь правильное название поля ACF
            $video_url = get_field('video_url'); // Получаем URL видео
            $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
        ?>
    </div>
    <section class="regular-page">
        <div class="container">
            <div class="regular-page__wrap">
                <div class="regular-page__content">
                    <h1 class="regular-page__title"><?php the_title(); ?></h1>

                    <div id="slider4" class="slider-container">
                        <div class="slider" id="gallery-mob">
                            
                            <?php if($video_url && $video_thumbnail): ?>
                                <div class="slide" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"<?php echo e($video_url); ?>", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="<?php echo e($video_thumbnail['url']); ?>" alt="Видео превью" class="mobile-gallery">
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


                    <?php echo the_content(); ?>

                </div>
                <div class="regular-page__gallery">

                    <?php
                        $images = get_field('page-gallery'); // Подставь правильное название поля ACF
                        $video_url = get_field('video_url'); // Получаем URL видео
                        $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
                    ?>

                    <?php if($images): ?>
                        <div class="custom-gallery-grid" id="gallery">
                            
                            <?php if($video_url && $video_thumbnail): ?>
                                <div class="custom-gallery-main-image" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"<?php echo e($video_url); ?>", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="<?php echo e($video_thumbnail['url']); ?>" alt="Видео превью"
                                            class="custom-large-image">
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
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>