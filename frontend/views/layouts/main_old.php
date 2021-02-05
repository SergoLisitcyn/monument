<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\FBFWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">
    <meta name="google-site-verification" content="rphj6uxEZjhQQvgKdiyQ9LwPwVEGhHE7fUjRO8U6paM" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Изготовление памятников и обустройство могил в Калининграде. Установка и доставка. Гарантия от 2x лет. Более 100 моделей памятников на могилу.">
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

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPW2Z94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php $this->beginBody() ?>
<?php $this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]); ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'fade none-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Contact', 'url' => '#', 'options' => ['data-toggle' => 'modal', 'data-target' => '#myModal']],
        ],
    ]);
    NavBar::end();
    ?>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 company-name">
                     <div class="co-name"><a href="/">ИП Лисицын В.Б.</a></div>
                     <div class="co-desc"><a href="/">Памятники и ритуальные принадлежности</a></div>
                </div>
                <div class="company-contact">
                    <div class="col-xs-4"  style="text-align: right">
                        <div class="company-address">
                            <i class="material-icons" style="vertical-align: bottom;">location_on</i>
                            <span>Калининград, Некрасова, д.18</span>
                        </div>
                    </div>
                    <div class="col-xs-4" style="text-align: center">
                        <div class="company-phones">
                            <div>
                                <i class="material-icons" style="vertical-align: middle;">phone_in_talk</i>
                                <a href="tel:+79097938373">+7 (909) 793-83-73</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 style="font-size: 30px">У нас Вы найдете все необходимое.</h1>
                <div class="row center">
                    <h2 style="font-size: 20px;padding-bottom: 20px;">Каталог продукции разнообразен по цене от простых моделей до<br> заказных, индивидуальных.</h2>
                </div>
                <button type="button" class="button-slider" data-toggle="modal" data-target="#myModal"><a href="#">Оставить заявку</a></button>


            </div>
        </div>

    </div>
    <?= FBFWidget::widget([]) ?>

        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
    <footer class="footer">
        <div class="container">
            <div class="footer-block" itemscope itemtype="https://schema.org/Organization">
                <div class="row">
                    <div class="col-xs-3 logo-footer-block">
<!--                        <div>-->
<!--                            <img class="logo-footer img-responsive" src="/theme/images/logo_name.png" alt="ИП Памятники">                   -->
<!--                        </div>-->
                        <div class="text-center" style="color: #ffffff;">
                            <div style="margin-top: 10px;">ИП Лисицын В.Б.</div>
                            <div>ИНН 390500376110</div>
                        </div>
                    </div>

                    <div class="col-xs-2 col-xs-offset-7 link-footer-block text-right">
                        <div>            <a href="tel:+79097938373" itemprop="telephone" content="+79097938373" class="footer-link-info">+7 (909) 793-83-73</a>
                        </div>
                        <div class="footer-link-descr">Пн-Сб с 10.00 до 17.00</div>
                        <div>            <a href="mailto:victor1714@mail.ru"  itemprop="email" content="victor1714@mail.ru" class="footer-link-info">victor1714@mail.ru</a>
                        </div>
                        <div class="footer-link-descr">пишите в любое время</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
