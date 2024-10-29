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
                <a
                    href="http://localhost:3000/product/%d0%bc%d0%be%d0%b1%d0%b8%d0%bb%d1%8c%d0%bd%d1%8b%d0%b5-%d1%81%d0%ba%d0%b2%d0%b0%d0%b6%d0%b8%d0%bd%d0%bd%d1%8b%d0%b5-%d0%ba%d0%be%d0%bc%d0%bf%d1%80%d0%b5%d1%81%d1%81%d0%be%d1%80%d0%bd%d1%8b%d0%b5/">
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
                <h3 class="product-card__title">Компрессорные станции (КС)</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product2.png')" alt="Компрессорные станции" class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card">
                <h3 class="product-card__title">Насосные станции (НС)</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product3.png')" alt="Насосные станции" class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card">
                <h3 class="product-card__title">Блочные модульные здания и металлоконструкции</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product4.png')" alt="Блочные модульные здания и металлоконструкции"
                        class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card">
                <h3 class="product-card__title">Автоматизированные системы управления (АСУ)</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product5.png')" alt="Автоматизированные системы управления"
                        class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card">
                <h3 class="product-card__title">Установки дозирования химических реагентов (УДХР)</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product6.png')" alt="Установки дозирования химических реагентов"
                        class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card product-card--wide">
                <h3 class="product-card__title">Поставка запчастей к нефтепромысловому оборудованию</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product7.png')" alt="Поставка запчастей к нефтепромысловому оборудованию"
                        class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
                </a>
            </div>

            <div class="product-card">
                <h3 class="product-card__title">Нестандартная продукция</h3>
                <div class="product-card__image-container">
                    <img src="@asset('images/products/product8.png')" alt="Нестандартная продукция" class="product-card__image">
                </div>
                <a href="#" class="product-card__circle-button">
                    <span class="product-card__circle-icon">→</span>
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
