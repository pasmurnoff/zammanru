<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="<?= App\asset_path('images/logo_white.svg'); ?>">
                </div>
                <div class="footer__socials">
                    <div class="fsocials">
                        <a href="https://t.me/zamman_company">
                            <img src="<?= App\asset_path('images/socials/telegram-footer.svg'); ?>">
                        </a>
                        <a href="https://vk.com/zamman_company">
                            <img src="<?= App\asset_path('images/socials/vk-footer.svg'); ?>">
                        </a>
                    </div>
                </div>
                <div class="footer__slogan">
                    <p>ЗАМАН – Ваш надежный партнер в создании успешного будущего!</p>
                </div>
                <div class="footer__tags">
                    <a>#ЗАМАН</a> <a>#ВРЕМЯСОЗИДАТЬБУДУЩЕЕ</a>
                </div>
            </div>

            <div class="footer__contacts">
                <div class="footer-contacts">
                    <div class="footer-contacts__element">
                        <img src="<?= App\asset_path('images/footer/place.svg'); ?>"><span>423458, РТ, г. Альметьевск, ул. Шевченко, д. 5А/1</span>
                    </div>
                    <div class="footer-contacts__element">
                        <img src="<?= App\asset_path('images/footer/phone.svg'); ?>"><a href="tel:+7853424079"><span>+7 (8553) 42-40-79,</span></a> <a
                            href="tel:+79393104079"><span>+7 (939)
                                310-40-79</span></a>
                    </div>
                    <div class="footer-contacts__element">
                        <img src="<?= App\asset_path('images/footer/mail.svg'); ?>"><a href="mailto:mail@zamman.com"><span>mail@zamman.com,</span></a>
                        <a href="mailto:omts@zamman.com"><span>omts@zamman.com</span></a>
                    </div>
                </div>

                <div class="footer__buttons">
                    <div class="footer-button__primary">
                        <a href="#" class="openModal">Связаться</a>
                    </div>
                    <div class="footer-button__secondary">
                        <a href="/app/uploads/2024/11/partnermap.docx" download class="footer-button__secondary">Карта
                            партнера</a>
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
    $(document).ready(function() {
        const $carousel = $('.services__carousel');
        const $prevButton = $('#prev');
        const $nextButton = $('#next');

        // Фиксированная ширина одной карточки
        const cardWidth = 400;

        // Прокрутка вперед
        $nextButton.on('click', function() {
            const maxScrollLeft = $carousel[0].scrollWidth - $carousel[0].clientWidth;
            const currentScrollLeft = $carousel.scrollLeft();
            let newScrollPosition = currentScrollLeft + cardWidth;

            if (newScrollPosition > maxScrollLeft) {
                newScrollPosition = maxScrollLeft;
            }

            $carousel.animate({
                scrollLeft: newScrollPosition
            }, 50);
        });

        // Прокрутка назад
        $prevButton.on('click', function() {
            const currentScrollLeft = $carousel.scrollLeft();
            let newScrollPosition = currentScrollLeft - cardWidth;

            if (newScrollPosition < 0) {
                newScrollPosition = 0;
            }

            $carousel.animate({
                scrollLeft: newScrollPosition
            }, 50);
        });

        // Логика для drag & drop
        let isDragging = false;
        let startX;
        let scrollStart;

        // Начало перетаскивания мышью
        $carousel.on('mousedown', function(e) {
            isDragging = true;
            startX = e.pageX - $carousel.offset().left;
            scrollStart = $carousel.scrollLeft();
            $carousel.addClass('grabbing'); // Визуальная индикация
        });

        // Окончание перетаскивания мышью
        $(document).on('mouseup', function() {
            isDragging = false;
            $carousel.removeClass('grabbing');
        });

        // Перетаскивание мышью
        $carousel.on('mousemove', function(e) {
            if (!isDragging) return;
            e.preventDefault();
            const x = e.pageX - $carousel.offset().left;
            const walk = (x - startX) * 1.5; // Коэффициент скорости перетаскивания
            $carousel.scrollLeft(scrollStart - walk);
        });

        // Поддержка сенсорных событий для touch-устройств
        $carousel.on('touchstart', function(e) {
            isDragging = true;
            startX = e.touches[0].pageX - $carousel.offset().left;
            scrollStart = $carousel.scrollLeft();
        });

        $carousel.on('touchend', function() {
            isDragging = false;
        });

        $carousel.on('touchmove', function(e) {
            if (!isDragging) return;
            const x = e.touches[0].pageX - $carousel.offset().left;
            const walk = (x - startX) * 1.5;
            $carousel.scrollLeft(scrollStart - walk);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('contactModal');
        const openButtons = document.querySelectorAll('.openModal'); // Все кнопки с классом openModal
        const closeButton = document.querySelector('.close-button');

        // Добавляем обработчик для каждой кнопки
        openButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                modal.style.display = 'flex'; // Показать модальное окно
            });
        });

        closeButton.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Закрытие модального окна при клике на затемнённую область
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none'; // Скрыть модальное окно
            }
        });
    });
</script>
