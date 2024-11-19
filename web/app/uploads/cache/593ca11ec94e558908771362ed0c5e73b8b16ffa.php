<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
    <section class="gallery-page">
        <div class="container">
            <h1 class="regular-page__title"><?php the_title(); ?></h1>
            <div class="gallery-page__wrap">

                <?php if($gallery = get_field('event-gallery')): ?>
                    <!-- Проверка, если поле галереи не пустое -->
                    <div class="gallery-grid" id="gallery">
                        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="gallery-item">
                                <a href="<?php echo esc_url($image['url']); ?>" data-src="<?php echo esc_url($image['url']); ?>"
                                    data-sub-html="<?php echo esc_attr($image['alt']); ?>">
                                    <img src="<?php echo e($image['sizes']['large']); ?>" alt="<?php echo e($image['alt']); ?>">
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p>Нет изображений для отображения.</p>
                <?php endif; ?>
                <div class="gallery-page__bottom">
                    <a href="/galereya">
                        <div class="gallery-page__all">
                            <span>К галерее</span><img src="<?= App\asset_path('images/arrow.svg'); ?>">
                        </div>
                    </a>

                </div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            // Инициализируем lightGallery с использованием атрибута data-src
            lightGallery(document.getElementById('gallery'), {
                selector: 'a',
                thumbnail: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>