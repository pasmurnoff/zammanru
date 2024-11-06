{{--
Template Name: Продукция
--}}
@extends('layouts.app')
@include('components.header.wrap')
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
            <div class="product-card">
                <a href="product/мобильные-скважинные-компрессорные/">
                    <h3 class="product-card__title">Мобильные скважинные компрессорные установки (МСКУ)</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product1.png')" alt="Мобильные скважинные компрессорные установки"
                            class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card">
                <a href="/product/компрессорные-станции-кс">
                    <h3 class="product-card__title">Компрессорные станции (КС)</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product2.png')" alt="Компрессорные станции" class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card">
                <a href="/product/насосные-станции-нс/">
                    <h3 class="product-card__title">Насосные станции (НС)</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product3.png')" alt="Насосные станции" class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card">
                <a href="/product/блочные-модульные-здания-и-металлоко/">
                    <h3 class="product-card__title">Блочные модульные здания и металлоконструкции</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product4.png')" alt="Блочные модульные здания и металлоконструкции"
                            class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>


            <div class="product-card">
                <a href="/product/автоматизированные-системы-управлен/">
                    <h3 class="product-card__title">Автоматизированные системы управления (АСУ)</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product5.png')" alt="Автоматизированные системы управления"
                            class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card">
                <a href="/product/установки-дозирования-химических-ре/">
                    <h3 class="product-card__title">Установки дозирования химических реагентов (УДХР)</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product6.png')" alt="Установки дозирования химических реагентов"
                            class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card product-card--wide">
                <a href="/product/поставка-запчастей-к-нефтепромыслов/">
                    <h3 class="product-card__title">Поставка запчастей к нефтепромысловому оборудованию</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product7.png')" alt="Поставка запчастей к нефтепромысловому оборудованию"
                            class="product-card__image_wide">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>

            <div class="product-card">
                <a href="/product/нестандартная-продукция/">
                    <h3 class="product-card__title">Нестандартная продукция</h3>
                    <div class="product-card__image-container">
                        <img src="@asset('images/products/product8.png')" alt="Нестандартная продукция" class="product-card__image">
                    </div>
                    <a href="#" class="product-card__circle-button">
                        <span class="product-card__circle-icon">→</span>
                    </a>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="page__button">
        <a href="">Смотреть каталог полностью (PDF 1.8 MB)</a>
    </div>
</div>
<div class="page__contactus">
    @include('components.contactus.wrap')
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
