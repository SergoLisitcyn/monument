<?php
use frontend\widgets\FBFWidget;

/* @var $this yii\web\View */

$this->title = 'Памятники в Калининграде';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="container">
                <h1 style="text-align: center;">Каталог</h1>
                <div class="site-block col-xs-4">
                    <div class="site-image">
                       <img alt="type stone" src="/images/home/type_stone.jpg">
                    </div>
                    <h2>Виды камня</h2>
                    <div class="text-block">
                    <p>Натуральные камни – самый востребованный материал для изготовления ритуальных изделий.</p>
                        <a href="/type-stone">
                            <div class="button-block">
                                <span class="product-btn">ПОДРОБНЕЕ</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="site-block col-xs-4">
                    <div class="site-image">
                        <img alt="type stone" src="/images/home/3.jpg">
                    </div>
                    <h2>Гравировки</h2>
                    <div class="text-block">
                    <p>Мы наносим изображения и надписи любой сложности, тщательно прорисовываем мельчайшие детали.</p>
                        <a href="/gravirovka">
                            <div class="button-block">
                                <span class="product-btn">ПОДРОБНЕЕ</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="site-block col-xs-4">
                    <div class="site-image">
                        <img alt="type stone" src="/images/home/2.jpg">
                    </div>
                    <h2>Галерея</h2>
                    <div class="text-block">
                    <p>В данном разделе Вы можете ознакомится с образцами выполненных нами памятников и объектов. </p>
                    <a href="/gallery">
                        <div class="button-block">
                            <span class="product-btn">ПОДРОБНЕЕ</span>
                        </div>
                    </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="about-company">
            <div class="container">
                <h1 style="text-align: center">О компании</h1>
                <p style="color: rgba(0, 0, 0, 0.74);">
                    «ИП Пямятники» производит памятники и надгробия в Калининграде и предлагает полный спектр услуг по установке ритуальных конструкций и оформлению могил на территории Калининградской области.<br><br>

                    С 1998 года мы предоставляем жителям региона качественный сервис и широкий выбор материалов для изготовления памятных знаков. У нас Вы найдете все необходимое. Каталог продукции разнообразен по цене от простых моделей до заказных, индивидуальных.<br><br>

                    Мы работаем со льготными категориями граждан согласно законодательству. Обратитесь к нам по тел.: +7 (909) 793-83-73 и по адресу: ул. Некрасова, д. 18.
                </p>
            </div>
        </div>
        <div class="index-gallery">
            <div class="container">
                <h1 style="text-align: center">Галерея выполненных работ</h1>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_1.JPG"><img style="margin-bottom: 10px;" alt="Памятники" src="/images/index-gallery/IMG_1.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_2.JPG"><img style="margin-bottom: 10px;" alt="Памятники" src="/images/index-gallery/IMG_2.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_6.JPG"><img style="margin-bottom: 10px;" alt="Памятники" src="/images/index-gallery/IMG_6.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_4.JPG"><img style="margin-bottom: 10px;" alt="Памятники" src="/images/index-gallery/IMG_4.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_5.JPG"><img  alt="Памятники" src="/images/index-gallery/IMG_5.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_6.JPG"><img  alt="Памятники" src="/images/index-gallery/IMG_6.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_7.JPG"><img  alt="Памятники" src="/images/index-gallery/IMG_7.JPG"></a>
                <a data-fancybox="gallery" href="/images/index-gallery/IMG_8.JPG"><img  alt="Памятники" src="/images/index-gallery/IMG_8.JPG"></a>

            </div>
        </div>
        <div class="answer">
            <div class="container">
                    <div class="icon-section">
                        <div class="row" style="margin-bottom: 0">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-6">

                                <div class="icon-text">
                                    <div class="icon answer-icon">
                                        <i class="material-icons">help_outline</i>
                                    </div>
                                </div>
                                <div class="answer-text">
                                    <b style="color: #fff;font-size: 18px;">ХОТИТЕ ЗАДАТЬ ВОПРОС?</b>
                                    <p class="answer-text">Вы можете узнать больше информации по телефону:

                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-3" style="padding-left: 0">
                                <a class="tel" href="tel:+79097938373">
                                <button type="button" class="button-answer">+7 (909) 793-83-73</button>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div id="footer-map">

            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-4">

                        <div class="arh-contact">
                            <h2>Контактная информация</h2>
                            <p>г. Калининград, ул. Невского 18</p>
                            <p>График работы: Пн-Сб с 10:00 до 17:00 </p>
                            <p><span class="glyphicon glyphicon-envelope"></span>  <a href="mailto:victor1714@mail.ru">victor1714@mail.ru</a></p>
                            <p><span class="glyphicon glyphicon-earphone"></span>  <a class="tel" href="tel:+79097938373">+7 (909) 793-83-73</a></p>
                        </div>

                    </div>

                </div>
            </div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af41de4d62212f330825dace602eb5ce9d55f3a8a5772b63988e620f6cc5eb0cb&amp;width=100%25&amp;height=490&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
</div>
