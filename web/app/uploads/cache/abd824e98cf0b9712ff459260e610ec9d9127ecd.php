<?php
// Создаем новый объект WP_Query
$query = new WP_Query([
    'category_name' => 'events',
    'post_type' => 'post', // Тип записей (может быть 'post', 'page' или пользовательский тип)
    'posts_per_page' => 3, // Количество записей (в данном случае выводим последние 3 записи)
]);
?>

<section class="events">
    <div class="container">
        <div id="hideMobile">
            <h2 class="main-page__title">События</h2>
        </div>
        <div id="showMobile">
            <a href="/sobytiya">
                <div class="mobile-title-arrow">
                    <div>
                        <h2 class="main-page__title">События</h2>
                    </div>
                    <img src="<?= App\asset_path('images/title-arrow.svg'); ?>">
                </div>
            </a>
        </div>
        <?php echo $__env->make('components.events.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="slider-wrapper">
            <div class="slider-container" id="slider3">
                <div class="slider">


                    <?php if($query->have_posts()): ?>
                    <?php while($query->have_posts()): ?>
                    <?php $query->the_post() ?>
                    <div class="slide">
                        <div class="events__item">
                            <a href="<?php echo e(get_permalink()); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                <img src="<?php echo e(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo e(get_the_title()); ?>"
                                    class="events__image">
                                <?php else: ?>
                                <!-- Если нет миниатюры, можно вставить стандартное изображение -->
                                <img src="<?= App\asset_path('images/no-photo.png'); ?>" alt="Событие по умолчанию"
                                    class="events__image">
                                <?php endif; ?>
                                <div class="events__top">
                                    <span class="events__date"><?php echo e(get_the_date('d.m.Y')); ?></span>
                                    <div class="events__description">
                                        <h3><?php echo e(get_the_title()); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
            <?php else: ?>
            <p>Записей не найдено.</p>
            <?php endif; ?>

        </div>
    </div>
    <div class="pagination" data-slider="slider3"></div>
    </div>


    <a href="/sobytiya" class="events-button-more btn_primary">Все события</a>
    </div>
</section>