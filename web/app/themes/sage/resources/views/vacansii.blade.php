{{--
Template Name: Вакансии
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
<section class="vakansii-page">
    <div class="container">
        <div class="vakansii-page__pagename">
            <h1 class="regular-page__title">{{ the_title() }}</h1>
        </div>
        <div class="vakansii-page__wrap">
            <div class="vakansii-page__cards">
                <?php
// WP_Query для получения всех вакансий
$args = [
    'category_name' => 'vakansiya', // Замените на ваш кастомный тип поста
    'posts_per_page' => -1,    // Все записи
];
$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
                ?>
                <a href="{{ get_permalink() }}" class="card">
                    <div class="card__title">
                            <h3>{{ the_title() }}</h3>
                    </div>
                    <div class="card__info">
                        <span>{{ get_field('vak-grafik') }}</span>
                        <span>{{ get_field('vak-time') }}</span>
                    </div>
                    <div class="card__bottom">
                        <div class="card__button">
                            Откликнуться
                        </div>
                        <div class="card__price">
                            <span>{{ get_field('vak-price') }} ₽</span>
                        </div>
                    </div>
                </a>
                <?php
    endwhile;
else:
    echo '<p>Вакансии отсутствуют.</p>';
endif;
wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

@endsection