{{--
Template Name: Политика конфиденциальности
--}}
@extends('layouts.app')
@section('content')
    @include('components.header.wrap')

    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
    <section class="regular-page">
        <div class="container">
            <div class="regular-page__wrap" style="grid-template-columns: 1fr;">
                <div class="regular-page__content">
                    <h1 class="regular-page__title"><?php the_title(); ?></h1>
                    {!! the_content() !!}
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
@endsection
