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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
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
                                <b>Калининград, Некрасова, д.18</b>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailto:victor1714@mail.ru"> <i class="fa fa-envelope"></i> victor1714@mail.ru</a></li>
                                    <li><a href="tel:+79097938373"> <i class="fa fa-phone"></i> +7 (909) 793-83-73</a></li>
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
                                    <img src="../img/logonew.png" alt="Promonument.ru" style="height: 55px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">главная</a></li>
                                        <li><a href="<?= Url::toRoute(['site/gallery', 'url' => 'gallery']) ?>">Галерея</a></li>
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
                                <img src="../img/logonew.png" alt="Памятники в Калининграде" height="100">
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
                            victor1714@mail.ru
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide" action="/" method="post">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Свяжитесь с нами</h3>
            <form>
                <div class="row">
                    <div class="col-xl-6">
                        <input type="text" name="ContactForm[name]"  placeholder="Ваше Имя">
                    </div>
                    <div class="col-xl-6">
                        <input type="text" name="ContactForm[phone]"  placeholder="Ваш телефон">
                    </div>
                    <div class="col-xl-12">
                        <input type="email"  name="ContactForm[email]" placeholder="Ваш Email">
                    </div>
                    <div class="col-xl-12">
                        <textarea id="contactform-body" class="form-control" name="ContactForm[body]" rows="6" aria-required="true" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->
<!-- footer end  -->
<!-- JS here -->
<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../js/vendor/jquery-1.12.4.min.js"></script>
<script src="../js/popper.min.js"></script>
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
<script src="../js/gijgo.min.js"></script>
<!--contact js-->
<!--<script src="js/contact.js"></script>-->
<script src="../js/jquery.ajaxchimp.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/mail-script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
<script src="../js/main.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
