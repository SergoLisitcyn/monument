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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Global site tag (gtag.js) - Google Analytics -->


    <noscript><div><img src="https://mc.yandex.ru/watch/52051779" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="top_select">
    <div class="container">
        <div class="row">
            <div class="spatiu">
                <div class="top_block">
                    <div class="containre">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-6">
                                <div class="lang">
                                    <ul>
                                        <li class="active"><a href="/ru/">Русский</a></li>
                                        <li class=""><a href="/en/">English</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-6">
                                <div class="right_top">
                                    <a href="" class="simple_link">Отправить сообщение</a>
                                    <a href="/ru/zayavka-dlya-predvaritelnoy-ocenki" class="btn_green"><i><img src="images/img/1.png" alt="Заявка для предварительной оценки"></i>Заявка для предварительной оценки</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="phone_top">
    <div class="container white">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="logo_mic visible-sm visible-xs"><a href="/ru/"><img src="images/img/2.png" alt="General Factoring"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="right">
                    <div class="item_call">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                Заказать звонок                            </button>
                            <div class="dropdown-menu form_drop">
                                <h3>Заказать звонок</h3>
                                <form id="callForm" action="" method="post" enctype="application/x-www-form-urlencoded" novalidate="true">
                                    <fieldset>
                                        <input type="hidden" name="form" value="Заказать звонок">
                                        <input type="hidden" name="_csrf" value="bnFkSFk4d0EgOjR4PFpFICYeEAkyejk1JCsQcBpUFSUCPFBwBmkFdA==">
                                        <div class="form-group">
                                            <input class="form-control" name="name" value="" data-error="Это поле является обязательным" type="text" placeholder="Ваше имя *" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control" name="phone" value="" data-error="Это поле является обязательным" type="text" placeholder="Ваш номер телефона *" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <em>* Поля, обязательные для заполнения</em>

                                        <input class="btn_green disabled" type="submit" value="Отправить">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="phone">+7 (499) 649 20 10</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="menu_top">
    <div class="container white">
        <div class="row">
            <div class="menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="linii_btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </span>
                                <span class="text_btn"> Меню</span>
                            </button>
                            <a class="navbar-brand visible-md visible-lg" href="/ru/"><img src="images/img/2.png" alt="General Factoring"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">

                                <li class="dropdown "><a class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="/ru/o-nas">О нас</a>

                                    <ul class="dropdown-menu menu_drop" style="display: none;">
                                        <li><a href="/ru/o-nas/o-kompanii">О компании</a></li>
                                        <li><a href="/ru/o-nas/komanda">Команда</a></li>
                                        <li><a href="/ru/o-nas/gruppa">Группа</a></li>
                                        <li><a href="/ru/o-nas/rekvizity">Реквизиты</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown "><a class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="/ru/nashi-uslugi">Наши услуги</a>

                                    <ul class="dropdown-menu menu_drop">
                                        <li><a href="/ru/nashi-uslugi/regressnyy-faktoring">Регрессный факторинг</a></li>
                                        <li><a href="/ru/nashi-uslugi/bezregressnyy-faktoring">Безрегрессный факторинг</a></li>
                                        <li><a href="/ru/nashi-uslugi/konfidencialnyy-faktoring">Конфиденциальный факторинг</a></li>
                                        <li><a href="/ru/nashi-uslugi/zakupochnyy-faktoring">Закупочный факторинг</a></li>
                                        <li><a href="/ru/nashi-uslugi/elektronnyy-faktoring">Электронный факторинг</a></li>
                                        <li><a href="/ru/nashi-uslugi/paketnyy-faktoring">Пакетный факторинг</a></li>
                                    </ul>
                                </li>

                                <li><a href="/ru/usloviya">Условия</a>

                                </li>

                                <li><a href="/ru/partnery">Партнеры</a>

                                </li>

                                <li><a href="/ru/kontakty">Контакты</a>

                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</div>

<main>

    <div class="slide_map">
        <div class="container white">
            <div class="row top_col">
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <div class="slider_text_top">
                        <h1>Расширяя возможности вашего бизнеса</h1>

                        <p>Компания <strong>Дженерал Факторинг</strong> специализируется на финансировании клиентов малого и среднего бизнеса, осуществляющих поставки с отсрочкой платежа. Наша компания является частью международного холдинга Mikro Kapital Group, ...
                        </p><div><a href="/ru/o-nas" class="btn_gri">Узнай больше</a></div>
                        <div class="red_explic">Профессиональное содействие экономическому развитию                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6">
                    <div class="map">
                        <img src="images/img/karta.png" alt="">
                    </div>
                    <div class="green_explic">Мы присутствуем в 8 странах мира                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container white text-center service_first">
        <div class="row">
            <div class="col-xs-12">
                <div class="title_service_first">
                    <h2>Наши услуги</h2>
                    <p>Мы являемся профессионалами рынка факторинговых услуг и поэтому предлагаем широкую линейку финансовых продуктов. Это позволяет индивидуально подобрать
                        подходящий продукт и удовлетворить самые разные потребности наших клиентов.</p>
                </div>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/regressnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Регрессный факторинг"></figure>
                        <span>Регрессный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/bezregressnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Безрегрессный факторинг"></figure>
                        <span>Безрегрессный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/konfidencialnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Конфиденциальный факторинг"></figure>
                        <span>Конфиденциальный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/zakupochnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Закупочный факторинг"></figure>
                        <span>Закупочный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/elektronnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Электронный факторинг"></figure>
                        <span>Электронный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 text-center col-sm-6 col-md-4">
                <a href="/ru/nashi-uslugi/paketnyy-faktoring">
                    <div class="item_serv">
                        <figure><img src="images/img/zamok.png" alt="Пакетный факторинг"></figure>
                        <span>Пакетный факторинг</span>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <div><a class="btn_green" href="/ru/nashi-uslugi">Подробнее</a></div>
            </div>
        </div>
    </div>

    <div class="container adv_first text-center advantage_first">
        <div class="row">
            <div class="col-xs-12">
                <h2>Наши преимущества</h2>
            </div>
            <div class="col-xs-12  line_bl  col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>ОТСУТСТВИЕ СКРЫТЫХ КОМИССИЙ</h3>
                    <p>Единая ставка комиссий на весь срок отсрочки, без увеличения % при задержке оплаты от дебитора.</p>
                </div>
            </div>
            <div class="col-xs-12  line_bl  col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>ТОЧНОСТЬ РАСЧЕТОВ</h3>
                    <div style="box-sizing: border-box;">Комиссии за факторинговое обслуживание начисляются за каждый день – с момента финансирования до момента оплаты накладной.</div>
                </div>
            </div>
            <div class="col-xs-12  line_bl  col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>ФИНАНСИРОВАНИЕ ПО РЕЕСТРАМ НАКЛАДНЫХ</h3>
                    <p>Накладные и счета-фактуры предоставляются в нашу компанию 1 раз в месяц.</p>
                </div>
            </div>
            <div class="col-xs-12  line_bl  col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>БЕСПЛАТНЫЙ ЭЛЕКТРОННЫЙ ДОКУМЕНТООБОРОТ</h3>
                    <p>Реестры на финансирование подписываются электронно-цифровой подписью, которую предоставляет и устанавливает наша компания бесплатно.</p>
                </div>
            </div>
            <div class="col-xs-12   col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>ЛИЧНЫЙ КАБИНЕТ </h3>
                    <div>Вы видите всю информацию по уступленным накладным в режиме on-line.</div>
                </div>
            </div>
            <div class="col-xs-12   col-sm-6 col-md-4">
                <div class="item_adv">
                    <h3>КОНФИДЕНЦИАЛЬНЫЙ ФАКТОРИНГ</h3>
                    <p>Мы умеем работать с самыми сложными дебиторами, даже с теми, кто не подписывает уведомление об уступке дебиторской задолженности (Дикси, Метро, Окей, МедиаМаркт, OBI и др.)</p>
                </div>
            </div>

            <div class="col-xs-12">
                <a href="/ru/o-nas" class="btn_white">Узнай больше</a>
            </div>

        </div>
    </div>


    <div class="container white text-center partner">
        <div class="row">
            <div class="col-xs-12">
                <h2>Партнеры</h2>
            </div>
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <!-- Set up your HTML -->
                <div id="partners">
                    <div class="partners-block">
                        <div class="vertical-wrap">
                            <div class="partner-box vertical-block vertical-middle balt-holc">
                                <a href="http://baltholz.ru" target="_blank">
                                    <img src="images/img/partner.png" class="img-responsive">
                                </a>
                            </div>
                            <div class="partner-box vertical-block vertical-middle bear">
                                <a href="http://bear-doors.ru" target="_blank">
                                    <img src="images/img/partner.png" class="img-responsive">
                                </a>
                            </div>
                            <div class="partner-box vertical-block vertical-middle drinkin">
                                <a href="http://gd-servis.ru" target="_blank">
                                    <img src="images/img/partner.png" class="img-responsive">
                                </a>
                            </div>
                            <div class="partner-box vertical-block vertical-middle edison">
                                <a href="http://edison-edison.ru" target="_blank">
                                    <img src="images/img/partner.png" class="img-responsive">
                                </a>
                            </div>
                            <div class="partner-box vertical-block vertical-middle geek">
                                <a href="https://vk.com/geek39" target="_blank">
                                    <img src="images/img/partner.png" class="img-responsive">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container top_footer">
        <div class="row-no-padding">
            <div class="col-xs-12 col-md-4">
                <h3>У ВАС ЕСТЬ ВОПРОСЫ?</h3>
                <p>Оставьте заявку - мы свяжемся с Вами</p>
            </div>
            <div class="col-xs-12 col-md-8">
                <form id="questionsForm" action="#" method="post" enctype="application/x-www-form-urlencoded" novalidate="true">
                    <input type="hidden" name="_csrf" value="bnFkSFk4d0EgOjR4PFpFICYeEAkyejk1JCsQcBpUFSUCPFBwBmkFdA==">
                    <input type="hidden" name="form" value="У ВАС ЕСТЬ ВОПРОСЫ?">
                    <div class="col-xs-12 col-md-12 no-padding">
                        <div class="form-group   col-xs-12 col-md-4 no-padding-left">
                            <input class="form-control" data-error="Это поле является обязательным" type="text" name="name" value="" placeholder="Ваше имя *" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-xs-12 col-md-4 no-padding-left">
                            <input class="form-control" data-error=" Это поле является обязательным" type="text" name="phone" value="" placeholder="Ваш номер телефона *" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-md-4 no-padding-left">
                            <input type="submit" value="Отправить" class="disabled">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-no-padding">
            <div class="bottom_footer">
                <div class="col-xs-12 col-md-4"><a href="/ru/"><img src="images/img/2.png" alt="General Factoring"></a>
                    <div class="facebook_share">

                    </div>
                    <small class="copyright desctop">© Дженерал Факторинг, 2017. Все права защищены.</small>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="menu_footer">
                        <ul>
                            <li><a href="/ru/dokumenty">Документы</a></li>
                            <li><a href="/ru/konfidencialnost">Конфиденциальность </a></li>
                            <li><a href="/ru/vakansii">Вакансии</a></li>
                        </ul>
                        <div class="new_msg mobile"><a href="">Отправить сообщение</a>
                            <a class="facebook_btn" href="#"><img src="images/img/10.png" alt="Facebook"></a>
                        </div>
                    </div>
                    <div class="text_footer">
                        <p>ООО «Дженерал Факторинг», ОГРН 1147746289162 ИНН 7705555607<br>
                            Юридический адрес: 115035, Россия, Москва, ул. Садовническая, д. 73, стр.1<br>
                            Адрес местонахождения: Россия, Москва, ул. Садовническая, д. 72, стр.2<br>
                            Тел.: +7 (499) 649 20 10 e-mail: info@test.ru</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="new_msg desctop"><a href="mailto: info@test.ru">Отправить сообщение</a>
                        <a class="facebook_btn" href="#"><img src="images/img/10.png" alt="Facebook"></a>
                    </div>

                    <small class="copyright mobile">© Дженерал Факторинг, 2017. Все права защищены.</small>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</footer>






</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
