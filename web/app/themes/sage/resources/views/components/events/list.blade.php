<?php
// Создаем новый объект WP_Query
$query = new WP_Query([
    'category_name' => 'events',
    'post_type' => 'post', // Тип записей (может быть 'post', 'page' или пользовательский тип)
    'posts_per_page' => 3, // Количество записей (в данном случае выводим последние 3 записи)
]);
?>


<div class="events__list">

    @if ($query->have_posts())
        @while ($query->have_posts())
            @php $query->the_post() @endphp
            <div class="events__item">
                <div class="events__top">
                    <span class="events__date">{{ get_the_date('d.m.Y') }}</span>
                    <div class="events__description">
                        <a href="{{ get_permalink() }}">
                            <h3>{{ get_the_title() }}</h3>
                        </a>
                    </div>
                </div>
                @if (has_post_thumbnail())
                    <img src="{{ get_the_post_thumbnail_url(null, 'full') }}" alt="{{ get_the_title() }}"
                        class="events__image">
                @else
                    <!-- Если нет миниатюры, можно вставить стандартное изображение -->
                    <img src="@asset('images/no-photo.png')" alt="Событие по умолчанию" class="events__image">
                @endif
            </div>
        @endwhile
        @php wp_reset_postdata() @endphp
    @else
        <p>Записей не найдено.</p>
    @endif
</div>
