{{--
Template Name: Галерея
--}}

<?php
// Создаем новый объект WP_Query
$query = new WP_Query([
    'category_name' => 'gallery',
    'post_type' => 'post', // Тип записей (может быть 'post', 'page' или пользовательский тип)
    'posts_per_page' => -1, // Количество записей (в данном случае -1 означает все записи)
]);
?>
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

                <div class="gallery__list">

                    @if ($query->have_posts())
                        @while ($query->have_posts())
                            @php $query->the_post() @endphp
                            <a href="{{ get_permalink() }}">
                                <div class="gallery__item">
                                    @if (has_post_thumbnail())
                                        <img src="{{ get_the_post_thumbnail_url(null, 'full') }}" alt="{{ get_the_title() }}"
                                            class="gallery__image">
                                    @else
                                        <!-- Если нет миниатюры, можно вставить стандартное изображение -->
                                        <img src="@asset('images/no-photo.png')" alt="Событие по умолчанию" class="gallery__image">
                                    @endif
                                    <div class="gallery__bottom">
                                        <div class="gallery__description">

                                            <h3>{{ get_the_title() }}</h3>

                                        </div>
                                        <div class="gallery__date">
                                            <span>Альбом</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endwhile
                        @php wp_reset_postdata() @endphp
                    @else
                        <p>Записей не найдено.</p>
                    @endif
                </div>
            </div>
    </section>
@endsection
