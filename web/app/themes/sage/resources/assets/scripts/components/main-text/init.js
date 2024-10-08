$(document).ready(function() {
    const texts = [
        'Время созидать будущее!',
        'Первоклассный сервис нефтепромыслового оборудования!',
        'Оптимизация времени и ресурсов наших партнеров!',
        'Реализация инноваций!',
    ];

    let index = 0;
    const $textElement = $('#changing-text');

    function changeText() {
        index = (index + 1) % texts.length;
        $textElement.fadeOut(500, function() {
            $textElement.text(texts[index]).fadeIn(500);
        });
    }

    // Меняем текст каждые 10 секунд
    setInterval(changeText, 10000);
});
