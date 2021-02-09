<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$this->title = 'Памятники на могилу в Калининграде';
?>
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel" style="display: block">
        <div class="single_slider  d-flex align-items-center slider_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="slider_text ">
                            <h3> <span>У нас Вы</span> <br>
                                найдете все необходимое. </h3>
                            <p>Каталог продукции разнообразен по цене от простых моделей до
                                заказных, индивидуальных.</p>
                            <a href="#test-form" class="boxed-btn3 popup-with-form">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>КАТЕГОРИИ</h3>
                    <p>Если вы хотите заказать памятник, которого нет в каталоге нашего сайта, пожалуйста,<br>
                         вышлите нам по электронной почте promonument@mail.ru фото или рисунок<br>
                          интересующего вас памятника или свяжитесь с нами по телефону.
                        </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="../img/index_page/onas2.jpg" alt="Памятники на могилу Калининград" style="height: 350px;">
                    </div>
                    <div class="department_content">
                        <h3><a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'vertical']) ?>">Наши работы</a></h3>
                        <p>В данном разделе Вы можете ознакомиться с образцами выполненных нами памятников.
                        </p>
                        <a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'vertical']) ?>" class="learn_more">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="../img/index_page/ograd.jpg" alt="Оградки,Лавки,Вазы Калининград">
                    </div>
                    <div class="department_content">
                        <h3><a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'other']) ?>">Лавки,вазы,оградки</a></h3>
                        <p>В данном разделе Вы можете ознакомиться с образцами выполненных нами памятников.
                        </p>
                        <a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'other']) ?>" class="learn_more">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="../img/index_page/gorizontal.jpg" alt="Горизонтальные памятники Калининград">
                    </div>
                    <div class="department_content">
                        <h3><a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'gorizontal']) ?>">Виды памятников</a></h3>
                        <p>В данном разделе Вы можете ознакомиться с образцами выполненных нами памятников.
                        </p>
                        <a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'gorizontal']) ?>" class="learn_more">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offers_area_end -->
<!-- service_area_start -->
<div class="service_area">
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-xl-4 col-md-4">
                <div class="single_service">
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
<!--                        <i class="flaticon-electrocardiogram"></i>-->
                    </div>
                    <h3>Надежная компания</h3>
                    <p>На рынке с 1999 года. Даем реальные гарантии: 2 года на продукцию.
                    </p>
                    <a href="#" class="boxed-btn3-white">Обратный звонок</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
<!--                        <i class="flaticon-emergency-call"></i>-->
                    </div>
                    <h3>Бесплатные консультации</h3>
                    <p>Обратитесь за помощью к наш – вместе мы подберем модель.</p>
                    <a href="tel:+79097938373" class="boxed-btn3-white">+7 (909) 793-83-73</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <h3>Работаем по всей области</h3>
                    <p>Работаем на всех кладбищах Калининграда и области.
                    </p>
                    <a href="mailto:promonument@mail.ru" class="boxed-btn3-white">Напишите нам</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- welcome_docmed_area_start -->
<div class="welcome_docmed_area"  id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_thumb">
                    <div class="thumb_1">
                        <img src="../img/index_page/onas2.jpg" alt="Памятники на могилу в Калининграде">

                    </div>
                    <div class="thumb_2">
                        <img src="../img/index_page/onas1.jpg" alt="Памятники на могилу в Калининграде">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_docmed_info">
                    <h2>О компании</h2>
                    <p>С 1999 года мы предоставляем жителям региона качественный сервис и широкий выбор материалов для изготовления памятных знаков.
                        У нас Вы найдете все необходимое. Каталог продукции разнообразен по цене от простых моделей до заказных, индивидуальных.
                    </p>
                    <ul>
                        <li> <i class="flaticon-right"></i> Пенсионерам скидки. </li>
                        <li> <i class="flaticon-right"></i> Мы работаем со льготными категориями граждан.</li>
                        <li> <i class="flaticon-right"></i> На все работы предусмотрена гарантия.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- welcome_docmed_area_end -->

<!-- business_expert_area_start  -->
<div class="business_expert_area">
    <div class="business_tabs_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                               aria-selected="true">Разумная стоимость услуг</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                               aria-selected="false">Натуральный гранит
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                               aria-selected="false">Гравировка высокого класса</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="border_bottom">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="business_info">
                                <div class="icon">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </div>
                                <h3>Разумная стоимость услуг</h3>
                                <p>Мы предлагаем лучшие цены на материалы, в том числе на мрамор и гранит в Калининграде и Калининградской обсласти. Для льготных категорий граждан действуют специальные предложения.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="business_thumb">
                                <img src="../img/main/granit-min.jpg" alt="Памятники на могилу в Калининграде">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="business_info">
                                <div class="icon">
                                    <i class="fa fa-leaf" aria-hidden="true"></i>
                                </div>
                                <h3>Делаем памятники из натурального гранита
                                </h3>
                                <p>Не закупаем сырье у посредников, а работаем напрямую с карьерами. Берем в работу только лучшие образцы горной породы, блоки однородного цвета, без вкраплений, трещин и сколов.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="business_thumb">
                                <img src="../img/main/granit-min.jpg" alt="Памятники на могилу Калининград">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="business_info">
                                <div class="icon">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </div>
                                <h3>Гравировка</h3>
                                <p>Портреты, выполненные на гравировальном станке последнего поколения, полностью повторяют изображения на фотографиях и почти ничем не уступают ручной гравировке.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="business_thumb">
                                <img src="../img/main/granit-min.jpg" alt="Памятники на могилу в Калининграде">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- business_expert_area_end  -->



<!-- Emergency_contact start -->
<div class="Emergency_contact" id="contact-all">
    <div class="conatiner-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                    <div class="info">
                        <h3>Свяжитесь с нами по телефону</h3>
                        <p>Вы сможете узнать больше информации по телефону.</p>
                    </div>
                    <div class="info_button">
                        <a href="tel:+79097938373" class="boxed-btn3-white">+7 (909) 793-83-73</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                    <div class="info">
                        <h3>Или напишите нам на email</h3>
                        <p>Пишите в любое время.
                        </p>
                    </div>
                    <div class="info_button">
                        <a href="mailto:promonument@mail.ru" class="boxed-btn3-white">Написать письмо</a>
                    </div>
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
                    <p>г. Калининград, ул. Некрасова 18</p>
                    <p>График работы: Пн-Сб с 10:00 до 17:00 </p>
                    <p><span class="glyphicon glyphicon-envelope"></span>  <a href="mailto:promonument@mail.ru">promonument@mail.ru</a></p>
                    <p><span class="glyphicon glyphicon-earphone"></span>  <a class="tel" href="tel:+79097938373">+7 (909) 793-83-73</a></p>
                </div>

            </div>

        </div>
    </div>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af41de4d62212f330825dace602eb5ce9d55f3a8a5772b63988e620f6cc5eb0cb&amp;width=100%25&amp;height=490&amp;lang=ru_RU&amp;scroll=false"></script>
</div>
<!-- Emergency_contact end -->
