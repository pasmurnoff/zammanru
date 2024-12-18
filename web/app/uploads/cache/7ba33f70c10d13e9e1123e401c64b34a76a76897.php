<?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
</div>
<section class=" products-page products">
    <div class="container">
        <h1 class="products-page__title"><?php the_title(); ?></h1>
        <div class="products__grid_onpage">
            <a href="product/мобильные-скважинные-компрессорные/" class="product-card">

                <h3 class="product-card__title">Мобильные скважинные компрессорные установки (МСКУ)</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product1.png'); ?>" alt="Мобильные скважинные компрессорные установки"
                        class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>

            <a href="/product/компрессорные-станции-кс" class="product-card">

                <h3 class="product-card__title">Компрессорные станции (КС)</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product2.png'); ?>" alt="Компрессорные станции" class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>

            <a href="/product/насосные-станции-нс/" class="product-card">
                <h3 class="product-card__title">Насосные станции (НС)</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product3.png'); ?>" alt="Насосные станции" class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>

            <a href="/product/блочные-модульные-здания-и-металлоко/" class="product-card">

                <h3 class="product-card__title">Блочные модульные здания и металлоконструкции</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product4.png'); ?>" alt="Блочные модульные здания и металлоконструкции"
                        class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>

            </a>


            <a href="/product/автоматизированные-системы-управлен/" class="product-card">

                <h3 class="product-card__title">Автоматизированные системы управления (АСУ)</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product5.png'); ?>" alt="Автоматизированные системы управления"
                        class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>

            </a>

            <a href="/product/установки-дозирования-химических-ре/" class="product-card">
                <h3 class="product-card__title">Установки дозирования химических реагентов (УДХР)</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product6.png'); ?>" alt="Установки дозирования химических реагентов"
                        class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>


            <a href="/product/поставка-запчастей-к-нефтепромыслов/" class="product-card product-card--wide">
                <h3 class="product-card__title">Поставка запчастей к нефтепромысловому оборудованию</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product7.png'); ?>" alt="Поставка запчастей к нефтепромысловому оборудованию"
                        class="product-card__image_wide">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>

            <a href="/product/нестандартная-продукция/" class="product-card">

                <h3 class="product-card__title">Нестандартная продукция</h3>
                <div class="product-card__image-container">
                    <img src="<?= App\asset_path('images/products/product8.png'); ?>" alt="Нестандартная продукция" class="product-card__image">
                </div>
                <div class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </div>
            </a>
        </div>
    </div>
</section>
<div class="container">
    <div class="page__button">
        <a href="/app/uploads/2024/11/catalog.pdf" download>Смотреть каталог полностью (PDF 1.8 MB)</a>
    </div>
</div>
<div class="page__contactus">
    <?php echo $__env->make('components.contactus.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const link = document.querySelector(".page__button a");

        function updateLinkText() {
            if (window.innerWidth <= 768) {
                link.textContent = "Смотреть каталог";
            } else {
                link.textContent = "Смотреть каталог полностью (PDF 1.8 MB)";
            }
        }

        // Изначально обновляем текст ссылки при загрузке страницы
        updateLinkText();

        // Добавляем слушатель события для изменения текста при изменении размера окна
        window.addEventListener("resize", updateLinkText);
    });
</script>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>