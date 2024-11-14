{{--
Template Name: Партнеры
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
<section class="regular-page partners-page">
    <div class="container">
        <div class="regular-page__wrap">
            <div class="regular-page__content">
                <h1 class="regular-page__title"><?php the_title(); ?></h1>

                {!! the_content() !!}
            </div>
            <div class="regular-page__gallery">
                <div class="partners-page-list">
                    <img src="@asset('images/partners/1.svg')" alt="Ритек" class="partners-page__item">
                    <img src="@asset('images/partners/2.svg')" alt="Татнефть" class="partners-page__item">
                    <img src="@asset('images/partners/3.svg')" alt="Татнефтеотдача" class="partners-page__item">
                    <img src="@asset('images/partners/4.svg')" alt="Алоил" class="partners-page__item">
                    <img src="@asset('images/partners/5.svg')" alt="Самараинвестнефть" class="partners-page__item">
                    <img src="@asset('images/partners/6.svg')" alt="Геопрогресс" class="partners-page__item">
                    <img src="@asset('images/partners/7.svg')" alt="Байтекс" class="partners-page__item">
                    <img src="@asset('images/partners/8.svg')" alt="ТроицкНефть" class="partners-page__item">
                </div>
            </div>
        </div>
    </div>
</section>
