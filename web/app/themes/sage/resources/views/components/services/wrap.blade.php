<section class="main-page-section">
    <div class="container">
        <h2 class="main-page__title">Услуги</h2>
        @include('components.services.carousel')


        <div class="slider-wrapper">
            <div class="slider-container" id="slider2">
                <div class="slider">
                    <div class="slide">
                        <div class="service-card">
                            <div class="service-card__icon"><img src="@asset('images/services/num1.svg')"></div>
                            <p class="service-card__description">Консультация по выбору оптимального плана сервиса
                                оборудования
                            </p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card">
                            <div class="service-card__icon"><img src="@asset('images/services/num2.svg')"></div>
                            <p class="service-card__description">Технический аудит НПО</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card">
                            <div class="service-card__icon"><img src="@asset('images/services/num3.svg')"></div>
                            <p class="service-card__description">Шеф-монтажные и пуско-наладочные работы</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="service-card">
                            <div class="service-card__icon"><img src="@asset('images/services/num4.svg')"></div>
                            <p class="service-card__description">Плановое обслуживание и ремонты оборудования</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination" data-slider="slider2"></div>
        </div>


    </div>
</section>
