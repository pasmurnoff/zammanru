<section class="main-page-section">
    <div class="container">
        <div id="hideMobile">
            <h2 class="main-page__title">Продукция</h2>
        </div>
        <div id="showMobile">
            <a href="/produkciya">
                <div class="mobile-title-arrow">
                    <div>
                        <h2 class="main-page__title">Продукция</h2>
                    </div>
                    <img src="<?= App\asset_path('images/title-arrow.svg'); ?>">
                </div>
            </a>
        </div>
        <?php echo $__env->make('components.products.grid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('components.products.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>
