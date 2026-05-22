@extends('layouts.app')
@section('content')
@include('components.header.wrap')
<div class="container">
    <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
        ?>
</div>
<section class="vakansii-page">
    <div class="container">
        <div class="vakanstii-detail">
            <div class="vakansiya">
                <div class="vakansiya__top">
                    <div class="vakansiya__left">
                        <div class="vakansiya__title">
                            <h1>{{ get_the_title() }}</h1>
                        </div>
                        <div class="vakansiya__info">
                            <div class="vakansiya__price">
                                <span>{{ get_field('vak-price') }} ₽</span>
                            </div>
                            <div class="vakansiya__s2">
                            <span>{{ get_field('vak-grafik') }}</span>
                            <span>{{ get_field('vak-time') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="vakansiya__right">
                        <img src="@asset('images/zm.png')">
                    </div>
                </div>
                <div class="vakansiya__body">
                    <div class="vakansiya__text">
                        <div class="vakansiya__t">
                            <span>Обязанности</span>
                        </div>
                        <div class="vakansiya__d">
                        {!! get_field('vak-ob') !!}
                        </div>
                    </div>

                    <div class="vakansiya__text">
                        <div class="vakansiya__t">
                            <span>Требования</span>
                        </div>
                        <div class="vakansiya__d">
                         {!! get_field('vak-tre') !!}
                        </div>

                   <div style="width: 100%; height: 1px; margin-top: 16px; margin-bottom: 16px;  background: rgba(0, 0, 0, 0.06)"></div>
                    <div class="vakansiya__usloviya">
                        <div class="vakansiya__t">
                            <span>Условия</span>
                        </div>
                        <div class="vakansiya__d">
                         {!! get_field('vak-us') !!}
                        </div>
                    </div>

                    </div>


                </div>
                <div class="vakansiya__contact">
                    <div class="vcontakt">
                        <div class="vcontact__title">
                            <span>Откликнуться на вакансию</span>
                        </div>
                    <form class="vform" data-response-container="vacancy-response-container">
                        <div style="display:none">
                        <input type="text" name="vacname" value="{{ get_the_title() }}"> 
                       </div>
                        <div class="vcontact__two">
                            <input style="color:#000;!important" type="text" name="fullname" required  placeholder="Фамилия, имя и отчество"> <input style="color:#000;!important"   type="text" class="date-mask" required name="birthdate" placeholder="Дата рождения">
                        </div>
                        <div class="vcontact__input">
                            <input type="text" style="color:#000;!important"  name="phone" placeholder="Телефон" required>
                        </div>
               <div style="margin-top:16px;" class="form-checkbox">
                    <input type="checkbox" required=""><label> Даю согласие на обработку
                        ваших
                        персональных
                        данных</label>
                </div>
                        <div class="vcontact__submit">
                            <input type="submit" value="Откликнуться">
                        </div>
                   </form>
                  <div style="text-align: center;" id="vacancy-response-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
$('.date-mask').on('input', function(e) {
    let value = $(this).val().replace(/\D/g, '');
    
    if (value.length > 8) {
        value = value.substring(0, 8);
    }
    
    let formatted = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 2 || i === 4) {
            formatted += '.';
        }
        formatted += value[i];
    }
    
    $(this).val(formatted);
});
</script>

<script>
$('.vform').on('submit', function(e) {
    e.preventDefault();
    const currentForm = $(this);
    const responseContainer = $(`#${currentForm.data('response-container')}`);
    const submitButton = currentForm.find('button[type="submit"]');
    const formData = currentForm.serialize();

    // Индикатор загрузки
    submitButton.prop('disabled', true).text('Отправка...');

    $.ajax({
        url: 'https://psmrnv.ru/vacancy-send.php',
        type: 'POST',
        dataType: 'json',
        data: formData,
        success: function(response) {
            if (response.status === 'success') {
                currentForm.fadeOut(300, function() {
                    responseContainer.html(`
                        <img src="https://psmrnv.ru/zamman/check.svg" style="margin-bottom: 12px;">
                        <p style="font-size:32px; line-height: 38.73px; font-weight: 600;">
                            ${response.message}
                        </p>
                        <button id="close-vacancy-button" class="btn_primary" style="margin-top: 24px; width: 100%;">
                            Закрыть
                        </button>
                    `);

                    $('#close-vacancy-button').on('click', function() {
                        responseContainer.empty();
                        currentForm.show().trigger('reset');
                        submitButton.prop('disabled', false).text('Откликнуться');
                    });
                });
            } else {
                responseContainer.html(`<p>${response.message}</p>`);
                submitButton.prop('disabled', false).text('Откликнуться');
            }
        },
        error: function() {
            responseContainer.html('<p>Ошибка соединения с сервером</p>');
            submitButton.prop('disabled', false).text('Откликнуться');
        }
    });
});
</script>

@endsection
