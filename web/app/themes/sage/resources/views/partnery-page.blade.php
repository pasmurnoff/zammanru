{{--
Template Name: Партнеры 2
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
<section class="regular-page">
    <div class="container">
        <div class="regular-page__content">
            <h1 class="regular-page__title">МСКУ производства ООО «ЗАМАН» успешно прошли промысловые испытания и
                эксплуатируются во многих нефтяных компаниях, в том числе:</h1>
            <div class="partnery-wrap">
                <div class="partners-names">
                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ООО «РИТЭК» ПАО «НК «ЛУКОЙЛ»</span>
                            <span class="partners-names__since">с 2019 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ЗАО «АЛОЙЛ»</span>
                            <span class="partners-names__since">с 2020 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ООО «БайТекс»</span>
                            <span class="partners-names__since">с 2021 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ПАО «Татнефть» им. В.Д. Шашина
                            </span>
                            <span class="partners-names__since">с 2022 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Самараинвестнефть» ГК «Нефтиса»
                            </span>
                            <span class="partners-names__since">с 2020 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ЗАО «Троицкнефть»
                            </span>
                            <span class="partners-names__since">с 2022 года</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Татнефтеотдача» ГК «ННК»

                            </span>
                            <span class="partners-names__since">с 2021 года</span>
                        </div>
                    </div>


                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ООО «Геопрогресс»

                            </span>
                            <span class="partners-names__since">с 2022 года</span>
                        </div>
                    </div>
                </div>

                <div class="partners-page-list">
                    <img src="@asset('images/partners/1.png')" alt="Ритек" class="partners-page__item">
                    <img src="@asset('images/partners/2.png')" alt="Татнефть" class="partners-page__item">
                    <img src="@asset('images/partners/3.png')" alt="Татнефтеотдача" class="partners-page__item">
                    <img src="@asset('images/partners/4.png')" alt="Алоил" class="partners-page__item">
                    <img src="@asset('images/partners/5.png')" alt="Самараинвестнефть" class="partners-page__item">
                    <img src="@asset('images/partners/6.svg')" alt="Геопрогресс" class="partners-page__item">
                    <img src="@asset('images/partners/7.svg')" alt="Байтекс" class="partners-page__item">
                    <img src="@asset('images/partners/8.svg')" alt="ТроицкНефть" class="partners-page__item">
                </div>
            </div>
        </div>
        @include('components.contactus.wrap')

    </div>
</section>
