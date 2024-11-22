<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="@asset('images/logo_white.svg')">
                </div>
                <div class="footer__socials">
                    <div class="fsocials">
                        <a href="https://t.me/zamman_company">
                            <img src="@asset('images/socials/telegram-footer.svg')">
                        </a>
                        <a href="https://vk.com/zamman_company">
                            <img src="@asset('images/socials/vk-footer.svg')">
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
                        <img src="@asset('images/footer/place.svg')"><span>423458, РТ, г. Альметьевск, ул. Шевченко, д. 5А/1</span>
                    </div>
                    <div class="footer-contacts__element">
                        <img src="@asset('images/footer/phone.svg')"><a href="tel:+7853424079"><span>+7 (8553) 42-40-79,</span></a> <a
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
                <a>Политика конфиденциальности</a>
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

        // Клонирование элементов для зацикливания
        const $items = $carousel.children();
        $carousel.append($items.clone()); // Клонируем элементы в конец
        $carousel.prepend($items.clone()); // Клонируем элементы в начало

        // Устанавливаем начальную позицию скролла (в центр)
        const initialScrollLeft = $items.length * cardWidth;
        $carousel.scrollLeft(initialScrollLeft);

        // Прокрутка вперед
        $nextButton.on('click', function() {
            const maxScrollLeft = $carousel[0].scrollWidth - $carousel[0].clientWidth;
            const currentScrollLeft = $carousel.scrollLeft();
            let newScrollPosition = currentScrollLeft + cardWidth;

            $carousel.animate({
                scrollLeft: newScrollPosition
            }, 300, function() {
                if (newScrollPosition >= maxScrollLeft) {
                    $carousel.scrollLeft(initialScrollLeft); // Возвращаем в начальную позицию
                }
            });
        });

        // Прокрутка назад
        $prevButton.on('click', function() {
            const currentScrollLeft = $carousel.scrollLeft();
            let newScrollPosition = currentScrollLeft - cardWidth;

            $carousel.animate({
                scrollLeft: newScrollPosition
            }, 300, function() {
                if (newScrollPosition <= 0) {
                    $carousel.scrollLeft(initialScrollLeft); // Возвращаем в начальную позицию
                }
            });
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

        // Проверяем позицию скролла для зацикливания
        $carousel.on('scroll', function() {
            const maxScrollLeft = $carousel[0].scrollWidth - $carousel[0].clientWidth;

            if ($carousel.scrollLeft() >= maxScrollLeft - cardWidth) {
                $carousel.scrollLeft(initialScrollLeft); // Возвращаем в начальную позицию
            } else if ($carousel.scrollLeft() <= 0) {
                $carousel.scrollLeft(maxScrollLeft - initialScrollLeft); // Возвращаем в конец
            }
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoElement = document.getElementById('video');

        if (videoElement) {
            videoElement.muted = true; // Гарантируем отсутствие звука
            videoElement.addEventListener('canplaythrough', () => {
                videoElement.play().catch((error) => {
                    console.warn('Ошибка автозапуска видео в Safari:', error);
                });
            });
        }
    });
</script>



<script>
    $(document).ready(function() {
        const modal = $('#customModal');
        const modalMessage = $('#modalMessage');
        const closeModal = $('.custom-modal__close');

        // Функция для показа модального окна
        function showModal(message) {
            modalMessage.text(message); // Устанавливаем текст сообщения
            modal.fadeIn(300); // Показываем модальное окно

            // Автоматическое закрытие через 3 секунды
            setTimeout(() => {
                modal.fadeOut(300);
            }, 3000);
        }

        // Закрытие модального окна
        closeModal.on('click', function() {
            modal.fadeOut(300); // Скрываем окно при нажатии на крестик
        });

        $(window).on('click', function(event) {
            if ($(event.target).is(modal)) {
                modal.fadeOut(300); // Закрытие при клике вне содержимого модального окна
            }
        });

        // Универсальный обработчик для всех форм
        $('.cform').on('submit', function(e) {
            e.preventDefault(); // Предотвращаем стандартное поведение формы

            const form = $(this); // Текущая форма
            const responseContainer = form.data(
                'response-container'); // Получаем указанный контейнер для сообщения
            const formData = form.serialize();

            $.ajax({
                url: '', // Укажите URL обработчика
                type: 'POST',
                dataType: 'json', // Ждём JSON-ответ
                data: formData,
                success: function(response) {
                    if (response.status === 'success') {
                        form.fadeOut(300, function() {
                            $(`#${responseContainer}`).html(
                                '<p style="color: green; font-size: 16px;">' +
                                response.message +
                                '</p>');
                        });
                    } else {
                        showModal(response.message); // Показываем сообщение об ошибке
                    }
                },
                error: function() {
                    showModal('Произошла ошибка при отправке.');
                }
            });
        });
    });
</script>
