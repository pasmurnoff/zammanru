{{--
Template Name: Контакты
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
    <section class="contacts-page">
        <div class="container">
            <h1 class="regular-page__title"><?php the_title(); ?></h1>
            <div class="contacts-page__wrap">
                <div class="contacts-page__info">
                    <div class="contact-info">
                        <div class="contact-info__title">
                            <img src="@asset('images/contacts/pin.svg')"><span>Головной офис и производство</span>
                        </div>
                        <div class="contact-info__text">
                            <span>423458, Республика Татарстан, г. Альметьевск, ул. Шевченко, д. 5А/1</span>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info__title">
                            <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                        </div>
                        <div class="contact-info__text">
                            <a href="tel:+78553424079"><span>+7 (8553) 42-40-79</span></a>
                            <a href="tel:+79393104079"><span>+7 (939) 310-40-79</span></a>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info__title">
                            <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                        </div>
                        <div class="contact-info__text">
                            <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            <a href="mailto:omts@zamman.com"><span>omts@zamman.com</span></a>
                        </div>
                    </div>

                    <a href="/app/uploads/2024/11/partnermap.docx" download
                        class="btn_primary btn_wdth downloadbutton">Карта партнера (1.2
                        МБ)</a>

                </div>
                <div class="contacts-page__map">
                    <iframe style="border-radius: 24px; filter: grayscale(100%);"
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A7e2e47dda217960597ff3d6f7db871b6b9076b4d86448564219f596145e3127c&amp;source=constructor"
                        width="100%" height="404" frameborder="0"></iframe>

                    <div class="map-buttons">
                        <a href="https://yandex.ru/maps/-/CDxXqHNK">Яндекс.Карты</a>
                        <a href="https://go.2gis.com/6g6f2">2GIS</a>
                    </div>
                </div>
            </div>

            <div class="contacts-page__cards">
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/kosurov.png')">
                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Косуров Михаил
                                    Валерьевич</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Директор</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79393104079"><span>+7 (939) 310-40-79</span></a>
                            </div>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/litvinov.png')">
                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Литвинов Игорь
                                    Иванович</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Первый заместитель директора</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79274714802"><span>+7 (927) 471-48-02</span></a>
                            </div>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/husainov.png')">

                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Хусаинов Руслан
                                    Наилович</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Заместитель директора по производству и сервису</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79196293983"><span>+7 (919) 629-39-83</span></a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/semenyuk.png')">

                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Семенюк Дмитрий Александрович</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Заместитель директора по маркетингу и продажам</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79172415951"><span>+7 (917) 241-59-51</span></a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/chupahina.png')">

                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Чупахина Наталья
                                    Васильевна</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Главный бухгалтер</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79061174681"><span>+7 (906) 117-46-81</span></a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/dautov.png')">
                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Даутов Фархат Наилевич</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Руководитель производственной службы</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="tel:+79172764918"><span>+7 (917) 276-49-18</span></a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:mail@zamman.com"><span>mail@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="@asset('images/contacts/ziyastinov.png')">
                        </div>
                        <div class="contact-card__info">
                            <div class="contact-card__name">
                                <span>Зиястинов Рустам
                                    Ринатович</span>
                            </div>
                            <div class="contact-card__position">
                                <span>Начальник ОМТС</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card__contacts">
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/phone.svg')"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="+79274886131"><span>+7 (927) 488-61-31</span></a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="@asset('images/contacts/mail.svg')"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <a href="mailto:omts@zamman.com"><span>omts@zamman.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('components.contactus.wrap')
@endsection
