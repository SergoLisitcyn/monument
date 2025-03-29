<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты компании - Promonument.ru';
$this->registerMetaTag(['name' => 'description','content' => 'Контактные данные - адрес: г.Калининград ул. Некрасова, д.18-24']);

?>
<section class="contacts">
    <div class="container">
        <div class="contacts__row section-row">
            <h1 class="main-info__title">Контакты</h1>
            <p class="contacts__postscript uni-postscript uni-postscript-margin uni-postscript--accent">
                Мы ответим на все интересующие вас вопросы.
            </p>
            <div class="contacts__links contacts-links">
                <div class="contacts-links__box connect-box connect-box--accent">
                    <div class="connect-box__item">
                        <div class="connect-box__icon">
                            <svg width="32.000000" height="32.017334" viewBox="0 0 32 32.0173" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Vector" d="M4.82 3.41C5.65 2.67 6.83 1.35 8.11 1.5C9.45 1.65 10.41 3.03 11.08 4.01C12.23 5.68 14.08 8.13 12.39 10.02C11.56 10.91 10.28 11.39 9.54 12.35C8.78 13.33 9.22 14.62 9.77 15.63C10.95 17.87 12.99 19.99 15.04 21.58C15.96 22.26 17.21 23.13 18.45 22.92C19.76 22.71 20.75 21.37 21.74 20.65C24.2 18.8 26.89 21.34 28.71 22.83C29.54 23.55 30.53 24.47 30.49 25.61C30.43 26.77 28.83 27.73 27.94 28.42C25.54 30.27 22.54 30.87 19.54 30.27C16.28 29.64 13.54 27.82 11.08 25.79C8.55 23.73 6.45 21.25 4.62 18.65C3.76 17.42 3.03 16.17 2.49 14.8C1.91 13.33 1.72 11.87 1.5 10.31C1.53 7.6 2.71 5.24 4.82 3.41Z" stroke="#011e54" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <a href="tel:+7 (909) 793-83-73" class="connect-box__link">+7 (909) 793-83-73</a>
                    </div>
                </div>
                <div class="contacts-links__box connect-box connect-box--accent">
                    <div class="connect-box__item">
                        <div class="connect-box__icon">
                            <svg width="33.857422" height="27.000000" viewBox="0 0 33.8574 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Vector" d="M4.07 4.07L13.68 11.12L13.68 11.12L16.92 13.5L20.17 11.12L29.78 4.07M1.5 6.98C1.5 5.06 1.5 4.1 1.87 3.37C2.2 2.72 2.72 2.2 3.37 1.87C4.1 1.5 5.06 1.5 6.98 1.5L26.87 1.5C28.79 1.5 29.75 1.5 30.48 1.87C31.12 2.2 31.65 2.72 31.98 3.37C32.35 4.1 32.35 5.06 32.35 6.98L32.35 20.02C32.35 21.93 32.35 22.89 31.98 23.62C31.65 24.27 31.12 24.79 30.48 25.12C29.75 25.5 28.79 25.5 26.87 25.5L6.98 25.5C5.06 25.5 4.1 25.5 3.37 25.12C2.72 24.79 2.2 24.27 1.87 23.62C1.5 22.89 1.5 21.93 1.5 20.01L1.5 6.98Z" stroke="#011e54" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                            </svg>
                        </div>
                        <a href="mailto:promonument@mail.ru" class="connect-box__link">promonument@mail.ru</a>
                    </div>
                </div>
                <div class="contacts-links__box connect-box connect-box--accent">
                    <div class="connect-box__item">
                        <div class="connect-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 36.767 48.001">
                                <g fill="#fff"><path d="M23.143 37.881c4.178-6.076 9.957-15.809 9.957-23.164a14.718 14.718 0 0 0-29.435 0c0 7.357 5.783 17.094 9.961 23.168C6.3 38.391 0 40.074 0 42.858 0 46.235 9.248 48 18.383 48s18.384-1.766 18.384-5.143c0-2.782-6.293-4.47-13.624-4.976zM5.121 14.717a13.264 13.264 0 0 1 26.527 0c0 9.492-10.665 23.852-13.264 27.209-2.598-3.357-13.263-17.713-13.263-27.209zm13.262 31.829c-10.334 0-16.929-2.184-16.929-3.688 0-1.309 5.03-3.123 13.155-3.57a91.912 91.912 0 0 0 3.209 4.273.729.729 0 0 0 1.129 0 93.58 93.58 0 0 0 3.213-4.277c8.125.447 13.151 2.266 13.151 3.574.002 1.504-6.593 3.688-16.928 3.688z" stroke="#011e54" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"></path>
                                    <path d="M26.383 14.848a8 8 0 1 0-8 8 8.009 8.009 0 0 0 8-8zm-14.545 0a6.546 6.546 0 1 1 6.545 6.545 6.555 6.555 0 0 1-6.545-6.545z" stroke="#011e54" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"></path>
                                </g>
                            </svg>
                        </div>
                        <span class="connect-box__link address-link">Калининград ул. Некрасова, д.18-24<br> (ориентир магазин Пятерочка)</span>
                    </div>
                </div>
                <div class="contacts-links__box connect-box connect-box--accent">
                    <div class="connect-box__item">
                        <div class="connect-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 32 32"><g  fill="#011e54" data-name="99-Time"><path d="M16 0a16 16 0 1 0 16 16A16 16 0 0 0 16 0zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14z"/><path d="M17 6h-2v10a1 1 0 0 0 .29.71l7 7 1.41-1.41-6.7-6.71z"/></g></svg>                                </div>
                        <span class="connect-box__link">Пн-Пт: 10:00 - 17:00 <br>Сб: 10:00 - 14:00<br>Вс: выходной</span>
                    </div>
                </div>
            </div>
            <div class="contacts__map contacts-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af41de4d62212f330825dace602eb5ce9d55f3a8a5772b63988e620f6cc5eb0cb&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>
