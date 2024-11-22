<div class="container">
    <section class="contactus">

        <div class="contactus__wrap">
            <div class="contactus__left">
                <div class="contactus__title">
                    <h2>Связаться</h2>
                </div>
                <div class="contactus__form">
                    <form class="cform" id="form" data-response-container="responseMessage1">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="text" name="contact" placeholder="Номер или почта">
                        <input type="submit" value="Отправить заявку">
                    </form>
                    <div id="responseMessage1"></div>
                </div>
            </div>
            <picture class="contactus__right">
                <source media="(max-width: 1024px)" srcset="@asset('images/contactus/image2.png')">
                <img src="@asset('images/contactus/image.png')">
            </picture>
        </div>
    </section>
</div>
