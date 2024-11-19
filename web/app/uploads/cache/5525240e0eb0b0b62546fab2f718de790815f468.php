<?php
// Создаем новый объект WP_Query
$query = new WP_Query([
    'category_name' => 'events',
    'post_type' => 'post', // Тип записей (может быть 'post', 'page' или пользовательский тип)
    'posts_per_page' => 3, // Количество записей (в данном случае выводим последние 3 записи)
]);
?>


<div class="events__list">

    <?php if($query->have_posts()): ?>
        <?php while($query->have_posts()): ?>
            <?php $query->the_post() ?>
            <div class="events__item">
                <a href="<?php echo e(get_permalink()); ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php echo e(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo e(get_the_title()); ?>"
                            class="events__image">
                    <?php else: ?>
                        <!-- Если нет миниатюры, можно вставить стандартное изображение -->
                        <img src="<?= App\asset_path('images/no-photo.png'); ?>" alt="Событие по умолчанию" class="events__image">
                    <?php endif; ?>
                    <div class="events__top">
                        <span class="events__date"><?php echo e(get_the_date('d.m.Y')); ?></span>
                        <div class="events__description">
                            <h3><?php echo e(get_the_title()); ?></h3>
                </a>
            </div>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata() ?>
<?php else: ?>
<p>Записей не найдено.</p>
<?php endif; ?>
</div>
