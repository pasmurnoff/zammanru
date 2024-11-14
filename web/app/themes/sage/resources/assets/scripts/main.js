// import external dependencies
import 'jquery';

// Import components
import './components/header/init';
import './components/main-text/init';
import './components/slider/init';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


// jQuery(document).ready(function ($) {
//     $('#contact-form').on('submit', function (e) {
//         e.preventDefault(); // Предотвращаем стандартное поведение формы (перенаправление)

//         const form = $(this); // Сохраняем ссылку на форму
//         const formData = form.serialize(); // Сериализуем данные формы

//         // Отправляем AJAX-запрос
//         $.ajax({
//             data: formData + '&action=contact_form', // Добавляем действие contact_form
//             type: 'POST', // Метод POST
//             data: formData, // Данные формы
//             success(response) {
//                 if (response.success) {
//                     $('#form-response').text(response.data.message).show(); // Показываем сообщение
//                     form.hide(); // Скрываем форму
//                 } else {
//                     $('#form-response').text(response.data.message).show(); // Показываем ошибку
//                 }
//             },
//             error(xhr) {
//                 console.error('Ошибка запроса:', xhr);
//                 $('#form-response').text('Произошла ошибка. Попробуйте позже.').show(); // Обрабатываем ошибку
//             },
//         });
//     });
// });

