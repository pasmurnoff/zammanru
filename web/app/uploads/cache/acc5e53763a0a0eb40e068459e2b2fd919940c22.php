<?php
// Создаем новый объект WP_Query
$query = new WP_Query([
    'category_name' => 'gallery',
    'post_type' => 'post', // Тип записей (может быть 'post', 'page' или пользовательский тип)
    'posts_per_page' => -1, // Количество записей (в данном случае -1 означает все записи)
]);
?>

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

                <div class="gallery__list">

                    <?php if($query->have_posts()): ?>
                        <?php while($query->have_posts()): ?>
                            <?php $query->the_post() ?>
                            <a href="<?php echo e(get_permalink()); ?>">
                                <div class="gallery__item">
                                    <?php if(has_post_thumbnail()): ?>
                                        <img src="<?php echo e(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo e(get_the_title()); ?>"
                                            class="gallery__image">
                                    <?php else: ?>
                                        <!-- Если нет миниатюры, можно вставить стандартное изображение -->
                                        <img src="<?= App\asset_path('images/no-photo.png'); ?>" alt="Событие по умолчанию" class="gallery__image">
                                    <?php endif; ?>
                                    <div class="gallery__bottom">
                                        <div class="gallery__description">

                                            <h3><?php echo e(get_the_title()); ?></h3>

                                        </div>
                                        <div class="gallery__date">
                                            <span>Альбом</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php else: ?>
                        <p>Записей не найдено.</p>
                    <?php endif; ?>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>