<?php echo $__env->make('components.header.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
</div>
<section class="regular-page">
    <div class="container">
        <div class="regular-page__content">
            <h1 class="regular-page__title">МСКУ производства ООО «ЗАМАН» успешно прошли промысловые испытания и
                эксплуатируются во многих нефтяных компаниях, в том числе:</h1>
            <div class="partnery-wrap">
                <div class="partners-names">
                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ООО «РИТЭК» ПАО «НК «ЛУКОЙЛ»</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ЗАО «АЛОЙЛ»</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title">ООО «БайТекс»</span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ПАО «Татнефть» им. В.Д. Шашина
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Самараинвестнефть» ГК «Нефтиса»
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ЗАО «Троицкнефть»
                            </span>
                        </div>
                    </div>

                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> АО «Татнефтеотдача» ГК «ННК»

                            </span>
                        </div>
                    </div>


                    <div class="partners-names__item">
                        <div class="partners-names__divider"></div>
                        <div class="partners-names__info">
                            <span class="partners-names__title"> ООО «Геопрогресс»

                            </span>
                        </div>
                    </div>
                </div>

                <div class="partners-page-list">
                    <img src="<?= App\asset_path('images/partners/1.svg'); ?>" alt="Ритек" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/2.svg'); ?>" alt="Татнефть" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/3.svg'); ?>" alt="Татнефтеотдача" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/aloil.svg'); ?>" id="aloil-logo" alt="Алоил" class="partners-page__item_aloil">
                    <img src="<?= App\asset_path('images/partners/5.svg'); ?>" alt="Самараинвестнефть" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/6.svg'); ?>" alt="Геопрогресс" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/7.svg'); ?>" alt="Байтекс" class="partners-page__item">
                    <img src="<?= App\asset_path('images/partners/2.svg'); ?>" alt="ТроицкНефть" class="partners-page__item">
                </div>
            </div>
        </div>
        <?php echo $__env->make('components.contactus.wrap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</section>
<script>
    const svgImage = document.getElementById("aloil-logo");

    svgImage.addEventListener("mouseover", () => {
        svgImage.src = "<?= App\asset_path('images/partners/4.svg'); ?>"; // Замена SVG на hover-версию
    });

    svgImage.addEventListener("mouseout", () => {
        svgImage.src = "<?= App\asset_path('images/partners/aloil.svg'); ?>"; // Возврат к оригинальной версии
    });
</script>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>