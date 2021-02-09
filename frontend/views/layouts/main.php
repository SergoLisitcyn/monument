<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use \yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="rphj6uxEZjhQQvgKdiyQ9LwPwVEGhHE7fUjRO8U6paM" />
    <meta name="yandex-verification" content="0793a1a4af5b42cd" />
    <meta name="description" content="Изготовление памятников и обустройство могил в Калининграде. Установка и доставка.
     Гарантия от 2x лет. Более 100 моделей памятников на могилу.">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132536028-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-132536028-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WPW2Z94');</script>
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52051779, "init", {
            id:52051779,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52051779" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <?php $this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]); ?>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <i class="fa fa-map-marker"></i>
                                <b>Калининград, Некрасова, д.18-24<br>(ориентир магазин Виктория)</b>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailto:promonument@mail.ru"> <i class="fa fa-envelope"></i> promonument@mail.ru</a></li>
                                    <li><a href="tel:+79097938373"> <i class="fa fa-phone"></i> +7 (909) 793-83-73</a></li>
                                    <li><a href="tel:+74012364658"> <i class="fa fa-phone"></i> +7 (4012) 36-46-58</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img src="../img/logonew-min.png" alt="Promonument.ru" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">главная</a></li>
                                        <li><a href="<?= Url::toRoute(['gallery/gallery', 'url' => 'vertical']) ?>">Наши работы</a></li>
                                        <li><a href="#about">О нас</a></li>
                                        <li><a href="#contact-all">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
<!--                                    <button type="button" class="button-slider" data-toggle="modal" data-target="#myModal">-->
<!--                                        <a href="#">Свяжитесь с нами</a>-->
<!--                                    </button>-->
                                    <a class="popup-with-form" href="#test-form">Свяжитесь с нами</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="../img/logonew-min.png" alt="Памятники в Калининграде" height="100">
                            </a>
                        </div>
                        <p>
                            Все авторские права, включая смежные авторские, сохраняются за правообладателями
                        </p>
                    </div>
                </div>
                <div class="col-xl-2  offset-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Ссылки
                        </h3>
                        <ul>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Галерея</a></li>
                            <li><a href="#"> Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Адрес
                        </h3>
                        <p>
                            Калининград, Некрасова, д.18
                            <br>
                            +7 (909) 793-83-73 <br>
                            promonument@mail.ru
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        Copyright &copy;2021 Все права защищены.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?= \frontend\widgets\FBFWidget::widget(); ?>

<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../js/vendor/jquery-1.12.4.min.js"></script>
<!--<script src="../js/popper.min.js"></script>-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script src="../js/ajax-form.js"></script>
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/scrollIt.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/nice-select.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/plugins.js"></script>
<!--contact js-->
<!--<script src="js/contact.js"></script>-->
<!--<script src="../js/jquery.ajaxchimp.min.js"></script>-->
<!--<script src="../js/jquery.form.js"></script>-->
<!--<script src="../js/jquery.validate.min.js"></script>-->
<script src="../js/mail-script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js" async></script>
<script src="../js/main.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
