<section class="workflow main-page__section">
    <div class="container">
        <h2 class="main-page__title">Как мы работаем?</h2>
        <div class="workflow__wrap">
            <div class="steps">
                <div class="steps__list">
                    <div class="steps__item">
                        <span class="steps__number">01</span>
                        <p class="steps__description">Формирование заявки</p>
                    </div>
                    <div class="steps__item">
                        <span class="steps__number">02</span>
                        <p class="steps__description">Согласование ТЗ</p>
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
                    <div class="partners-logos">
                        <div class="partners__list">
                            <img src="@asset('images/partners/1.svg')" alt="Ритек" class="partners__item">
                            <img src="@asset('images/partners/2.svg')" alt="Татнефть" class="partners__item">
                            <img src="@asset('images/partners/3.svg')" alt="Татнефтеотдача" class="partners__item">
                            <img src="@asset('images/partners/aloil.svg')" id="aloil-logo" alt="Алоил" class="partners__item_aloil">
                        </div>
                        <div class="partners__list_bottom">
                            <img src="@asset('images/partners/5.svg')" alt="Самараинвестнефть" class="partners__item">
                            <img src="@asset('images/partners/6.svg')" alt="Геопрогресс" class="partners__item">
                            <img src="@asset('images/partners/7.svg')" alt="Байтекс" class="partners__item_last">
                        </div>
                    </div>
                </div>
        </div>
</section>
</div>

<div class="workflow__action">
    <a href="/partnery-page" class="btn_primary">Подробнее</a>
</div>

</div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const svgImage = document.getElementById("aloil-logo");

        // Функция для проверки ширины экрана
        function isDesktopScreen() {
            return window.innerWidth > 768; // Если ширина экрана больше 768px
        }

        function addHoverEffect() {
            svgImage.addEventListener("mouseover", onHover);
            svgImage.addEventListener("mouseout", onHoverOut);
        }

        function removeHoverEffect() {
            svgImage.removeEventListener("mouseover", onHover);
            svgImage.removeEventListener("mouseout", onHoverOut);
        }

        function fadeIn(element) {
            element.style.transition = "opacity 0.3s ease";
            element.style.opacity = 1; // Плавное проявление
        }

        function onHover() {
            svgImage.style.transition = "none"; // Отключаем анимацию перед сменой src
            svgImage.style.opacity = 0; // Делаем изображение невидимым
            svgImage.src = "@asset('images/partners/4.svg')"; // Заменяем изображение
            setTimeout(() => fadeIn(svgImage), 10); // Плавно проявляем через небольшой интервал
        }

        function onHoverOut() {
            svgImage.style.transition = "none"; // Отключаем анимацию перед сменой src
            svgImage.style.opacity = 0; // Делаем изображение невидимым
            svgImage.src = "@asset('images/partners/aloil.svg')"; // Возвращаем изображение
            setTimeout(() => fadeIn(svgImage), 10); // Плавно проявляем через небольшой интервал
        }

        // Инициализация: проверка текущей ширины экрана
        if (isDesktopScreen()) {
            svgImage.style.opacity = 1; // Устанавливаем начальное состояние
            addHoverEffect();
        }

        // Отслеживание изменения ширины экрана
        window.addEventListener("resize", () => {
            if (isDesktopScreen()) {
                addHoverEffect();
            } else {
                removeHoverEffect();
            }
        });
    });
</script>
