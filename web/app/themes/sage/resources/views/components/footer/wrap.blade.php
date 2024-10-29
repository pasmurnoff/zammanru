<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="@asset('images/logo_white.svg')">
                </div>
                <div class="footer__socials">
                    <div class="fsocials">
                        <img src="@asset('images/socials/telegram-footer.svg')">
                        <img src="@asset('images/socials/vk-footer.svg')">
                    </div>
                </div>
                <div class="footer__slogan">
                    <p>ЗАМАН – Ваш надежный партнер <br> в создании успешного будущего!</p>
                </div>
                <div class="footer__tags">
                    <a>#ЗАМАН</a> <a>#ВРЕМЯСОЗИДАТЬБУДУЩЕЕ</a>
                </div>
            </div>

            <div class="footer__contacts">
                <div class="footer-contacts">
                    <div class="footer-contacts__element">
                        <img src="@asset('images/footer/place.svg')"><span>423458, РТ, г. Альметьевск, ул. Шевченко, д. 5А/1</span>
                    </div>
                    <div class="footer-contacts__element">
                        <img src="@asset('images/footer/phone.svg')"><a href="tel:+7853424079"><span>+7 (853) 42-40-79,</span></a> <a
                            href="tel:+79393104079"><span>+7 (939)
                                310-40-79</span></a>
                    </div>
                    <div class="footer-contacts__element">
                        <img src="@asset('images/footer/mail.svg')"><a href="mailto:mail@zamman.com"><span>mail@zamman.com,</span></a>
                        <a href="mailto:omts@zamman.com"><span>omts@zamman.com</span></a>
                    </div>
                </div>

                <div class="footer__buttons">
                    <div class="footer-button__primary">
                        <a href="">Связаться</a>
                    </div>
                    <div class="footer-button__secondary">
                        <a href="" class="footer-button__secondary">Карта партнера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__divider"></div>
        <div class="footer__bottom">
            <div class="footer__copyrights">
                <span>© 2012-2024, ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ЗАМАН»</span>
            </div>
            <div class="footer__links">
                <a href="">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const carousel = document.querySelector('.services__carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    const scrollStep = 320; // Ширина одной карточки + отступы

    // Логика прокрутки при клике на кнопки
    nextButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: scrollStep,
            behavior: 'smooth'
        });
    });

    prevButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: -scrollStep,
            behavior: 'smooth'
        });
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
