@extends('layouts.app')
@section('content')
    @include('components.header.wrap')
    @include('components.main-section.wrap')
    @include('components.products.wrap')
    @include('components.services.wrap')
    @include('components.about-company.wrap')
    @include('components.workflow.wrap')
    @include('components.events.wrap')
    @include('components.contactus.wrap')


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            // Инициализируем lightGallery для галереи с id="gallery"
            lightGallery(document.getElementById('mainvideobox'), {
                selector: 'a', // Все ссылки внутри контейнера
                thumbnail: true, // Включение миниатюр
                plugins: [lgVideo], // Подключение плагина для видео
                videoMaxWidth: '100%', // Максимальная ширина видео
            });

        });
    </script>
@endsection
