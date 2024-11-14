<section class="main-page-section">
    <div class="container">
        <div id="hideMobile">
            <h2 class="main-page__title">Услуги</h2>
        </div>
        <div id="showMobile">
            <a href="/uslugi">
                <div class="mobile-title-arrow">
                    <div>
                        <h2 class="main-page__title">Услуги</h2>
                    </div>
                    <img src="@asset('images/title-arrow.svg')">
                </div>
            </a>
        </div>
        @include('components.services.carousel')


        <div class="slider-wrapper">
            <div class="slider-container" id="slider2">
                <div class="slider">
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num1.svg')"></div>
                            <p class="service-card__description">Консультация по выбору оптимального плана сервиса
                                оборудования
                            </p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num2.svg')"></div>
                            <p class="service-card__description">Технический аудит НПО</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num3.svg')"></div>
                            <p class="service-card__description">Шеф-монтажные и пуско-наладочные работы</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num4.svg')"></div>
                            <p class="service-card__description">Плановое обслуживание и ремонты оборудования</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num5.svg')"></div>
                            <p class="service-card__description">Аварийно–восстановительные работы</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num6.svg')"></div>
                            <p class="service-card__description">Модернизация и техническое перевооружение</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num7.svg')"></div>
                            <p class="service-card__description">Поставка оригинальных запасных частей и расходных
                                материалов
                            </p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card" style="height: 135px">
                            <div class="service-card__icon"><img src="@asset('images/services/num8.svg')"></div>
                            <p class="service-card__description">Разработка инструкций по эксплуатации и рекомендации по
                                оптимизации работы НПО </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination" data-slider="slider2"></div>
        </div>


    </div>
</section>