@extends('layouts.app')
@section('content')
    @include('components.header.wrap')

    <div class="container">
        <?php if (function_exists('yoast_breadcrumb')): ?>
        <?php yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
        <?php endif; ?>
    </div>

    <section class="regular-page">
        <div class="container">
            <div class="regular-page__wrap">
                <h1 class="regular-page__title" id="page-title-mobile">{{ the_title() }}</h1>

                @php
                    $images = get_field('event-gallery'); // Получаем изображения из поля ACF 'event-gallery'
                    $video_url = get_field('video_url'); // Получаем URL видео
                    $video_thumbnail = get_field('video_thumbnail'); // Превью для видео
                @endphp

                @if ($images)
                    <!-- Мобильная галерея -->
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
                @endif

                <div class="regular-page__gallery">
                    @php
                        $images = get_field('event-gallery'); // Подставь правильное название поля ACF
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
                    @php
                        $useful_files = get_field('useful_files'); // Получаем все файлы за один запрос
                    @endphp

                    @if ($useful_files)
                        <div class="additionally-files" id="additional-file-full">
                            <div class="additionally-files__title">
                                <span>Полезные файлы</span>
                            </div>
                            <div class="useful-files">
                                @foreach ($useful_files as $index => $file_row)
                                    @if (!empty($file_row['file']))
                                        <!-- Используем ключ на русском языке -->
                                        @php
                                            $file_url = $file_row['file']; // Получаем URL файла
                                            $file_id = attachment_url_to_postid($file_url); // Получаем ID файла
                                            $file_size = filesize(get_attached_file($file_id)); // Получаем размер файла в байтах
                                            $file_size_formatted = size_format($file_size); // Форматируем размер в понятный формат
                                            $file_type_info = wp_check_filetype($file_url); // Получаем информацию о файле (тип и расширение)
                                            $file_extension = strtoupper($file_type_info['ext']); // Преобразуем расширение в верхний регистр
                                            $file_name = !empty($file_row['file-name'])
                                                ? $file_row['file-name']
                                                : 'file'; // Название файла
                                        @endphp
                                        <div
                                            class="useful-files__item{{ $index === 0 ? ' useful-files__item--first' : '' }}">
                                            <div class="useful-files__info">
                                                <div class="useful-files__title">
                                                    <span>{{ $file_name }}</span>
                                                </div>
                                                <div class="useful-files__descr">
                                                    <span>{{ $file_extension }} {{ $file_size_formatted }}</span>
                                                </div>
                                            </div>
                                            <div class="useful-files__download">
                                                <img src="@asset('images/download.svg')">
                                                <a href="{{ esc_url($file_url) }}" class="a"
                                                    target="_blank">Скачать</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @else
                        <p id="NothingIsHere"></p>
                    @endif
                </div>

                <div class="regular-page__content" id="page/content/mobile">
                    <h1 class="regular-page__title" id="page-title-full">{{ the_title() }}</h1>
                    {!! the_content() !!}

                    @if ($useful_files)
                        <div class="additionally-files" id="additional-file-mobile">
                            <div class="additionally-files__title">
                                <span>Полезные файлы</span>
                            </div>
                            <div class="useful-files">
                                @foreach ($useful_files as $index => $file_row)
                                    @if (!empty($file_row['file']))
                                        <!-- Используем ключ на русском языке -->
                                        @php
                                            $file_url = $file_row['file']; // Получаем URL файла
                                            $file_id = attachment_url_to_postid($file_url); // Получаем ID файла
                                            $file_size = filesize(get_attached_file($file_id)); // Получаем размер файла в байтах
                                            $file_size_formatted = size_format($file_size); // Форматируем размер в понятный формат
                                            $file_type_info = wp_check_filetype($file_url); // Получаем информацию о файле (тип и расширение)
                                            $file_extension = strtoupper($file_type_info['ext']); // Преобразуем расширение в верхний регистр
                                            $file_name = !empty($file_row['file-name'])
                                                ? $file_row['file-name']
                                                : 'file'; // Название файла
                                        @endphp
                                        <div
                                            class="useful-files__item{{ $index === 0 ? ' useful-files__item--first' : '' }}">
                                            <div class="useful-files__info">
                                                <div class="useful-files__title">
                                                    <span>{{ $file_name }}</span>
                                                </div>
                                                <div class="useful-files__descr">
                                                    <span>{{ $file_extension }} {{ $file_size_formatted }}</span>
                                                </div>
                                            </div>
                                            <div class="useful-files__download">
                                                <img src="@asset('images/download.svg')">
                                                <a href="{{ esc_url($file_url) }}" class="a"
                                                    target="_blank">Скачать</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @else
                        <p id="NothingIsHere"></p>
                    @endif

                    @if (!has_category('product'))
                        <!-- Проверка: если рубрика не 'production' -->
                        <div class="regular-page__date">
                            <span>{{ the_date() }}</span>
                            <a href="/sobytiya">
                                <div class="regular-page__all">
                                    <span>все события</span><img src="@asset('images/arrow.svg')">
                                </div>
                            </a>
                        </div>
                    @endif

                    @if ($cerfs = get_field('cerfs'))
                        <div class="additionally-files">
                            <div class="additionally-files__title">
                                <span>Сертификаты соответсвия</span>
                            </div>
                            <div class="additionally-files__docs">
                                <div class="additionally-files__gallery" id="cerfs">
                                    @foreach ($cerfs as $image)
                                        <div class="additionally-gallery-item">
                                            <a href="{{ esc_url($image['url']) }}"
                                                data-src="{{ esc_url($image['url']) }}"
                                                data-sub-html="{{ esc_attr($image['alt']) }}" target="_blank">
                                                <img src="{{ esc_url($image['url']) }}"
                                                    alt="{{ esc_attr($image['alt']) }}" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <p id="nothingishere"></p>
                    @endif


                    @if ($cerfs = get_field('reviews'))
                        <div class="additionally-files">
                            <div class="additionally-files__title">
                                <span>Отзывы</span>
                            </div>
                            <div class="additionally-files__docs">
                                <div class="additionally-files__gallery" id="reviews">
                                    @foreach ($cerfs as $image)
                                        <div class="additionally-gallery-item">
                                            <a href="{{ esc_url($image['url']) }}"
                                                data-src="{{ esc_url($image['url']) }}"
                                                data-sub-html="{{ esc_attr($image['alt']) }}" target="_blank">
                                                <img src="{{ esc_url($image['url']) }}"
                                                    alt="{{ esc_attr($image['alt']) }}" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <p id="nothingishere"></p>
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

            // Инициализируем lightGallery для галереи с id="cerfs"
            lightGallery(document.getElementById('cerfs'), {
                selector: 'a',
                thumbnail: true
            });

            // Инициализируем lightGallery для галереи с id="cerfs"
            lightGallery(document.getElementById('reviews'), {
                selector: 'a',
                thumbnail: true
            });
        });
    </script>

    <script></script>
@endsection
