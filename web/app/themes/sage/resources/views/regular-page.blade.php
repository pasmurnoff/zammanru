{{--
Template Name: Стандартная страница
--}}
@extends('layouts.app')
@include('components.header.wrap')
<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    @php
        $images = get_field('page-gallery'); // Подставь правильное название поля ACF
    @endphp
</div>
<section class="regular-page">
    <div class="container">
        <div class="regular-page__wrap">
            <div class="regular-page__content">
                <h1 class="regular-page__title"><?php the_title(); ?></h1>

                <div id="slider4" class="slider-container">
                    <div class="slider" id="gallery-mob">
                        @foreach (array_slice($images, 0) as $image)
                            <div class="slide">
                                <a href="{{ $image['url'] }}" data-src="{{ $image['url'] }}"
                                    data-sub-html="{{ $image['alt'] }}">
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="mobile-gallery">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination" id="pag_mobile" data-slider="slider4"></div>
                </div>


                {!! the_content() !!}
            </div>
            <div class="regular-page__gallery">

                @php
                    $images = get_field('page-gallery'); // Подставь правильное название поля ACF
                @endphp

                @if ($images)
                    <div class="custom-gallery-grid" id="gallery">
                        {{-- Первое изображение выводится крупным --}}
                        <div class="custom-gallery-main-image">
                            <a href="{{ $images[0]['url'] }}" data-src="{{ $images[0]['url'] }}"
                                data-sub-html="{{ $images[0]['alt'] }}">
                                <img src="{{ $images[0]['url'] }}" alt="{{ $images[0]['alt'] }}"
                                    class="custom-large-image">
                            </a>
                        </div>

                        {{-- Миниатюры остальных изображений под большим изображением по 4 в ряд --}}
                        <div class="custom-small-images">
                            @foreach (array_slice($images, 1) as $image)
                                <a href="{{ $image['url'] }}" data-src="{{ $image['url'] }}"
                                    data-sub-html="{{ $image['alt'] }}">
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"
                                        class="custom-small-image">
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
</section>
<div class="page__contactus">
    @include('components.contactus.wrap')
</div>

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

    jQuery(document).ready(function() {
        // Инициализируем lightGallery с использованием атрибута data-src
        lightGallery(document.getElementById('gallery-mob'), {
            selector: 'a',
            thumbnail: true
        });
    });
</script>
