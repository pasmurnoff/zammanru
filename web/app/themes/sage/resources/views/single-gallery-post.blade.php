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
    <section class="gallery-page">
        <div class="container">
            <h1 class="regular-page__title"><?php the_title(); ?></h1>
            <div class="gallery-page__wrap">

                @if ($gallery = get_field('event-gallery'))
                    <!-- Проверка, если поле галереи не пустое -->
                    <div class="gallery-grid" id="gallery">
                        @foreach ($gallery as $image)
                            <div class="gallery-item">
                                <a href="<?php echo esc_url($image['url']); ?>" data-src="<?php echo esc_url($image['url']); ?>"
                                    data-sub-html="<?php echo esc_attr($image['alt']); ?>">
                                    <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>Нет изображений для отображения.</p>
                @endif
                <div class="gallery-page__bottom">
                    <a href="/galereya">
                        <div class="gallery-page__all">
                            <span>К галерее</span><img src="@asset('images/arrow.svg')">
                        </div>
                    </a>

                </div>
            </div>
    </section>

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
    </script>
@endsection
