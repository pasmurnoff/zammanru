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
                        <a href="/partner-card" class="footer-button__secondary">Карта
                            партнера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__divider"></div>
        <div class="footer__bottom">
            <div class="footer__copyrights">
                <span>© 2012-2025, ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ЗАМАН»</span>
            </div>
            <div class="footer__links">
                <a href="/privacy-policy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    const $carousel = $('.services__carousel');
    const $pagination = $('.pag');
    const cardWidth = 400; // ширина одной карточки
    const $items = $carousel.children(); // все карточки
    const totalCards = $items.length; // общее количество карточек
    const scrollTimeout = 200; // Задержка перед выравниванием (мс)
    let isAnimating = false; // Флаг для предотвращения конфликтов
    let isDragging = false; // Флаг для drag-and-drop
    let startX; // Начальная точка перетаскивания
    let scrollStart; // Начальная позиция скролла
    let scrollDelta = 0; // Разница прокрутки (нужно для определения направления)

    // Проверяем размер окна и клонируем карточки только если ширина больше 768px
    if ($(window).width() > 768) {
        // Клонируем карточки для зацикливания
        $carousel.append($items.clone());
        $carousel.prepend($items.clone());

        // Устанавливаем начальную позицию скролла в центр
        const initialScrollLeft = totalCards * cardWidth;
        $carousel.scrollLeft(initialScrollLeft);
    }

    // Создаём точки пагинации
    for (let i = 0; i < totalCards; i++) {
        const $dot = $('<button class="pagination-dot"></button>');
        if (i === 0) $dot.addClass('active'); // Первая точка активна по умолчанию
        $pagination.append($dot);
    }

    const $dots = $pagination.find('.pagination-dot');

    // Функция обновления активной точки
    function updateActiveDot() {
        const currentIndex = Math.round($carousel.scrollLeft() / cardWidth) % totalCards;
        $dots.removeClass('active');
        $dots.eq(currentIndex).addClass('active');
    }

    // Прокрутка карусели при клике на точку
    $dots.on('click', function () {
        if (isAnimating) return; // Если идёт анимация, выходим
        isAnimating = true;

        const index = $(this).index();
        const newScrollLeft = totalCards * cardWidth + index * cardWidth;

        $carousel.animate({ scrollLeft: newScrollLeft }, 300, function () {
            isAnimating = false; // Сбрасываем флаг после завершения анимации
        });
    });

    // Автоматическое обновление активной точки и выравнивание
    let isScrolling;

    $carousel.on('scroll', function () {
        const maxScrollLeft = $carousel[0].scrollWidth - $carousel[0].clientWidth;

        if ($carousel.scrollLeft() >= maxScrollLeft - cardWidth) {
            $carousel.scrollLeft(totalCards * cardWidth);
        } else if ($carousel.scrollLeft() <= 0) {
            $carousel.scrollLeft(maxScrollLeft - totalCards * cardWidth);
        }

        updateActiveDot();

        // Устанавливаем таймер для выравнивания
        clearTimeout(isScrolling);
        isScrolling = setTimeout(function () {
            alignToCard();
        }, scrollTimeout);
    });

    // Функция выравнивания позиции карусели на ближайшую карточку
    function alignToCard() {
        if (isAnimating) return; // Не выравниваем, если идёт анимация
        const currentScrollLeft = $carousel.scrollLeft();
        const nearestCardIndex = Math.round(currentScrollLeft / cardWidth);
        const newScrollLeft = nearestCardIndex * cardWidth;

        isAnimating = true;
        $carousel.animate({ scrollLeft: newScrollLeft }, 200, function () {
            isAnimating = false; // Сбрасываем флаг после завершения анимации
        });
    }

    // Логика для drag & drop
    $carousel.on('mousedown', function (e) {
        isDragging = true;
        startX = e.pageX - $carousel.offset().left;
        scrollStart = $carousel.scrollLeft();
        $carousel.addClass('grabbing');
    });

    $(document).on('mouseup', function () {
        if (isDragging) {
            isDragging = false;
            $carousel.removeClass('grabbing');
            if (Math.abs(scrollDelta) > cardWidth / 4) { // Уменьшили порог до четверти ширины карточки
                // Пролистываем на следующую или предыдущую карточку
                const direction = scrollDelta > 0 ? 1 : -1;
                const targetScrollLeft = $carousel.scrollLeft() + direction * cardWidth;

                $carousel.animate({ scrollLeft: targetScrollLeft }, 200, function () {
                    alignToCard(); // Выравниваем на ближайшую карточку
                });
            } else {
                alignToCard(); // Если прокрутка недостаточна, просто выравниваем
            }
        }
    });

    $carousel.on('mousemove', function (e) {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - $carousel.offset().left;
        scrollDelta = x - startX; // Сохраняем разницу для определения направления
        $carousel.scrollLeft(scrollStart - scrollDelta);
    });

    // Логика для touch-событий (мобильные устройства)
    $carousel.on('touchstart', function (e) {
        isDragging = true;
        startX = e.touches[0].pageX - $carousel.offset().left;
        scrollStart = $carousel.scrollLeft();
    });

    $carousel.on('touchend', function () {
        if (isDragging) {
            isDragging = false;
            if (Math.abs(scrollDelta) > cardWidth / 4) { // Уменьшили порог до четверти ширины карточки
                const direction = scrollDelta > 0 ? 1 : -1;
                const targetScrollLeft = $carousel.scrollLeft() + direction * cardWidth;

                $carousel.animate({ scrollLeft: targetScrollLeft }, 200, function () {
                    alignToCard();
                });
            } else {
                alignToCard();
            }
        }
    });

    $carousel.on('touchmove', function (e) {
        if (!isDragging) return;
        const x = e.touches[0].pageX - $carousel.offset().left;
        scrollDelta = x - startX;
        $carousel.scrollLeft(scrollStart - scrollDelta);
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
        const modal = $('#contactModal');
        const modalHeader = $('#modal-header');
        const closeModal = $('.close-button');
        const closeButtonId = '#close-button';

        // Функция для показа модального окна
        function showModal() {
            modal.fadeIn(300); // Показываем модальное окно
            modalHeader.show(); // Показываем заголовок, если он скрыт
            $('#form2').show(); // Показываем форму в модальном окне, если она скрыта
            $('#responseMessage2').empty(); // Очищаем предыдущие сообщения
        }

        // Закрытие модального окна при нажатии на крестик
        closeModal.on('click', function() {
            modal.fadeOut(300); // Скрываем окно
        });

        // Закрытие модального окна при клике вне его содержимого
        $(window).on('click', function(event) {
            if ($(event.target).is(modal)) {
                modal.fadeOut(300); // Закрытие окна
            }
        });

        // Закрытие модального окна при клике на кнопку с id="close-button"
        modal.on('click', closeButtonId, function() {
            modal.fadeOut(300); // Скрываем окно
        });

        // Универсальный обработчик для всех форм
        $('.cform').on('submit', function(e) {
            e.preventDefault(); // Предотвращаем стандартное поведение формы

            const currentForm = $(this); // Текущая форма
            const responseContainerId = currentForm.data('response-container');
            const responseContainer = $(`#${responseContainerId}`);
            const formData = currentForm.serialize();

            $.ajax({
                url: '', // Укажите URL обработчика
                type: 'POST',
                dataType: 'json', // Ждём JSON-ответ
                data: formData,
                success: function(response) {
                    if (response.status === 'success') {
                        // Если форма находится в модальном окне, скрываем заголовок и форму
                        if (currentForm.closest('#contactModal').length) {
                            modalHeader.fadeOut(300);
                        }
                        currentForm.fadeOut(300, function() {
                            // Показываем сообщение об успехе
                            responseContainer.html(
                                '<img src="https://psmrnv.ru/zamman/check.svg" style="margin-bottom: 12px;"><p style="font-size:32px; line-height: 38.73px; letter-spacing: -1%; font-weight: 600;">' +
                                response.message +
                                '</p>' +
                                '<button id="close-button" class="btn_primary" style="margin-top: 24px; width: 100%;">Закрыть</button>'
                            );
                        });
                    } else {
                        // Показываем сообщение об ошибке
                        responseContainer.html('<p>' + response.message + '</p>');
                    }
                },
                error: function() {
                    responseContainer.html('<p>Произошла ошибка при отправке.</p>');
                }
            });
        });
    });
</script>
