<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                            <img src="<?= App\asset_path('images/contacts/pin.svg'); ?>"><span>Головной офис и производство</span>
                        </div>
                        <div class="contact-info__text">
                            <span>423458, Республика Татарстан, г. Альметьевск, ул. Шевченко, д. 5А/1</span>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info__title">
                            <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                        </div>
                        <div class="contact-info__text">
                            <span>+7 (8553) 42-40-79</span>
                            <span>+7 (939) 310-40-79</span>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info__title">
                            <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                        </div>
                        <div class="contact-info__text">
                            <span>mail@zamman.com</span>
                            <span>omts@zamman.com</span>
                        </div>
                    </div>

                    <a href="<?= App\asset_path('partner-map.docx'); ?>" download class="btn_primary btn_wdth">Карта партнера (1.2
                        МБ)</a>

                </div>
                <div class="contacts-page__map">
                    <iframe style="border-radius: 24px; filter: grayscale(100%);"
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A7e2e47dda217960597ff3d6f7db871b6b9076b4d86448564219f596145e3127c&amp;source=constructor"
                        width="100%" height="404" frameborder="0"></iframe>
                </div>
            </div>

            <div class="contacts-page__cards">
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/kosurov.png'); ?>">
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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (939) 310-40-79</span>
                            </div>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/husainov.png'); ?>">

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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (919) 629-39-83</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/semenyuk.png'); ?>">

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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (917) 241-59-51</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/chupahina.png'); ?>">

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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (906) 117-46-81</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/ziyastinov.png'); ?>">
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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (927) 488-61-31</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-card__top">
                        <div class="contact-card__image">
                            <img src="<?= App\asset_path('images/contacts/dautov.png'); ?>">
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
                                <img src="<?= App\asset_path('images/contacts/phone.svg'); ?>"><span>Телефон</span>
                            </div>
                            <div class="contact-info__text">
                                <span>+7 (917) 276-49-18</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info__title">
                                <img src="<?= App\asset_path('images/contacts/mail.svg'); ?>"><span>Почта</span>
                            </div>
                            <div class="contact-info__text">
                                <span>mail@zamman.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php echo $__env->make('components.contactus.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>