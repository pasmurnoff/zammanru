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
        <div class="vakanstii-detail">
            <div class="vakansiya">
                <div class="vakansiya__top">
                    <div class="vakansiya__left">
                        <div class="vakansiya__title">
                            <h1>{{ get_the_title() }}</h1>
                        </div>
                        <div class="vakansiya__info">
                            <div class="vakansiya__price">
                                <span>{{ get_field('vak-price') }} ₽</span>
                            </div>
                            <div class="vakansiya__s2">
                            <span>{{ get_field('vak-grafik') }}</span>
                            <span>{{ get_field('vak-time') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="vakansiya__right">
                        <img src="@asset('images/zm.png')">
                    </div>
                </div>
                <div class="vakansiya__body">
                    <div class="vakansiya__text">
                        <div class="vakansiya__t">
                            <span>Обязанности</span>
                        </div>
                        <div class="vakansiya__d">
                        {!! get_field('vak-ob') !!}
                        </div>
                    </div>

                    <div class="vakansiya__text">
                        <div class="vakansiya__t">
                            <span>Требования</span>
                        </div>
                        <div class="vakansiya__d">
                         {!! get_field('vak-tre') !!}
                        </div>
                    </div>
                </div>
                <div class="vakansiya__contact">
                    <div class="vcontakt">
                        <div class="vcontact__title">
                            <span>Откликнуться на вакансию</span>
                        </div>
                        <div class="vcontact__two">
                            <input type="text" placeholder="Фамилия, имя и отчество"> <input type="text" placeholder="Дата рождения">
                        </div>
                        <div class="vcontact__input">
                            <input type="text" placeholder="Телефон">
                        </div>
                        <div class="vcontact__submit">
                            <input type="submit" value="Откликнуться">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection