<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.main-section.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.products.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.services.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.about-company.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.workflow.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.events.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('components.contactus.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>