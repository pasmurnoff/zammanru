<header class="header {{ is_front_page() || is_home() ? '' : 'header--dark' }}">
    <div class="container">
        <div class="header__container">
            <div class="header__logo">
                <a href="/">

                    <svg width="154" height="21" viewBox="0 0 154 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5714 4.04286L5.91429 16.1H13.7143V20.5H0V16.9571L7.65714 4.9H0.142857V0.5H13.5714V4.04286Z"
                            fill="white" />
                        <path
                            d="M41.0011 20.5H36.0011L35.0011 17.3571H27.5725L26.5725 20.5H21.5725L28.3726 0.5H34.2011L41.0011 20.5ZM31.2868 5.72857L28.944 13.0714H33.6297L31.2868 5.72857Z"
                            fill="white" />
                        <path
                            d="M65.2779 0.5H69.8493V20.5H65.2779V8.87143L60.1065 17.3571H59.5922L54.4208 8.87143V20.5H49.8493V0.5H54.4208L59.8493 9.38571L65.2779 0.5Z"
                            fill="white" />
                        <path
                            d="M95.8583 0.5H100.43V20.5H95.8583V8.87143L90.6869 17.3571H90.1726L85.0011 8.87143V20.5H80.4297V0.5H85.0011L90.4297 9.38571L95.8583 0.5Z"
                            fill="white" />
                        <path
                            d="M128.724 20.5H123.724L122.724 17.3571H115.296L114.296 20.5H109.296L116.096 0.5H121.924L128.724 20.5ZM119.01 5.72857L116.667 13.0714H121.353L119.01 5.72857Z"
                            fill="white" />
                        <path
                            d="M148.715 11.3571V0.5H153.287V20.5H149.858L142.144 9.64286V20.5H137.573V0.5H141.001L148.715 11.3571Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
            <nav class="header__nav">
                <ul class="header-menu">
                    <li class="header-menu-item dropdown">
                        <a href="/produkciya">Продукция</a>
                        <div class="dropdown-content">
                            <div class="dropdown-wrap">
                                @foreach (App::productItems() as $product)
                                <a class="dd-element" href="{{ get_permalink($product->ID) }}">{{ $product->post_title
                                    }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="header-menu-item"><a href="/uslugi">Услуги</a></li>
                    <li class="header-menu-item"><a href="/o-kompanii">О компании</a></li>
                    <li class="header-menu-item"><a href="/partnery-page">Партнеры</a></li>
                    <li class="header-menu-item"><a href="/sobytiya">События</a></li>
                    <li class="header-menu-item dropdown">
                        <a href="/galereya">Галерея</a>
                        <div class="dropdown-content">
                            <div class="dropdown-wrap">
                                @foreach (App::galleryAlbums() as $album)
                                <a class="dd-element" href="{{ get_permalink($album->ID) }}">{{ $album->post_title
                                    }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="header-menu-item"><a href="/kontakty">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__cta">
                <div class="header__action">
                    <a href="#" class="btn_primary openModal">Связаться</a>
                </div>
                <div class="hamburger">
                    <a href="#"><svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="path"
                                d="M0.5 4.5C0.5 3.94775 0.947754 3.5 1.5 3.5H23.5C24.0522 3.5 24.5 3.94775 24.5 4.5C24.5 5.05225 24.0522 5.5 23.5 5.5H1.5C0.947754 5.5 0.5 5.05225 0.5 4.5Z"
                                fill="black" />
                            <path class="path"
                                d="M0.5 12.5C0.5 11.9478 0.947754 11.5 1.5 11.5H23.5C24.0522 11.5 24.5 11.9478 24.5 12.5C24.5 13.0522 24.0522 13.5 23.5 13.5H1.5C0.947754 13.5 0.5 13.0522 0.5 12.5Z"
                                fill="black" />
                            <path class="path"
                                d="M1.5 19.5C0.947754 19.5 0.5 19.9478 0.5 20.5C0.5 21.0522 0.947754 21.5 1.5 21.5H23.5C24.0522 21.5 24.5 21.0522 24.5 20.5C24.5 19.9478 24.0522 19.5 23.5 19.5H1.5Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobmenu slidebar">
    <div>
        <div class="mobmenu__container">
            <ul class="mobmenu__menu">
                <li class="mobmenu__element"><a href="/produkciya" class="a">Продукция</a></li>
                <li class="mobmenu__element"><a href="/uslugi" class="a">Услуги</a></li>
                <li class="mobmenu__element"><a href="/o-kompanii" class="a">О компании</a></li>
                <li class="mobmenu__element"><a href="/partnery-page" class="a">Партнеры</a></li>
                <li class="mobmenu__element"><a href="/sobytiya" class="a">События</a></li>
                <li class="mobmenu__element"><a href="/galereya" class="a">Галерея</a></li>
                <li class="mobmenu__element"><a href="/kontakty" class="a">Контакты</a></li>
            </ul>
        </div>
        <div class="mobmenu__button">
            <a href="" class="btn_primary openModal">Связаться</a>
        </div>

    </div>
</div>


<div class="modal" id="contactModal">
    <div class="modal-content">
        <div class="close-button">

            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6.5L6 18.5" stroke="black" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M6 6.5L18 18.5" stroke="black" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>

        </div>
        <div class="contactus__title">
            <h2>Связаться</h2>
        </div>
        <div class="contactus__form">
            <form class="cform" id="contact-form">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="contact " placeholder="Номер или почта">
                <input type="submit" value="Отправить заявку">
            </form>
            <div id="form-response" style="display:none;"></div>

        </div>
    </div>
</div>