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
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ЗАО «АЛОЙЛ»</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ООО «БайТекс»</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ПАО «Татнефть» им. В.Д. Шашина
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Самараинвестнефть» ГК «Нефтиса»
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ЗАО «Троицкнефть»
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Татнефтеотдача» ГК «ННК»

                            </span>
                        </div>
                    </div>


                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ООО «Геопрогресс»

                            </span>
                        </div>
                    </div>
                </div>

                <div class="partners-page-list">
                    <img src="@asset('images/partners/1.svg')" alt="Ритек" class="partners-page__item">
                    <img src="@asset('images/partners/2.svg')" alt="Татнефть" class="partners-page__item">
                    <img src="@asset('images/partners/3.svg')" alt="Татнефтеотдача" class="partners-page__item">
                    <img src="@asset('images/partners/4.svg')" alt="Алоил" class="partners-page__item">
                    <img src="@asset('images/partners/5.svg')" alt="Самараинвестнефть" class="partners-page__item">
                    <img src="@asset('images/partners/6.svg')" alt="Геопрогресс" class="partners-page__item">
                    <img src="@asset('images/partners/7.svg')" alt="Байтекс" class="partners-page__item">
                    <img src="@asset('images/partners/2.svg')" alt="ТроицкНефть" class="partners-page__item">
                </div>
            </div>
        </div>
        @include('components.contactus.wrap')

    </div>
</section>
