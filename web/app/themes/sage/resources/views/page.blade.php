@extends('layouts.app')


<header class="header">
  <div class="container">
    <div class="header__container">
      <div class="header__logo">

        <svg width="154" height="21" viewBox="0 0 154 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5714 4.04286L5.91429 16.1H13.7143V20.5H0V16.9571L7.65714 4.9H0.142857V0.5H13.5714V4.04286Z"
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
          <path d="M148.715 11.3571V0.5H153.287V20.5H149.858L142.144 9.64286V20.5H137.573V0.5H141.001L148.715 11.3571Z"
            fill="white" />
        </svg>

      </div>
      <nav class="header__nav">
        <ul class="header-menu">
          <li class="header-menu-item"><a href="#">Продукция</a></li>
          <li class="header-menu-item"><a href="#">Услуги</a></li>
          <li class="header-menu-item"><a href="#">О компании</a></li>
          <li class="header-menu-item"><a href="#">Партнеры</a></li>
          <li class="header-menu-item"><a href="#">События</a></li>
          <li class="header-menu-item"><a href="#">Галерея</a></li>
          <li class="header-menu-item"><a href="#">Контакты</a></li>
        </ul>
      </nav>
      <div class="header__cta">
        <a href="#" class="header__cta-link">Связаться</a>
      </div>
    </div>
  </div>
</header>

<section class="main-section">
  <video class="main-section__video" autoplay muted loop>
    <source src="https://psmrnv.ru/zamman/video.mp4" type="video/mp4">
    Ваш браузер не поддерживает тег видео.
  </video>
  <div class="main-section__overlay"></div>
  <div class="main-section__content">
    <h1 class="main-section__title" id="changing-text">Время созидать будущее!</h1>
  </div>
</section>

<section class="products">
  <div class="container">
    <h2 class="products__title">Продукция</h2>
    <div class="products__grid">
      <div class="product-card">
        <h3 class="product-card__title">Мобильные скважинные компрессорные установки (МСКУ)</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product1.png')" alt="Мобильные скважинные компрессорные установки"
            class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Компрессорные станции (КС)</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product2.png')" alt="Компрессорные станции" class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Насосные станции (НС)</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product3.png')" alt="Насосные станции" class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Блочные модульные здания и металлоконструкции</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product4.png')" alt="Блочные модульные здания и металлоконструкции"
            class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Автоматизированные системы управления (АСУ)</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product5.png')" alt="Автоматизированные системы управления"
            class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Установки дозирования химических реагентов (УДХР)</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product6.png')" alt="Установки дозирования химических реагентов"
            class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card product-card--wide">
        <h3 class="product-card__title">Поставка запчастей к нефтепромысловому оборудованию</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product7.png')" alt="Поставка запчастей к нефтепромысловому оборудованию"
            class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>

      <div class="product-card">
        <h3 class="product-card__title">Нестандартная продукция</h3>
        <div class="product-card__image-container">
          <img src="@asset('images/products/product8.png')" alt="Нестандартная продукция" class="product-card__image">
        </div>
        <a href="#" class="product-card__circle-button">
          <span class="product-card__circle-icon">→</span>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="services">
  <div class="container">
    <h2 class="services__title">Услуги</h2>
    <div class="services__carousel-wrapper">
      <div class="services__carousel">
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num1.svg')"></div>
          <p class="service-card__description">Консультация по выбору оптимального плана сервиса оборудования</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num2.svg')"></div>
          <p class="service-card__description">Технический аудит НПО</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num3.svg')"></div>
          <p class="service-card__description">Шеф-монтажные и пуско-наладочные работы</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num4.svg')"></div>
          <p class="service-card__description">Плановое обслуживание и ремонты оборудования</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num5.svg')"></div>
          <p class="service-card__description">Аварийно–восстановительные работы</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num6.svg')"></div>
          <p class="service-card__description">Модернизация и техническое перевооружение</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num7.svg')"></div>
          <p class="service-card__description">Поставка оригинальных запасных частей и расходных материалов</p>
        </div>
        <div class="service-card">
          <div class="service-card__icon"><img src="@asset('images/services/num8.svg')"></div>
          <p class="service-card__description">Разработка инструкций и рекомендаций по эксплуатации, техническому
            обслуживанию и оптимизации работы оборудования</p>
        </div>
      </div>
    </div>
    <div class="carousel-controls">
      <button id="prev" class="carousel-button">←</button>
      <button id="next" class="carousel-button">→</button>
    </div>
  </div>
</section>

<section class="about-company">
  <div class="container">
    <h2 class="about-company__title">О компании</h2>
    <p class="about-company__description">
      ООО «ЗАМАН», основан в 2012 году в Альметьевске, мы занимаемся производством и сервисом нефтепромыслового
      оборудования, включая компрессорные установки и насосные станции, с использованием компонентов от ведущих
      производителей.
    </p>
    <button class="about-company__button">Подробнее</button>
    <!-- <div class="about-company__map">
      <img src="@asset('images/about-company/map.png')" alt="Карта расположения компании">
    </div> -->
  </div>
</section>

<section class="workflow">
  <div class="container">
    <h2 class="workflow__title">Как мы работаем?</h2>
    <div class="workflow__wrap">
      <div class="steps">
        <div class="steps__list">
          <div class="steps__item">
            <span class="steps__number">01</span>
            <p class="steps__description">Формирование заявки</p>
          </div>
          <div class="steps__item">
            <span class="steps__number">02</span>
            <p class="steps__description">Технические согласования</p>
          </div>
          <div class="steps__item">
            <span class="steps__number">03</span>
            <p class="steps__description">Составление договора</p>
          </div>
          <div class="steps__item">
            <span class="steps__number">04</span>
            <p class="steps__description">Производство продукции</p>
          </div>
          <div class="steps__item">
            <span class="steps__number">05</span>
            <p class="steps__description">Сдача проекта</p>
          </div>
        </div>
      </div>
      <div class="workflow__arrow-down">
        <div class="arrow-down">
        </div>
      </div>

      <section class="partners">
        <div class="container">
          <h2 class="partners__title">Счастливые партнёры</h2>
          <div class="partners__list">
            <img src="@asset('images/workflow/riktek.svg')" alt="Ритек" class="partners__item">
            <img src="@asset('images/workflow/tatneft.svg')" alt="Татнефть" class="partners__item">
            <img src="@asset('images/workflow/tatnefteotdacha.svg')" alt="Татнефтеотдача" class="partners__item">
            <img src="@asset('images/workflow/aloyl.svg')" alt="Алоил" class="partners__item">
            <img src="@asset('images/workflow/samarainvestneft.svg')" alt="Самараинвестнефть" class="partners__item">
            <img src="@asset('images/workflow/geoprogress.svg')" alt="Геопрогресс" class="partners__item">
            <img src="@asset('images/workflow/bayteks.svg')" alt="Байтекс" class="partners__item">
            <img src="@asset('images/workflow/troickneft.svg')" alt="ТроицкНефть" class="partners__item">
          </div>
        </div>
      </section>
    </div>

    <div class="workflow__action">
      <a href="">Подробнее</a>
    </div>

  </div>
</section>


<section class="events">
  <div class="container">
    <h2 class="events__title">События</h2>
    <div class="events__list">
      <div class="events__item">
        <span class="events__date">09.05.2024</span>
        <div class="events__description">
          <h3>Коллектив ООО «ЗАМАН» помнит и чтит тяжелые времена защитников Отечества...</h3>
        </div>
        <img src="@asset('images/events/1.png')" alt="Событие 1" class="events__image">
      </div>
      <div class="events__item">
        <span class="events__date">09.05.2024</span>
        <div class="events__description">
          <h3>Поздравили наших прекрасных девушек с Международным Женским Днем - 8 марта!</h3>
        </div>
        <img src="@asset('images/events/2.png')" alt="Событие 2" class="events__image">
      </div>
      <div class="events__item">
        <span class="events__date">08.03.2024</span>
        <div class="events__description">
          <h3>Коллектив ООО «ЗАМАН» помнит и чтит тяжелые времена защитников Отечества...</h3>
        </div>
        <img src="@asset('images/events/3.png')" alt="Событие 3" class="events__image">
      </div>
    </div>
    <a href="#" class="events__button">Все события</a>
  </div>
</section>


<section class="contactus">
  <div class="container">
    <div class="contactus__wrap">
      <div class="contactus__left">
        <div class="contactus__title">
          <h2>Связаться</h2>
        </div>
        <div class="contactus__form">
          <form class="cform">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Номер или почта">
            <input type="submit">
          </form>
        </div>
      </div>
      <div class="contactus__right">
        <img src="@asset('images/contactus/image.png')">
      </div>
    </div>
  </div>

</section>


<footer class="footer">
  <div class="footer__container">
    <div class="footer__logo">
      <h2>ZAMMAN</h2>
      <div class="footer__socials">
        <a href="#"><img src="path-to-vk-icon.svg" alt="VK" /></a>
        <a href="#"><img src="path-to-telegram-icon.svg" alt="Telegram" /></a>
      </div>
    </div>

    <div class="footer__contacts">
      <p><img src="path-to-location-icon.svg" alt="Address" /> 423458, РТ, г. Альметьевск, ул. Шевченко, д. 5А/1</p>
      <p><img src="path-to-phone-icon.svg" alt="Phone" /> +7 (8553) 42-40-79, +7 (939) 310-40-79</p>
      <p><img src="path-to-email-icon.svg" alt="Email" /> <a href="mailto:mail@zamman.com">mail@zamman.com</a>, <a href="mailto:omts@zamman.com">omts@zamman.com</a></p>
    </div>

    <div class="footer__actions">
      <a href="#" class="footer__button footer__button--primary">Связаться</a>
      <a href="#" class="footer__button footer__button--secondary">Карта партнера</a>
    </div>
  </div>

  <div class="footer__bottom">
    <p>© 2012-2024, ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ЗАМАН»</p>
    <a href="#">Политика конфиденциальности</a>
  </div>
</footer>


<script>
  const carousel = document.querySelector('.services__carousel');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');

  const scrollStep = 320; // Ширина одной карточки + отступы

  // Логика прокрутки при клике на кнопки
  nextButton.addEventListener('click', () => {
    carousel.scrollBy({ left: scrollStep, behavior: 'smooth' });
  });

  prevButton.addEventListener('click', () => {
    carousel.scrollBy({ left: -scrollStep, behavior: 'smooth' });
  });

  // Логика для перетаскивания мышью и тачем
  let isDragging = false;
  let startX;
  let scrollLeft;

  carousel.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
    carousel.style.cursor = 'grabbing';
  });

  carousel.addEventListener('mouseleave', () => {
    isDragging = false;
    carousel.style.cursor = 'grab';
  });

  carousel.addEventListener('mouseup', () => {
    isDragging = false;
    carousel.style.cursor = 'grab';
  });

  carousel.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2; // Коэффициент скорости прокрутки
    carousel.scrollLeft = scrollLeft - walk;
  });

  // Логика для сенсорных устройств
  carousel.addEventListener('touchstart', (e) => {
    isDragging = true;
    startX = e.touches[0].pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener('touchend', () => {
    isDragging = false;
  });

  carousel.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    const x = e.touches[0].pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
  });

</script>