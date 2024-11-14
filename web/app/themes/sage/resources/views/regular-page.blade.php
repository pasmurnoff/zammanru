{{--
Template Name: Стандартная страница
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
        @php
            $images = get_field('page-gallery'); // Подставь правильное название поля ACF
            $video_url = get_field('video_url'); // Получаем URL видео
            $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
        @endphp
    </div>
    <section class="regular-page">
        <div class="container">
            <div class="regular-page__wrap">
                <div class="regular-page__content">
                    <h1 class="regular-page__title"><?php the_title(); ?></h1>

                    <div id="slider4" class="slider-container">
                        <div class="slider" id="gallery-mob">
                            {{-- Если есть видео, добавляем его в мобильную галерею --}}
                            @if ($video_url && $video_thumbnail)
                                <div class="slide" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"{{ $video_url }}", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="{{ $video_thumbnail['url'] }}" alt="Видео превью" class="mobile-gallery">
                                    </a>
                                </div>
                            @endif

                            @foreach ($images as $image)
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
                        $video_url = get_field('video_url'); // Получаем URL видео
                        $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
                    @endphp

                    @if ($images)
                        <div class="custom-gallery-grid" id="gallery">
                            {{-- Если есть видео, выводим его крупным --}}
                            @if ($video_url && $video_thumbnail)
                                <div class="custom-gallery-main-image" id="video_thumbnail">
                                    <a class="video-lightbox" data-lg-size="1280-720"
                                        data-video='{"source": [{"src":"{{ $video_url }}", "type":"video/mp4"}], "attributes": {"controls": true}}'>
                                        <img src="{{ $video_thumbnail['url'] }}" alt="Видео превью"
                                            class="custom-large-image">
                                    </a>
                                </div>
                            @elseif ($images)
                                {{-- Если видео нет, выводим крупным первое изображение --}}
                                <div class="custom-gallery-main-image">
                                    <a href="{{ $images[0]['url'] }}" data-src="{{ $images[0]['url'] }}"
                                        data-sub-html="{{ $images[0]['alt'] }}">
                                        <img src="{{ $images[0]['url'] }}" alt="{{ $images[0]['alt'] }}"
                                            class="custom-large-image">
                                    </a>
                                </div>
                            @endif

                            {{-- Маленькие изображения (и видео, если есть) --}}
                            <div class="custom-small-images">
                                {{-- Если есть видео, добавляем первое изображение в маленькие --}}
                                @if ($video_url && $images)
                                    <a href="{{ $images[0]['url'] }}" data-src="{{ $images[0]['url'] }}"
                                        data-sub-html="{{ $images[0]['alt'] }}">
                                        <img src="{{ $images[0]['url'] }}" alt="{{ $images[0]['alt'] }}"
                                            class="custom-small-image">
                                    </a>
                                @endif

                                {{-- Остальные изображения --}}
                                @if ($images)
                                    @foreach (array_slice($images, 1) as $image)
                                        <a href="{{ $image['url'] }}" data-src="{{ $image['url'] }}"
                                            data-sub-html="{{ $image['alt'] }}">
                                            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"
                                                class="custom-small-image">
                                        </a>
                                    @endforeach
                                @endif
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
