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
                    <img src="@asset('images/title-arrow.svg')">
                </div>
            </a>
        </div>
        @include('components.products.grid')
        @include('components.products.slider')
    </div>
</section>
