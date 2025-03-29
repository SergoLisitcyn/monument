<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="rphj6uxEZjhQQvgKdiyQ9LwPwVEGhHE7fUjRO8U6paM" />
    <meta name="yandex-verification" content="0793a1a4af5b42cd" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132536028-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-132536028-1');
    </script>
    <!-- Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52051779, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52051779" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?php if( Yii::$app->session->hasFlash('successReviews') ): ?>
    <div class="alert alert-success alert-dismissible alert-main-page" role="alert">
        <button type="button" class="close-main-page" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('successReviews'); ?>
    </div>
<?php endif;?>
<?php if( Yii::$app->session->hasFlash('errors') ): ?>
    <div class="alert alert-warning alert-dismissible alert-main-page-danger" role="alert">
        <button type="button" class="close-main-page" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('errors'); ?>
    </div>
<?php endif;?>
<div class="header">
    <div class="container">
        <div class="header__row">
            <a href="/" class="header__logo logo">
                <img src="/img/logo.svg" alt="Logo">
                <span>ИЗГОТОВЛЕНИЕ ПАМЯТНИКОВ В КАЛИНИНГРАДЕ</span>
                <a href="tel:+7 (909) 793-83-73" class="connect-box__link header-phone">+7 (909) 793-83-73</a>
            </a>
            <div class="header__info header-info">
                <div class="header-info__columns">
                    <div class="header-info__item header-info-one">
                        <div class="header-info__socials-row">
                            <div class="header-info__socials socials">
                                <div class="connect-box__item">
                                    <div class="connect-box__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  viewBox="0 0 36.767 48.001">
                                            <g fill="#fff"><path d="M23.143 37.881c4.178-6.076 9.957-15.809 9.957-23.164a14.718 14.718 0 0 0-29.435 0c0 7.357 5.783 17.094 9.961 23.168C6.3 38.391 0 40.074 0 42.858 0 46.235 9.248 48 18.383 48s18.384-1.766 18.384-5.143c0-2.782-6.293-4.47-13.624-4.976zM5.121 14.717a13.264 13.264 0 0 1 26.527 0c0 9.492-10.665 23.852-13.264 27.209-2.598-3.357-13.263-17.713-13.263-27.209zm13.262 31.829c-10.334 0-16.929-2.184-16.929-3.688 0-1.309 5.03-3.123 13.155-3.57a91.912 91.912 0 0 0 3.209 4.273.729.729 0 0 0 1.129 0 93.58 93.58 0 0 0 3.213-4.277c8.125.447 13.151 2.266 13.151 3.574.002 1.504-6.593 3.688-16.928 3.688z" stroke="white" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                                                <path d="M26.383 14.848a8 8 0 1 0-8 8 8.009 8.009 0 0 0 8-8zm-14.545 0a6.546 6.546 0 1 1 6.545 6.545 6.555 6.555 0 0 1-6.545-6.545z" stroke="white" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                                            </g></svg>
                                    </div>
                                    <span class="connect-box__link">Калининград ул. Некрасова, д.18-24<br>(ориентир магазин Пятерочка)</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="header-info__button callback-button">Заказать звонок</a>
                        <div class="header-info__connect connect-box">
                            <a href="tel:+7 (909) 793-83-73" target="_blank" class="connect-box__link">+7 (909) 793-83-73</a>
                        </div>
                    </div>
                    <div class="header-info__item header-info-two">
                        <div class="header-info__menu">
                            <ul class="header-info__list header-list">
                                <li class="header-list__item">
                                    <a href="/nashi-raboty" class="header-list__link">Наши работы</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/company" class="header-list__link">О компании</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/contacts" class="header-list__link">Контакты</a>
                                </li>
                            </ul>
                            <div class="header-info__connect connect-box">
                                <a href="tel:+7 (909) 793-83-73" class="connect-box__link">+7 (909) 793-83-73</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__button-menu header-button-menu">
                <div class="header-button-menu__icon"></div>
                <div class="header-button-menu__body"></div>
            </div>
        </div>
        <div class="callback">
            <div class="main-modal">
                <div class="main-modal__close">
                    <span></span>
                    <span></span>
                </div>
                <h2 class="main-modal__title">Закажите обратный звонок</h2>
                <h3 class="main-modal__subtitle">Оставьте контактные данные и мы свяжемся с вами в ближайшее время</h3>
                <form class="main-form"  action="/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf" value="P1o6jHmWuKP7uuzT9vPncGEwiHOkyn-HB5MrBZLO31wHDgLkF6_pwMvgoea7n4o8K2TwIuz4J-RBp0d2pP-IBQ==" />
                    <div class="main-form__box">
                        <div class="main-form__icon">
                            <svg width="31.746490" height="31.999756" viewBox="0 0 31.7465 31.9998" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M1 24.39L1 23.69C1 22.19 2.58 21.23 3.81 20.96C4.96 20.7 9.44 19.73 10.85 18.76L10.94 18.76L13.05 22.55L19.21 22.55L20.8 18.76L20.88 18.76C22.29 19.73 26.78 20.7 27.93 20.96C29.25 21.23 30.74 22.11 30.74 23.69L30.74 24.39L30.13 30.99C30.3 30.91 1.7 30.99 1.7 30.99L1 24.39Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M15.87 18.23C13.84 18.15 11.64 15.95 10.85 12.87L10.5 12.95C10.06 13.04 9.62 12.69 9.53 12.25L9.18 9.61C9.09 9.17 9.44 8.64 9.88 8.64L10.15 8.55C10.06 8.11 9.97 7.67 9.97 7.23L9.97 6.18C9.97 3.8 11.82 1.78 14.02 1.78L14.46 1.78C14.46 1.69 14.46 1.6 14.46 1.51C14.72 0.81 16.4 0.81 18.16 1.6C18.51 1.78 18.86 1.95 19.21 2.13C20.71 2.83 21.68 4.33 21.68 6.18L21.68 7.14C21.68 7.59 21.59 8.03 21.5 8.47L21.77 8.55C22.21 8.64 22.47 9.08 22.47 9.52L22.12 12.16C22.03 12.6 21.59 12.95 21.15 12.87L20.88 12.95C20.09 15.95 17.89 18.15 15.87 18.23Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M10.41 5.3C10.41 5.3 11.29 7.23 13.05 8.2C14.81 9.17 16.57 6.26 18.33 7.23C20.09 8.2 21.85 9.17 21.85 9.17" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M21.06 26.15L25.46 26.15" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <input class="main-form__elem" type="text" name="Feedback[name]" id="name" placeholder="Введите ваше имя" required  autocomplete="off"></input>
                    </div>
                    <div class="main-form__box">
                        <div class="main-form__icon">
                            <svg width="31.999878" height="32.017090" viewBox="0 0 31.9999 32.0171" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M4.43 2.98C5.29 2.21 6.51 0.85 7.83 1C9.22 1.16 10.21 2.58 10.91 3.6C12.1 5.33 14.01 7.86 12.26 9.81C11.4 10.74 10.08 11.23 9.32 12.22C8.53 13.24 8.99 14.57 9.55 15.62C10.77 17.94 12.89 20.13 15 21.77C15.96 22.48 17.25 23.38 18.54 23.16C19.89 22.94 20.92 21.55 21.94 20.81C24.49 18.9 27.26 21.52 29.14 23.07C30 23.81 31.03 24.77 30.99 25.94C30.93 27.15 29.28 28.13 28.35 28.84C25.87 30.76 22.77 31.38 19.66 30.76C16.29 30.11 13.45 28.23 10.91 26.13C8.3 23.99 6.12 21.43 4.23 18.74C3.34 17.47 2.58 16.18 2.02 14.75C1.42 13.24 1.23 11.73 1 10.12C1.03 7.31 2.25 4.87 4.43 2.98Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <input class="main-form__elem" type="tel"  name="Feedback[phone]" id="phone" placeholder="Введите ваш телефон" required  autocomplete="off"></input>
                    </div>
                    <div class="main-form__box">
                        <div class="main-form__icon main-form__icon--textarea">
                            <svg width="32.088226" height="32.000000" viewBox="0 0 32.0882 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M1 14.32C1 21.64 7.7 27.64 16 27.64C17.67 27.64 19.26 27.38 20.76 26.94C22.44 28.52 24.64 29.94 27.38 31L26.5 23.85C29.32 21.47 31.08 18.02 31.08 14.32C31 6.91 24.2 1 16 1C7.7 1 1 7 1 14.32Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M12.2 11.14C12.2 7.35 19.08 7.35 19.08 10.97C19.17 13.79 15.82 13.17 15.82 16.61" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M15.82 20.85C15.91 20.85 15.91 20.85 16 20.85" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <textarea class="main-form__elem" rows="6" name="Feedback[body]"  placeholder="Ваш вопрос" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="main-form__button button">Отправить заявку</button>
                </form>
            </div>
            <div class="main-modal__overlay"></div>
        </div>
    </div>
</div>

<main role="main" class="main">
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__columns">
                <div class="footer__col">
                    <a href="/" class="footer__logo logo">
                        <img src="/img/logo.svg" alt="Logo">
                    </a>
                    <p class="footer__descr">Изготавливаем памятники, оградки и другие ритуальные изделия в Калининграде и в Калининградской области.
                        Гарантируем высокое качество, честные цены и индивидуальный подход к каждому заказу.
                        Предоставляем скидки пенсионерам и работаем с льготными категориями граждан.
                        Наша цель – помочь вам создать достойный и долговечный мемориал.</p>
                </div>
                <div class="footer__col">
                    <div class="footer__connect footer-connect">
                        <div class="footer-connect__title">Всегда на связи</div>
                        <div class="footer-connect__connect-box connect-box">
                            <div class="connect-box__item">
                                <div class="connect-box__icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.08516C1.02203 5.21053 1.83698 3.58311 3.29069 2.3265C3.86336 1.81149 4.67832 0.905078 5.55935 1.00808C6.48444 1.11108 7.14522 2.05869 7.60776 2.7385C8.40069 3.89212 9.67819 5.58134 8.51082 6.87916C7.93815 7.49716 7.05711 7.82677 6.55052 8.48598C6.0219 9.16579 6.33026 10.0516 6.7047 10.752C7.51965 12.297 8.92931 13.7596 10.339 14.8515C10.9777 15.3253 11.8367 15.9227 12.6957 15.7785C13.5988 15.6343 14.2816 14.7073 14.9644 14.2129C16.6604 12.9356 18.5106 14.6867 19.766 15.7167C20.3387 16.2111 21.0215 16.8497 20.9995 17.6325C20.9554 18.4359 19.8541 19.0951 19.2374 19.5689C17.5855 20.8461 15.515 21.2581 13.4446 20.8461C11.198 20.4135 9.30375 19.1569 7.60776 17.7561C5.86772 16.3347 4.41401 14.6249 3.15853 12.8326C2.56384 11.988 2.05724 11.1228 1.6828 10.1752C1.28634 9.16579 1.15418 8.15637 1 7.08516ZM1 7.08516C1.02203 6.05514 1.0881 7.64137 1 7.08516Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <a href="tel:+79097938373" class="connect-box__link">+7 (909) 793-83-73</a>
                            </div>
                        </div>
                        <div class="footer-connect__connect-box connect-box">
                            <div class="connect-box__item">
                                <div class="connect-box__icon">
                                    <svg width="22" height="22" viewBox="0 0 33.8574 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs/>
                                        <path id="Vector" d="M4.07 4.07L13.68 11.12L13.68 11.12L16.92 13.5L20.17 11.12L29.78 4.07M1.5 6.98C1.5 5.06 1.5 4.1 1.87 3.37C2.2 2.72 2.72 2.2 3.37 1.87C4.1 1.5 5.06 1.5 6.98 1.5L26.87 1.5C28.79 1.5 29.75 1.5 30.48 1.87C31.12 2.2 31.65 2.72 31.98 3.37C32.35 4.1 32.35 5.06 32.35 6.98L32.35 20.02C32.35 21.93 32.35 22.89 31.98 23.62C31.65 24.27 31.12 24.79 30.48 25.12C29.75 25.5 28.79 25.5 26.87 25.5L6.98 25.5C5.06 25.5 4.1 25.5 3.37 25.12C2.72 24.79 2.2 24.27 1.87 23.62C1.5 22.89 1.5 21.93 1.5 20.01L1.5 6.98Z" stroke="white" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                                    </svg>
                                </div>
                                <a class="connect-box__link" href="mailto:promonument@mail.ru">promonument@mail.ru</a>
                            </div>
                        </div>
                        <div class="footer-connect__connect-box connect-box">
                            <div class="connect-box__item">
                                <div class="connect-box__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  viewBox="0 0 36.767 48.001">
                                        <g fill="#fff"><path d="M23.143 37.881c4.178-6.076 9.957-15.809 9.957-23.164a14.718 14.718 0 0 0-29.435 0c0 7.357 5.783 17.094 9.961 23.168C6.3 38.391 0 40.074 0 42.858 0 46.235 9.248 48 18.383 48s18.384-1.766 18.384-5.143c0-2.782-6.293-4.47-13.624-4.976zM5.121 14.717a13.264 13.264 0 0 1 26.527 0c0 9.492-10.665 23.852-13.264 27.209-2.598-3.357-13.263-17.713-13.263-27.209zm13.262 31.829c-10.334 0-16.929-2.184-16.929-3.688 0-1.309 5.03-3.123 13.155-3.57a91.912 91.912 0 0 0 3.209 4.273.729.729 0 0 0 1.129 0 93.58 93.58 0 0 0 3.213-4.277c8.125.447 13.151 2.266 13.151 3.574.002 1.504-6.593 3.688-16.928 3.688z" stroke="white" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                                            <path d="M26.383 14.848a8 8 0 1 0-8 8 8.009 8.009 0 0 0 8-8zm-14.545 0a6.546 6.546 0 1 1 6.545 6.545 6.555 6.555 0 0 1-6.545-6.545z" stroke="white" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                                        </g></svg>
                                </div>
                                <span class="connect-box__link">г. Калининград <br>ул. Некрасова, д.18-24<br>(ориентир магазин Пятерочка)</span>
                            </div>
                        </div>
                        <div class="footer-connect__connect-box connect-box">
                            <div class="connect-box__item">
                                <div class="connect-box__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><g  fill="#fff" data-name="99-Time"><path d="M16 0a16 16 0 1 0 16 16A16 16 0 0 0 16 0zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14z"/><path d="M17 6h-2v10a1 1 0 0 0 .29.71l7 7 1.41-1.41-6.7-6.71z"/></g></svg>                                </div>
                                <span class="connect-box__link">Пн-Пт: 10:00 - 17:00 <br>Сб: 10:00 - 14:00<br>Вс: выходной</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer__info footer-info">
                        <div class="footer-info__about">
                            <div class="footer-info__title">Главная</div>
                            <ul class="footer-info__list footer-info-list">
                                <li class="footer-info-list__item">
                                    <a href="/company" class="footer-info-list__link">О компании</a>
                                </li>
                                <li class="footer-info-list__item">
                                    <a href="/contacts" class="footer-info-list__link">Контакты</a>
                                </li>
<!--                                <li class="footer-info-list__item">-->
<!--                                    <a href="/privacy" class="footer-info-list__link">Политика конфиденциальности</a>-->
<!--                                </li>-->
                            </ul>
                        </div>
                        <div class="footer-info__box">
                            <div class="footer-info__title">Каталог</div>
                            <div class="footer-info__column">
                                <ul class="footer-info__list footer-info-list">
                                    <li class="footer-info-list__item">
                                        <a href="/nashi-raboty" class="footer-info-list__link">Наши работы</a>
                                    </li>
                                    <li class="footer-info-list__item">
                                        <a href="/ogradki-stoliki-vazy" class="footer-info-list__link">Оградки, Столики и Вазы</a>
                                    </li>
                                    <li class="footer-info-list__item">
                                        <a href="/pamyatniki" class="footer-info-list__link">Памятники</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
