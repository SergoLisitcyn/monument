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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

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
                                <a href="tel:+7 (909) 793-83-73">+7 (909) 793-83-73</a>
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

<!--    <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ИП Лисицын В.Б. <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
