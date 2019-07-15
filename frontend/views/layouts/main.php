<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
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
    <?php $this->head();
    echo $this->registerJsFile('@web/js/script.js');

    ?>
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<body>
<div id="p-index" class="wr wr_all">
    <div class="wr wr1">
        <div class="block clearfix">
            <a href="/" class="icon logo icon-logo-header"></a>
            <ul class="clearfix">
                <li>
                    <a href="https://finsr.ru/about">О компании</a>
                </li>
                <li>
                    <a href="https://finsr.ru/news">Статьи</a>
                </li>
                <li>
                    <a href="https://finsr.ru/partners">Партнёрам и агентам</a>
                </li>
                <li>
                    <a href="https://finsr.ru/contacts">Контакты</a>
                </li>
            </ul>
            <div class="phone-block">
                <a href="tel:84959025556" class="phone">+7 (495) 902-55-56</a>
                <a href="#" data-title="Закажите обратный звонок" data-fields="name,phone,time" data-goal="lead" data-btn="Заказать звонок" data-subtext="Мы позвоним вам в ближайшее время" data-additional="Обратный звонок" class="open-callback">Перезвоните мне</a>
                <a href="https://api.whatsapp.com/send?phone=79036609340"><img width="32" src="../images/img/WhatsApp_small.png" border="none"></a>
            </div>
        </div>
    </div>
    <div class="wr wr2">
        <div class="block clearfix">
            <ul>
                <li class="wtf-holder">
                    <a href="https://finsr.ru/ipoteka">
                        <div class="link-title">Ипотека</div>
                        <div class="link-subtitle">от 8,50% за 3 дня</div>
                    </a>
                    <div class="wtf-submenu">
                        <a href="https://finsr.ru/ipoteka/bez-spravok">Без справок</a>
                        <a href="https://finsr.ru/ipoteka/kvartiry-v-novostroykah">В новостройке</a>
                        <a href="https://finsr.ru/ipoteka/pod-zalog">Под залог</a>
                        <a href="https://finsr.ru/ipoteka/pensioneram">Пенсионерам</a>
                        <a href="https://finsr.ru/ipoteka/na-pokupku-doma">На покупку дома</a>
                        <a href="https://finsr.ru/ipoteka/na-komnatu">На комнату</a>
                        <a href="https://finsr.ru/ipoteka/na-zemlyu-i-stroitelstvo-doma">На землю</a>
                        <a href="https://finsr.ru/ipoteka/bez-pervonachalnogo-vznosa">Без взноса</a>
                        <a href="https://finsr.ru/ipoteka/dlya-molodyh-specialistov">Молодым</a>
                        <a href="https://finsr.ru/ipoteka/gospodderzhka">Господдержка</a>
                        <a href="https://finsr.ru/ipoteka/s-materinskim-kapitalom">С материнским капиталом</a>

                    </div>
                </li>
                <li class="wtf-holder">
                    <a href="https://finsr.ru/kredit-pod-zalog">
                        <div class="link-title">Кредит под залог</div>
                        <div class="link-subtitle">от 10,5% за 3 дня</div>
                    </a>
                    <div class="wtf-submenu">
                        <a href="https://finsr.ru/kredit-pod-zalog/nedvizhimosti">Недвижимости</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/kvartiry">Квартиры</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/komnaty">Комнаты</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/chastnogo-doma">Частного дома</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/zemelnogo-uchastka">Земельного участка</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/avto">Автомобиля</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/nalichnymi">Наличными</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/vzyat-v-banke">В банке</a>
                        <a href="https://finsr.ru/kredit-pod-zalog/chastnogo-investora">Частного инвестора</a>
                    </div>
                </li>
                <li>
                    <a href="https://finsr.ru/potrebitelskiy-kredit">
                        <div class="link-title">Потребительский кредит</div>
                        <div class="link-subtitle">от 12,5% за 2 дня</div>
                    </a>
                </li>
                <li class="wtf-holder">
                    <a href="https://finsr.ru/kredit-dlya-biznesa">
                        <div class="link-title">Бизнес-кредит</div>
                        <div class="link-subtitle">от 12% за 2 недели</div>
                    </a>
                    <div class="wtf-submenu">
                        <a href="https://finsr.ru/kredit-dlya-biznesa/dlya-ip">Для ИП</a>
                        <a href="https://finsr.ru/kredit-dlya-biznesa/na-pokupku-gotovogo-biznesa">На покупку готового</a>
                        <a href="https://finsr.ru/kredit-dlya-biznesa/na-razvitie-malogo">На развитие</a>
                        <a href="https://finsr.ru/kredit-dlya-biznesa/na-otkrytie-malogo">На открытие</a>
                        <a href="https://finsr.ru/kredit-dlya-biznesa/malogo">Для малого бизнеса</a>
                        <a href="https://finsr.ru/kredit-dlya-biznesa/bez-zaloga">Без залога</a>
                    </div>
                </li>
                <li class="wtf-holder">
                    <a href="https://finsr.ru/vzyat-kredit">
                        <div class="link-title">Взять кредит</div>
                        <div class="link-subtitle">от 12% за 2 недели</div>
                    </a>
                    <div class="wtf-submenu">
                        <a href="https://finsr.ru/vzyat-kredit/do-250000">До 250 000 руб.</a>
                        <a href="https://finsr.ru/vzyat-kredit/do-300000">До 300 000 руб.</a>
                        <a href="https://finsr.ru/vzyat-kredit/do-500000">До 500 000 руб</a>
                        <a href="https://finsr.ru/vzyat-kredit/3000000">На 3000000 рублей</a>
                        <a href="https://finsr.ru/vzyat-kredit/po-pasportu">По паспорту</a>
                        <a href="https://finsr.ru/vzyat-kredit/s-minimalnoy-procentnoy-stavkoy">С низкой процентной ставкой</a>
                        <a href="https://finsr.ru/vzyat-kredit/pod-nizkiy-procent">Под маленький процент</a>
                        <a href="https://finsr.ru/pomoshh-v-poluchenii-kredita">Помощь в получении кредита</a>
                        <a href="https://finsr.ru/refinansirovanie">Рефинансирование</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-title="1 минута отделяет вас от лучших кредитных предложений — просто заполните заявку" data-subtitle="Эксперт позвонит и сделает индивидуальное предложение" data-btn="Отправить заявку" data-subtext="Вам перезвонит специалист по кредитованию через 5 минут." class="open-calculator">
                        <div class="icon icon-request"></div>
                        <div class="link-title bordered">Заявка на кредит</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>





    <div class="wr wr3">
        <div class="block">
            <div class="title"><br><br><h1>Кредитный брокер</h1></div>
            <div class="subtitle">85% наших клиентов получают деньги на лучших условиях за 3 дня</div>
            <a href="#wr4" class="btn btn-default open-calculator">Заявка на кредит</a><br>
            <ul class="clearfix">
                <li>
                    <div class="icon icon-percent"></div>
                    <div class="li-text">Ставка до 6% ниже, чем при прямом обращении в банк</div>
                </li>
                <li>
                    <div class="icon icon-arrow-top"></div>
                    <div class="li-text">Уникальная технология, повышающая в 3 раза вероятность одобрения</div>
                </li>
                <li>
                    <div class="icon icon-handshake"></div>
                    <div class="li-text">Прямые связи <br> с руководством банков</div>
                </li>
            </ul>
        </div>
    </div>
    <div id="wr4" class="wr wr4"><!--noindex-->
        <div class="block">
            <div class="title">Мы не отказываем своим клиентам</div>
            <div class="info clearfix">
                <div class="text">
                    <strong>67%</strong> людей получают отказы в банках без&nbsp;объяснения причин. <strong>80%</strong> заёмщиков получают кредиты на менее выгодных условиях,
                    чем могли бы.
                </div>
                <div class="subtitle">
                    С 2010 года абсолютному большинству наших клиентов банки выдали кредиты на лучших условиях.


                </div>
            </div>
        </div>
    </div><!--/noindex-->
    <div class="wr wr10"><!--noindex-->
        <div class="block">
            <div class="title">Условия</div>
            <div class="subtitle">которые мы предлагаем нашим клиентам</div>
            <a href="https://finsr.ru/ipoteka" class="item">
                <div class="item-title">Ипотека</div>
                <div class="item-info clearfix">
                    <div class="item-left">
                        <div class="item-name">ставка</div>
                        <div class="item-text">от 8,5%</div>
                    </div>
                    <div class="item-right">
                        <div class="item-name">Одобрение</div>
                        <div class="item-text">3 дня</div>
                    </div>
                </div>
                <div class="btn btn-default">Узнать подробнее</div>
            </a>
            <a href="https://finsr.ru/kredit-pod-zalog" class="item">
                <div class="item-title">Кредит под залог <br>недвижимости</div>
                <div class="item-info clearfix">
                    <div class="item-left">
                        <div class="item-name">ставка</div>
                        <div class="item-text">от 10,5%</div>
                    </div>
                    <div class="item-right">
                        <div class="item-name">Одобрение</div>
                        <div class="item-text">3 дня</div>
                    </div>
                </div>
                <div class="btn btn-default">Узнать подробнее</div>
            </a>
            <a href="https://finsr.ru/potrebitelskiy-kredit" class="item">
                <div class="item-title">Потребительский кредит</div>
                <div class="item-info clearfix">
                    <div class="item-left">
                        <div class="item-name">ставка</div>
                        <div class="item-text">от 12,5%</div>
                    </div>
                    <div class="item-right">
                        <div class="item-name">Одобрение</div>
                        <div class="item-text">2 дня</div>
                    </div>
                </div>
                <div class="btn btn-default">Узнать подробнее</div>
            </a>
            <a href="https://finsr.ru/kredit-dlya-biznesa" class="item">
                <div class="item-title">Бизнес-кредит</div>
                <div class="item-info clearfix">
                    <div class="item-left">
                        <div class="item-name">ставка</div>
                        <div class="item-text">от 12%</div>
                    </div>
                    <div class="item-right">
                        <div class="item-name">Одобрение</div>
                        <div class="item-text">2 недели</div>
                    </div>
                </div>
                <div class="btn btn-default">Узнать подробнее</div>
            </a>
        </div><!--/noindex-->
    </div>
    <div class="wr wr6 wrtext" style="border-top:1px solid #e5e5e5;">
        <div class="block">
            <p>Компания «Финансовый сервис» — известный кредитный брокер с крупнейшей партнерской сетью и собственной стратегией, благодаря которой практически все клиенты получают необходимые займы на выгодных условиях. Вы сможете взять кредит через кредитного брокера в Москве для финансирования бизнеса, на потребительские нужды, приобретение недвижимости (ипотека) или машины, с залогом или без.</p>

            <h2>В чем суть услуг кредитного брокера</h2>

            <p>Оформление ссуды в банке — достаточно сложная задача, которая всегда сопряжена с определенными трудностями. Заемщик должен адекватно оценить условия кредитования, сопоставить их с собственными возможностями, подготовить большой пакет документов.</p>

            <p>Но даже если вы все сделаете правильно, нет гарантии, что банк выдаст нужную сумму. Обратившись за помощью к кредитному брокеру с плохой кредитной историей или другими проблемами, вы обязательно получите заем.</p>

            <h2>В чем заключается помощь кредитного брокера</h2>

            <p>Основная задача финансового посредника — выбор банка и программы в соответствии с требованиями, возможностями и материальным положением своего клиента. Однако для кредитного брокера помощь в получении кредитов — комплексная работа, которая не ограничивается этими двумя опциями. Услуги включают в себя:</p>
            <ul>
                <li>работу с документами (анализ, проверка);</li>
                <li>оценку финансовых возможностей потенциального заемщика, анализ кредитной истории, уровня платежеспособности, других нюансов;</li>
                <li>выбор наиболее подходящей для конкретного клиента программы кредитования;</li>
                <li>проведение подробных расчетов, анализ схемы погашения займа;</li>
                <li>разъяснительную работу по поводу особенностей кредитования в той или иной финансовой организации;</li>
                <li>подготовку пакета необходимых для оформления займа документов, составление заявки;</li>
                <li>передачу бумаг в банк;</li>
                <li>участие в заключении и подписании договора.</li></ul>

            <p>Финансовый брокер помощь в получении кредита оказывает за небольшой процент от суммы сделки, однако эти деньги клиент платит за гарантированное получение займа с оптимальной схемой погашения и под выгодные проценты.</p>

            <h2>Преимущества профессиональной помощи в получении кредита с подготовкой документов</h2>

            <p>«Финансовый сервис» работает с огромным количеством банков и кредитных организаций, что позволяет специалистам компании выбирать лучшие продукты для каждого клиента. Сотрудники ежедневно проводят мониторинг рынка по всем видам кредитования, анализируют и сравнивают предлагаемые программы, а также требования к заемщикам.</p>

            <p>Обращаясь к кредитному брокеру за помощью в получении ссуды, заказчик услуги может:</p>
            <ol>
                <li>Сэкономить приличную сумму на банковских процентах, что особенно ощутимо, если дело касается крупных и долгосрочных кредитов.</li>
                <li>Избежать каких-либо неточностей при оформлении бумаг и составлении заявления. На первый взгляд формальные и незначительные ошибки часто являются причиной отказа в ссуде.</li></ol>

            <p>Таким образом, профессиональная помощь в получении кредитов — 100 % гарантии, что клиент получит нужную сумму на свой счет или наличными.</p>

            <p>К объективным преимуществам сотрудничества с финансовым посредником также относятся следующие факторы:</p>
            <ol>
                <li>Оперативность. При необходимости получить с помощью кредитного брокера срочный заем можно очень быстро.</li>
                <li>Профессиональные консультации по любым вопросам.</li>
                <li>Сопровождение клиента от момента обращения в компанию до выдачи ему денег.</li>
                <li>Минимальный риск отказа даже для людей с темными пятнами в кредитной истории.</li>
                <li>Гарантия самых выгодных финансовых программ. У вас идеальная кредитная история и вы сами можете пойти в любой банк и получить ссуду? Прекрасно! Гарантируем, что найдем для вас лучшие условия. Если мы не справимся, вы не потратите ни рубля.</li></ol>

            <p>Если вас интересует надежный кредитный брокер с безупречной репутацией, обращайтесь в нашу компанию. Оформить заявку, задать вопросы или уточнить детали сотрудничества можно, посетив наш офис, онлайн через сервис обратной связи на сайте или по номеру контактного телефона. Будем рады помочь вам!</p>
        </div>
    </div>
    <div class="wr wr7"><!--noindex-->
        <div class="block">
            <div class="form">
                <div class="form-title">Оставьте заявку на кредит по низкой <br> ставке прямо сейчас</div>
                <a href="#" data-title="1 минута отделяет вас от лучших кредитных предложений — просто заполните заявку" data-subtitle="Эксперт позвонит и сделает индивидуальное предложение" data-btn="Отправить заявку" data-subtext="Вам перезвонит специалист по кредитованию через 5 минут." class="btn btn-default open-calculator">Оставить заявку</a>
            </div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr6 wrtext">
        <div class="block">
            <h2>Алгоритм работы кредитного брокера</h2>
            <p>Кредитный брокер помощь в получении кредита оказывает в несколько этапов:</p>
            <ul>
                <li>анализ документов и формирование кредитного досье;</li>
                <li>оценка финансовых возможностей заемщика;</li>
                <li>анализ требований и пожеланий клиента;</li>
                <li>выбор оптимальной программы для каждого конкретного случая;</li>
                <li>подготовка пакета документов;</li>
                <li>передача документов и заявления в выбранный банк;</li>
                <li>контроль и сопровождение по всем этапам выдачи займа.</li>
            </ul>
            <p>Чтобы взять кредит через кредитного брокера в Москве, вам нужно связаться с нами через сайт, высказать свои требования и подписать договор на предоставление консалтинговых услуг. Всю остальную работу сотрудники компании берут на себя. Важный нюанс: клиент оплачивает услуги после получения кредита.</p>
            <p>Наша компания — самый надежный кредитный брокер в Москве. Помощь в получении кредита с выгодными условиями — это гарантия вашей финансовой стабильности. Чтобы проконсультироваться, узнать дополнительную информацию об услугах и нюансах сотрудничества, а также оформить заявку, свяжитесь с нами по телефону или через сервис обмена сообщениями.</p>
        </div>
    </div>
    <div class="wr wr6" style="border-top:1px solid #e5e5e5;"><!--noindex-->
        <div class="block">
            <div class="text">
                <p>
                    Чтобы добиться лучших условий кредитования для своих клиентов, мы разработали технологию
                    3Q-андеррайтинга на основе процедур ведущих российских банков.
                </p>
                <p>
                    Это позволяет нам посмотреть на кредитную заявку глазами банка, прежде чем она попадёт на&nbsp;стол банковского
                    сотрудника, что в 3 раза повышает вероятность одобрения. С помощью данной технологии мы гарантированно выявляем
                    и исправляем все слабые стороны заявки и&nbsp;добиваемся самой низкой ставки по кредиту в&nbsp;каждом конкретном случае.
                </p>
                <p>Мы уверены в этом, поэтому все расходы по&nbsp;одобрению кредита берём на себя.</p>
            </div>
            <div class="subtitle">Если решение вас не устроит, вы не&nbsp;потеряете ни копейки.</div>
            <div class="info">
                <div class="info-number">85%</div>
                <div class="info-title">Наших клиентов</div>
                <div class="info-text">получают кредиты на лучших из&nbsp;имеющихся на рынке условий</div>
            </div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr5"><!--noindex-->
        <div class="block">
            <div class="title">Гарантируем низкую ставку</div>
            <div class="subtitle">
                Мы — единственные в России, кто предлагает <br> совершенно новый подход к кредитованию, основанный на
                технологии 3Q-андеррайтинга.
            </div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr13"><!--noindex-->
        <div class="block">
            <div class="title">С нами получить кредит просто</div>
            <div class="subtitle">Не тратьте время на очереди в банках</div>
            <div class="items">
                <div class="item clearfix">
                    <div class="item-info">
                        <div class="item-step">Сначала</div>
                        <div class="item-title">Отправляете заявку</div>
                        <div class="item-text">В течение дня мы рассмотрим вашу заявку <br> и предложим предварительные условия <br> получения кредита</div>
                        <a href="#" data-title="1 минута отделяет вас от лучших кредитных предложений — просто заполните заявку" data-subtitle="Эксперт позвонит и сделает индивидуальное предложение" data-btn="Отправить заявку" data-result="Совсем скоро мы вам позвоним." data-subtext="Вам перезвонит специалист по кредитованию через 5 минут." class="btn btn-bordered open-calculator">Оставить заявку</a>
                    </div>
                    <div class="item-img"></div>
                </div>
                <div class="item clearfix">
                    <div class="item-info">
                        <div class="item-step">Потом</div>
                        <div class="item-title">Предоставляете документы</div>
                        <div class="item-text">Вы можете подъехать в наш офис <br> или прислать документы по электронной почте</div>
                    </div>
                    <div class="item-img"></div>
                </div>
                <div class="item clearfix">
                    <div class="item-info">
                        <div class="item-step">Далее</div>
                        <div class="item-title">Получаете карту банков</div>
                        <div class="item-text">
                            После полной проверки по технологии <br> 3Q-андеррайтинга мы формируем карту <br> банков, содержащую варианты
                            кредитования, <br> и согласовываем её с вами
                        </div>
                    </div>
                    <div class="item-img"></div>
                </div>
                <div class="item clearfix">
                    <div class="item-info">
                        <div class="item-step">После всего</div>
                        <div class="item-title">Завершаем сделку</div>
                        <div class="item-text">
                            Мы бесплатно проверяем юридическую <br> чистоту недвижимости, готовим все <br> необходимые документы, обеспечиваем <br>
                            юридическую поддержку на сделке
                        </div>
                    </div>
                    <div class="item-img"></div>
                </div>
            </div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr12"><!--noindex-->
        <div class="block">
            <div class="title">Наши гарантии</div>
            <div class="subtitle">Каждый пункт наших обязательств прописан в договоре</div>
            <div class="clearfix">
                <div class="left">
                    <div id="sec1" class="item">
                        <img src="../images/img/wr12/1.jpg" alt="Оплата за результат" title="Помощь в кредите с гарантией результата">
                        <div class="item-step">1</div>
                        <div class="item-title">Оплата за результат</div>
                        <div class="item-text">Если вас не устроят условия одобренного кредита, вы не заплатите нам ни рубля</div>
                    </div>
                    <div id="sec2" class="item">
                        <img src="../images/img/wr12/2.jpg" alt="Ежедневная поддержка" title="Предоставляем персонального менеджера и круглосуточную поддержку">
                        <div class="item-step">2</div>
                        <div class="item-title">Ежедневная <br> информационная поддержка</div>
                        <div class="item-text">Вам выделяется персональный менеджер, который лично отвечает за решение вашего вопроса в режиме 24/7</div>
                    </div>
                    <div id="sec3" class="item">
                        <img src="../images/img/wr12/3.jpg" alt="Конфиденциальность" title="Данные, полученные ООО Финансовый сервис не передаются третьим лицам">
                        <div class="item-step">3</div>
                        <div class="item-title">Конфиденциальность</div>
                        <div class="item-text">
                            Все документы используются с вашего согласия исключительно для получения одобрения по кредиту,
                            хранятся <br> по всем правилам и не передаются <br> третьим лицам
                        </div>
                    </div>
                    <div id="sec4" class="item bordered">
                        <img src="../images/img/wr12/4.jpg" alt="Консультации в течение года" titile="Бесплатные консультации в течение года после оформления кредита">
                        <div class="item-step">4</div>
                        <div class="item-title">Консультации в течение года</div>
                        <div class="item-text">Если необходимо, вы будете получать бесплатные консультации в течение <br> 12 месяцев после оформления кредита</div>
                    </div>
                </div>
                <div data-title="Получите индивидуальный договор" data-subtitle="Укажите контактные данные — мы перезвоним <br> вам для уточнения пожеланий по продукту <br> и пришлём образец договора в течение 30 минут" data-fields="name,phone,email" data-goal="lead" data-btn="Получить образец" data-result="Вам перезвонит специалист для уточнения пожеланий по продукту и пришлём образец договора в течение 30 минут" data-subtext="Мы отправим индивидуальный договор <br> на указанный email" data-additional="Получить индивидуальный договор" class="right open-callback">
                    <div id="navbar" class="contract affix-top">
                        <ul class="nav">
                            <li>
                                <a href="#sec1"></a>
                            </li>
                            <li>
                                <a href="#sec2"></a>
                            </li>
                            <li>
                                <a href="#sec3"></a>
                            </li>
                            <li>
                                <a href="#sec4"></a>
                            </li>
                        </ul>
                        <div class="contract-img"></div>
                        <div class="btn btn-bordered">Получить договор</div>
                        <div class="contract-type">.docx, 20 КБ</div>
                    </div>
                </div>
            </div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr11"><!--noindex-->
        <div class="block">
            <div class="title">Получите бесплатную <br> консультацию нашего эксперта</div>
            <div class="line"></div>
            <div class="subtitle">Укажите контактные данные. <br> Через 30 минут с вами свяжется специалист <br> по кредитованию и ответит на ваш вопрос</div>
            <form action="" method="post" data-result="Вам перезвонит специалист по кредитованию в течение 30 минут." class="order-form">
                <div class="btn-group clearfix">
                    <input type="text" name="name" placeholder="Введите ваше имя" class="form-control">
                    <input type="text" name="phone" placeholder="+7 (___) ___-__-__" class="form-control">
                </div>
                <button type="submit" class="btn btn-default" onclick="ym(53632873, 'reachGoal', 'OPENFORM');">Получить консультацию</button>
                <input type="hidden" name="goal" value="lead">
                <input type="hidden" name="additional" value="Получить консультацию">
            </form>
        </div><!--/noindex-->
    </div>
    <div class="wr wr9"><!--noindex-->
        <div class="block">
            <div class="bank-gallery">
                <div class="gallery-title">С нами работают 120 банков</div>
                <a href="#" class="controls left" style="display: block;">
                    <div class="icon icon-arrow-left"></div>
                </a>
                <a href="#" class="controls right" style="display: block;">
                    <div class="icon icon-arrow-right"></div>
                </a>
                <div class="gallery">
                    <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 840px; height: 72px; margin: 0px; overflow: hidden;"><div class="items clearfix" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: -70px; margin: 0px; width: 14000px; height: 72px;">
                            <div class="item">
                                <img src="../images/img/banks/1.png" alt="Сбербанк" title="Логотип Сбербанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/4.png" alt="Банк Открытие" title="Логотип Банка Открытие">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/5.png" alt="Московский Индустриальный банк" title="Логотип Московского Индустриального банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/6.png" alt="Промсвязьбанк" title="Логотип Промсвязьбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/7.png" alt="Райффайзенбанк" title="Логотип Райффайзенбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/8.png" alt="Ренессанс Кредит" title="Логотип Ренессанс Кредит">
                            </div>
                            <div class="item" style="margin-right: 0px;">
                                <img src="../images/img/banks/9.png" alt="Росбанк" title="Логотип Росбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/10.png" alt="Россельхозбанк" title="Логотип Россельхозбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/11.png" alt="Tinkoff" title="Логотип Tinkoff">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/12.png" alt="Абсолют Банк" title="Логотип Абсолют Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/14.png" alt="АК БАРС банк" title="Логотип АК БАРС банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/17.png" alt="Возрождение банк" title="Логотип банка Возрождение">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/18.png" alt="Глобэкс Банк" title="Логотип Глобэкс Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/19.png" alt="Банк жилищного финансирования" title="Логотип Банка жилищного финансирования">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/20.png" alt="банк Зенит" title="Логотип банка Зенит">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/21.png" alt="Банк ИТБ" title="Логотип Банка ИТБ">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/22.png" alt="Банк Санкт-Петербург" title="Логотип Банка Санкт-Петербург">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/23.png" alt="Банк торгового финансирования" title="Логотип Банка торгового финансирования">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/25.png" alt="Газпромбанк" title="Логотип Газпромбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/27.png" alt="Гранд Инвест Банк" title="Логотип Гранд Инвест Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/28.png" alt="ДельтаКредит" title="Логотип ДельтаКредит банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/30.png" alt="Банк Союз" title="Логотип Банка Союз">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/31.png" alt="Московское Ипотечное Агентство" title="Логотип МИА">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/32.png" alt="ЛОКО БАНК" title="Логотип ЛОКО Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/33.png" alt="МДМ банк" title="Логотип банка МДМ">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/34.png" alt="Металлинвестбанк" title="Логотип Металлинвестбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/35.png" alt="Московский Кредитный Банк" title="Логотип Московского Кредитного Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/36.png" alt="МТС банк" title="Логотип МТС банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/37.png" alt="Нордеа Банк" title="Логотип Нордеа Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/38.png" alt="ОТП Банк" title="Логотип ОТП Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/39.png" alt="Энерготрансбанк" title="Логотип Энерготрансбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/40.png" alt="Банк Развитие-Столица" title="Логотип Банка Развитие-Столица">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/41.png" alt="РосЕвроБанк" title="Логотип РосЕвроБанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/43.png" alt="Банк Российский Капитал" title="Логотип банка Российский Капитал">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/44.png" alt="Связь Банк" title="Логотип Связь Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/45.png" alt="Citibank" title="Логотип Citibank">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/46.png" alt="УРАЛСИБ" title="Логотип УРАЛСИБ">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/48.png" alt="Транскапиталбанк" title="Логотип Транскапиталбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/49.png" alt="Тройка-Д Банк" title="Логотип Тройка-Д Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/50.png" alt="Примсоцбанк" title="Логотип Примсоцбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/51.png" alt="СМП Банк" title="Логотип СМП Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/52.png" alt="Банк Открытие" title="Логотип Банка Открытие">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/53.png" alt="ФОРА-БАНК" title="Логотип ФОРА-БАНКа">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/54.png" alt="Совкомбанк" title="Логотип Совкомбанка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/55.png" alt=" ЮниКредит Банк" title="Логотип  ЮниКредит Банка">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/56.png" alt="ДЕРЖАВА" title="Логотип банка ДЕРЖАВА">
                            </div>
                            <div class="item">
                                <img src="../images/img/banks/57.png" alt="Международный Расчётный Банк" title="Логотип Международный Расчётный Банка">
                            </div>
                        </div></div>
                </div>
                <div class="pagination" style="display: block;"><span class="selected"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
            </div>
            <div class="title">Почему банки-партнёры кредитуют наших клиентов?</div>
            <ul class="clearfix">
                <li>
                    <div class="li-step">Первое</div>
                    <div class="li-text">
                        Мы знаем то, что не принято озвучивать. Получая информацию
                        «из&nbsp;первых рук», мы правильно интерпретируем её и наиболее эффективно используем при работе с нашими клиентами.
                    </div>
                </li>
                <li>
                    <div class="li-step">Второе</div>
                    <div class="li-text">
                        Мы гарантируем партнёрам высокий уровень платёжной дисциплины наших клиентов и&nbsp;качественно подготовленный
                        пакет документов. За счёт этого клиенты получают скидки от наших партнёров и берут кредиты без навязанных
                        страховок.
                    </div>
                </li>
                <li>
                    <div class="li-step">Третье</div>
                    <div class="li-text">
                        Во многих случаях мы напрямую общаемся с&nbsp;руководством банков. Президенты и вице-президенты — наш уровень общения.
                        Вытягиваем случаи, которые другим <br> не по силам.
                    </div>
                </li>
                <li>
                    <div class="li-step">Четвёртое</div>
                    <div class="li-text">
                        120 банков-партнёров предлагают 370 программ кредитования. Как минимум <br> 5 из них точно подойдут вам.


                    </div>
                </li>
            </ul>
        </div><!--/noindex-->
    </div>
    <div class="wr wr14"><!--noindex-->
        <div class="block">
            <div class="subtitle">В результате</div>
            <div class="title">Вы получаете кредит в максимально короткие сроки <br> и на лучших условиях</div>
        </div><!--/noindex-->
    </div>
    <div class="wr wr8"><!--noindex-->
        <div class="title-block">
            <div class="block">
                <div class="title">Мы помогаем получить кредит</div>
                <div class="subtitle">Даже в самых сложных случаях</div>
            </div>
        </div>
        <div class="navigation clearfix">
            <a href="#" class="controls left" style="display: block;"></a>
            <div class="pagination" style="display: block;">Кейс<span class="selected">1 из 18</span><span>2 из 18</span><span>3 из 18</span><span>4 из 18</span><span>5 из 18</span><span>6 из 18</span><span>7 из 18</span><span>8 из 18</span><span>9 из 18</span><span>10 из 18</span><span>11 из 18</span><span>12 из 18</span><span>13 из 18</span><span>14 из 18</span><span>15 из 18</span><span>16 из 18</span><span>17 из 18</span><span>18 из 18</span></div>
            <a href="#" class="controls right" style="display: block;"></a>
        </div>
        <div class="gallery">
            <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1600px; height: 767px; margin: 0px; overflow: hidden;"><div class="items clearfix" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 59200px; height: 1174px;">
                    <div class="item" style="margin-right: 0px;">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/1.jpg" alt="Марина Грачёва,бухгалтер" title="Получение ипотечного кредита на 4 500 000 руб.">
                            </div>
                            <div class="client">
                                <div class="type">Ипотека</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Марина Грачёва</div>
                                        <div class="details">45 лет, бухгалтер</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Был нужен ипотечный кредит на 4 500 000 руб.</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Марине отказали в 4-х банках, поскольку компания, в которой она работала, уже в течение 2-х лет находилась
                                    в стадии банкротства. Трудовой контракт Марины подходил к концу, и банки опасались, что она не сможет
                                    оперативно найти высокооплачиваемую работу после завершения процедуры банкротства.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы добились для Марины индивидуального рассмотрения и доказали банку, что она будет востребована
                                    на рынке труда, а значит сможет получить достойную работу после завершения процедуры банкротства.
                                </div>
                                <div class="result">В результате Марина получила кредит на сумму 4 500 000 руб. под 10,5%</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/2.jpg" alt="Екатерина Кожевникова, парикмахер-универсал" title="Кейс на получение кредита 3 200 000 рублей">
                            </div>
                            <div class="client">
                                <div class="type">Ипотека</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Екатерина Кожевникова</div>
                                        <div class="details">30 лет, парикмахер-универсал</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 3 200 000 рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Екатерина не могла получить кредит на нужную ей сумму: два банка предлагали ей в 4 раза меньше, чем требовалось.
                                    Работодатель не подтверждал реальный доход Екатерины ни по телефону, ни документально. Кроме того, у Екатерины
                                    была высокая кредитная нагрузка.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы договорились с нашими партнёрами в банках о косвенном подтверждении доходов Екатерины.
                                    Сотрудники банка эти документы приняли, проверили и одобрили полную сумму кредита.
                                </div>
                                <div class="result">В итоге Екатерина получила кредит на сумму 3 200 000 руб. под 10,2%.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/3.jpg" alt="Диана Смольная,руководитель крупной компании " title="Кейс по получению кредита 50 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Ипотека</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Диана Смольная</div>
                                        <div class="details">50 лет, руководитель крупной компании</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 50 млн. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Несмотря на то, что у Дианы были высокопоставленные знакомые — Председатели Правления нескольких банков —
                                    она не могла получить ипотечный кредит на покупку дома. Вместо 50 млн. рублей ей соглашались выдать не
                                    более 25 млн. рублей под 16%. Проблемой было и то, что Диана не хотела показывать документы по бизнесу,
                                    т.к. большая часть прибыли “проходила в серую”. При этом сроки получения кредита были серьёзно ограничены
                                    (3 недели).
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Нам удалось согласовать с 4-мя банками возможность получения 50 млн. рублей при том, что максимально
                                    допустимая сумма по условиям этих банков не превышала 20 млн. В 3-х банках мы получили одобрение,
                                    выбрали наилучшую ставку (13,2%) и согласовали отмену 2-х видов страхования.
                                    Также мы подобрали Диане дом. По состоянию на 29.09.2018 Диана выплатила ипотеку, а для банка это стало
                                    самой крупной ипотечной сделкой в истории.
                                </div>
                                <div class="result">В итоге Диана получила кредит на сумму 50 млн. руб. под 9,7%.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/4.jpg" alt="Александр Корчагин,  руководитель микрофинансовой организации" title="Получение кредита 7 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Ипотека</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Александр Корчагин</div>
                                        <div class="details">35 лет, руководитель микрофинансовой организации</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 7 млн. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Александр хотел купить две квартиры в строящемся доме, но получил отказ в 4-х банках. Сложность заключалась
                                    в трёх моментах. Во-первых, выбор кредитных программ на первичном рынке ограничен только банками,
                                    в которых аккредитован застройщик и объект недвижимости. Квартиры Александра не были аккредитованы в
                                    подходящем ему банке. Во-вторых, сфера деятельности Александра (микрофинансирование) находилась в
                                    стоп-листах многих банков. И, наконец, в компании Александра на тот момент сложилась непростая финансовая
                                    ситуация.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы предварительно согласовали Александра в качестве заёмщика с банком Глобэкс. После этого мы провели полный
                                    анализ финансовых показателей компании. Подготовили для банка пакет документов, доказывающий работоспособность
                                    компании и стабильное финансовое положение её генерального директора. Также мы поспособствовали быстрой
                                    аккредитации объекта недвижимости в банке. После этого Глобэкс согласился кредитовать Александра и
                                    одобрил ему ипотеку в размере 8 млн. рублей с минимальным первоначальным взносом. Ставка по кредиту
                                    составила 10%.
                                </div>
                                <div class="result">В итоге Александр получил кредит на сумму 8 млн. руб. под 10%.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/5.jpg" alt="Владимир Манойло, строитель-крановщик" title="Получение кредита 4 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Ипотека</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Владимир Манойло</div>
                                        <div class="details">31 лет, строитель-крановщик</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 4 млн. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Владимир хотел получить ипотеку, но после самостоятельного обращения в 3 банка ему везде отказали, в т.ч. и
                                    в Сбербанке, на карту которого Владимир получал зарплату.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы поняли, что причиной всех отказов стали неверно оформленные бухгалтерией документы – банки считали,
                                    что они поддельные. Также Владимир пытался привлечь к сделке своего тестя в качестве созаёмщика.
                                    При детальной проверке тестя выяснилось, что его участие в сделке только усложняло задачу, поскольку
                                    обнаружили негативную информацию о нём по линии службы безопасности. Мы помогли исправить все недочёты
                                    в документах, вывели из сделки тестя Владимира и добились одобрения.
                                </div>
                                <div class="result">В итоге Владимир получил деньги через 2 недели в Сбербанке под 9,75%.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/6.jpg" alt="Максим Иванченко, тренер по плаванию, инвалид" title="Получение кредита на 10 000 000 рублей на строительство спорткомплекса">
                            </div>
                            <div class="client">
                                <div class="type">Кредит под залог</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Максим Иванченко</div>
                                        <div class="details">45 лет, тренер по плаванию, инвалид, глухонемой.</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 10 000 000 рублей на строительство спорткомплекса</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Максим решил начать с другом бизнес и построить спортивный комплекс в Крыму. Для этого требовалось 10 млн. рублей.
                                    Все 13 банков, в которые он обратился, ему сразу отказали из-за инвалидности. Кроме того, страховые
                                    компании отказывались страховать Максима, а банки не хотели принимать в залог его квартиру – в ней были
                                    серьёзные перепланировки.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    После предоставления страховой компании ряда документов мы согласовали с ней возможность страхования Максима.
                                    Затем организовали двухдневное индивидуальное рассмотрение: банки не могли поговорить с глухонемым клиентом
                                    по телефону, поэтому мы договорились об очном собеседовании с банковскими сотрудниками. В результате мы
                                    получили одобрение в 4-х банках. После этого согласовали с оценочными компаниями серьёзные перепланировки
                                    в квартире Максима.
                                </div>
                                <div class="result">Уже через 3 недели после обращения к нам Максим получил кредит на сумму 9,8 млн под 12,9%.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/7.jpg" alt="Ольга Рогожина, заместитель главного врача в частной клинике" title="Кейс по погашению имеющихся кредитов">
                            </div>
                            <div class="client">
                                <div class="type">Кредит под залог</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Ольга Рогожина</div>
                                        <div class="details">50 лет, заместитель главного врача в частной клинике</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Был нужен займ на погашение имеющихся кредитов</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Ольга оказалась в очень сложной ситуации: она взяла много потребительских кредитов и ежемесячно отдавала
                                    95% своей зарплаты на их погашение. Чтобы хоть как-то прожить Ольга взяла ещё 4 микрозайма, что ещё
                                    сильнее ухудшило её положение. Одобрить кредит нужно было срочно. У Ольги уже не хватало денег на
                                    ежемесячные платежи и вот-вот у неё бы испортилась кредитная история. Тогда было бы точно невозможно
                                    получить новый кредит. До нас Ольга обращалась к трём брокерам, но они даже не стали браться за её случай.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы уговорили банк рассмотреть заявку Ольги без учёта её кредитной нагрузки. После того, как получили
                                    одобрение, мы нашли частного инвестора, который закрыл все долги по кредитам Ольги всего за 4%.
                                </div>
                                <div class="result">
                                    После этого она получила в банке кредит под залог квартиры по ставке 12,2%. Теперь
                                    Ольга каждый месяц вместо 83 000 руб. платит 22 000 руб. Она решила все свои проблемы и очень довольна.
                                </div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/8.jpg" alt="Георгий Сурахов,начальник производства" title="Опыт получения кредита на 2 млн. руб.">
                            </div>
                            <div class="client">
                                <div class="type">Кредит под залог</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Георгий Сурахов</div>
                                        <div class="details">26 лет, начальник производства</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 2 млн. руб.</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Из 6 банков, в которые обратился Георгий, он получил одобрение только в двух.
                                    Но и в них ему в итоге отказали, поскольку в квартире, которую хотел заложить Георгий, был зарегистрирован
                                    его несовершеннолетний ребёнок, отказавшийся в своё время от приватизации. Выписать ребёнка было некуда.
                                    Ни одна страховая компания не соглашалась застраховать титул (риск потери права собственности).
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы обратились в дружественную нам страховую компанию и она согласилась оформить страховку. При этом
                                    мы нашли более выгодные условия по кредиту: если раньше банки предлагали Георгию 16,5%, то мы получили
                                    одобрение для него со ставкой 12,5%.
                                </div>
                                <div class="result">В результате Георгий получил нужную сумму через 2,5 недели после обращения к нам, сэкономив при этом 3,5% годовых.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/9.jpg" alt="Светлана Никулина,предприниматель" title="Опыт рефинансирование займа">
                            </div>
                            <div class="client">
                                <div class="type">Кредит под залог</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Светлана Никулина</div>
                                        <div class="details">48 лет, предприниматель</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Требовалось рефинансирование займа</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Светлана обратилась к нам с просьбой рефинансировать её займ. У неё была очень сложная ситуация: полгода
                                    назад «чёрные брокеры» оформили ей займ частного инвестора на сумму 6,5 млн. При этом сделка была оформлена
                                    через договор купли-продажи. Светлана, по сути, продала свою квартиру стоимостью 11,5 млн. за 6,5 млн.
                                    и ежемесячно платила 290 000 рублей (4,5% в месяц) в качестве процентов по займу.
                                    Кроме того, у Светланы была очень плохая кредитная история, а её близкие родственники суммарно получали
                                    всего 60 000 руб. в месяц. Всё это существенно затрудняло возможность получения кредита.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Это была одна из сложнейших задач в истории нашей компании. Мы задействовали все свои ресурсы и получили
                                    одобрение в банке на сумму 7 млн. рублей по ставке 11,5%. Ежемесячный платёж составил 104 768 руб.
                                </div>
                                <div class="result">В результате Светлана вернула квартиру в свою собственность и уменьшила ежемесячный платёж в 2,8 раза.</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/10.jpg" alt="Евгения Шапошникова, собственник компании" title="Получение кредита 27 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Кредит под залог</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Евгения Шапошникова</div>
                                        <div class="details">46 лет, собственник компании по продаже кормов для лошадей</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 27 млн. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Евгении требовалось 27 млн. руб. на проведение сделки по продаже земли и рефинансирование потребительских
                                    кредитов. Поскольку Евгения уже получила с нами 6 кредитов на общую сумму более 10 млн. руб., она сразу
                                    обратилась к нам. У Евгении к тому времени уже был одобрен кредит на 20 млн. рублей под 15% в банке,
                                    где её знакомый работал Заместителем Председателя Правления. При этом ситуация сильно осложнялась тем,
                                    что квартира Евгении находилась в старом доме (1950 года постройки), а прописанные члены семьи когда-то
                                    отказались от своего права на приватизацию данной квартиры.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    В результате продолжительных согласований нам удалось получить одобрение в нескольких банках, из которых
                                    Евгения выбрала МКБ, предложивший кредит на 10 лет со ставкой 11,5%.
                                </div>
                                <div class="result">В результате Евгения получила 27 млн. рублей под 11,5%</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/11.jpg" alt="Татьяна Кравченко, менеджер" title="Кейс по получению кредита 200 000 рублей">
                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Татьяна Кравченко</div>
                                        <div class="details">28 лет, менеджер</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 200 000 рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Несмотря на хорошую работу и наличие подтверждённого дохода, Татьяна не могла получить потребительский
                                    кредит на 200 000 рублей: три банка отказали ей без объяснения причин. Мы выяснили, что проблема была
                                    в плохой кредитной истории: у Татьяны была открытая просрочка по кредиту, оформленному несколько месяцев
                                    назад на 23 000 рублей. Татьяна уверяла, что такой кредит она никогда не брала.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Выяснилось, что безработная сестра-близнец Татьяны в тайне от неё купила в кредит ноутбук по её паспорту.
                                    Просроченная задолженность по данному кредиту была на следующий же день погашена и через неделю Татьяна
                                    с нашей помощью получила в кредит 200 тыс. руб. под 15%.
                                </div>
                                <div class="result">В результате Татьяна получила кредит на сумму 200 000 руб. под 15%</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/12.jpg" alt="Иван Поляков, стоматолог" title="Кейс по получению кредита 550 000 рублей">
                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Иван Поляков</div>
                                        <div class="details">35 лет, стоматолог</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 550 000 рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Иван пытался получить потребительский кредит самостоятельно. Он обратился в 4 банка, в двух из которых
                                    он уже неоднократно кредитовался (брал ипотеку и автокредит), но везде получил отказы.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Проанализировав ситуацию, мы поняли причину отказов: заработок клиента не соответствовал среднерыночному
                                    доходу для его должности — он был сильно завышен. Но Иван фактически работал на двух местах работы в рамках
                                    одной клиники, поэтому мог столько зарабатывать.
                                    Мы документально доказали это банкам и написали пояснительную записку. В короткие сроки мы получили несколько
                                    одобрений на хороших условиях, в т.ч. и в ранее отказавшем банке. Ивану оставалось лишь выбрать лучшее
                                    предложение. Он получил 550 000 руб. под 15% без страховки на 5 лет.
                                </div>
                                <div class="result">В результате Иван получил кредит на сумму 550 000. руб. под 15% на 5 лет</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/13.jpg" alt="Ольга Кашина, заведующая учебной частью в школе" title="Кейс по получению кредита 400 000 рублей">
                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Ольга Кашина</div>
                                        <div class="details">41 лет, заведующая учебной частью в школе</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 400 000 рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Ольга обращалась к нам дважды.
                                    Первый раз она не смогла самостоятельно получить 400 000 рублей: из-за закредитованности ей отказали 3 банка.
                                    Во второй раз, снова из-за большой кредитной нагрузки, Ольга не смогла получить деньги на закрытие текущих
                                    кредитов: во время кризиса зарплату урезали вдвое, и ей было необходимо срочно уменьшить свои ежемесячные
                                    платежи.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    В первом случае мы подобрали Ольге банк, который не видел всю её кредитную нагрузку. В результате она за
                                    3 дня получила 400 000 рублей и осталась довольна скоростью и сервисом (Ольга не ходила по банкам — вся
                                    работа была дистанционной).
                                    При повторном обращении мы собрали для неё необходимый пакет документов и организовали рефинансирование
                                    двух дорогих кредитов. В итоге нагрузка Ольги по платежам уменьшилась в 2 раза.
                                </div>
                                <div class="result">В результате Ольга получила 400 000 руб. за 3 дня, а потом вдвое уменьшила свою нагрузку по платежам</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/14.jpg" alt="Михаил Дорохов, учредитель 3-х компаний" title="Кейс по получению кредита 750 000 рублей">
                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Михаил Дорохов</div>
                                        <div class="details">45 лет, учредитель 3-х компаний</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 750 000 рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    До работы с нами Михаил успел обратится в 6 банков — все они ему отказали. Мы выяснили, что шесть лет назад,
                                    во время кризиса,  у одной из его компаний были просрочки по кредиту. Михаил в то время выступал поручителем,
                                    и сейчас эта история мешала ему взять кредит.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Сначала мы написали банку объяснительное письмо по поводу плохой кредитной истории Михаила. Затем помогли
                                    грамотно собрать пакет документов и подготовили управленческую отчётность по требованиям банка. В итоге мы
                                    выбрали и согласовали один единственный вариант, где и смогли добиться одобрения: Михаил получил кредит на
                                    750 000 рублей под 16,5% на 5 лет.
                                </div>
                                <div class="result">С нашей помощью он получил 750 000 рублей под 16,5% на 5 лет</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/15.jpg" alt="Андрей Сельцов, хоккеист клуба “Спартак” " title="Кейс по получению срочного кредита 3 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Андрей Сельцов</div>
                                        <div class="details">22 лет, хоккеист клуба “Спартак”</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 3 млн. рублей, очень срочно</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Утром, в 11:00 к нам пришла заявка от Андрея с пометкой «Очень быстро»: нужно было 3 млн. рублей. Он был
                                    у нас в офисе уже в 13:00. Оказалось, что Андрей — член хоккейного клуба «Спартак».
                                    Деньги были нужны в течение двух дней для расчёта со строителями за возведённый дом. Ситуация осложнялась тем,
                                    что как раз через 2 дня Андрей должен был улетать с командой на следующую игру.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    В 18:00, в день обращения к нам, Андрей уже стоял в кассе банка и получал 1,5 млн. рублей. Утром следующего
                                    дня мы добились одобрения ещё от одного банка. Таким образом, Андрей смог получить 3 млн. руб. под 16% меньше,
                                    чем за сутки.
                                    В последствии Андрей с супругой стали нашими постоянными клиентами и пользовались нашими услугами ещё 3 раза.
                                </div>
                                <div class="result">С нашей помощью он получил 3 млн. рублей меньше, чем за сутки</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/16.jpg" alt="Егор Ананьев, актер театра " title="Получение кредита 2,5 млн. рублей по ставке не более 19%">

                            </div>
                            <div class="client">
                                <div class="type">Потребительский кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Егор Ананьев</div>
                                        <div class="details">37 лет, актер театра «Современник»</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было нужно 2,5 млн. рублей по ставке не более 19%</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    На первый взгляд у Егора была лёгкая ситуация: отличная кредитная история, постоянная работа, большая
                                    зарплата. Однако оказалось, что банки не жалуют актёров: по их мнению, заёмщики творческих профессий
                                    инфантильны, поэтому риск того, что они перестанут платить, очень высок.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Нам пришлось приложить немало усилий, чтобы одобрить кредит под необходимую Егору ставку и уложиться в
                                    сжатые сроки. В результате он получил кредит с эффективной ставкой 15,5%.
                                </div>
                                <div class="result">С нашей помощью он получил 2,5 млн. рублей под 15,5%</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/23.jpg" alt="Компания по разработке и бурению скважин для нефтяных компаний, г. Тюмень" title="Компания по разработке и бурению скважин для нефтяных компаний, г. Тюмень">
                            </div>
                            <div class="client">
                                <div class="type">Бизнес-кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">Компания по разработке и бурению скважин для нефтяных компаний, г. Тюмень</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Было необходимо фондирование на 2 млрд. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    Одной из специфик деятельности компании были контракты со значительной отсрочкой платежа в 90 и более дней.
                                    С учётом крупномасштабности проектов (контрактная база компании превышает 60 млрд. рублей), кассовый разрыв
                                    серьёзно усложнял реализацию контрактов и часто приводил к штрафным санкциям со стороны заказчиков.
                                    Компания обратилась к нам за фондированием на погашение кассового разрыва и пополнение оборотных средств
                                    (0,8 и 1,2 млрд. рублей соответственно).
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    Мы провели кропотливую работу по всестороннему анализу бизнеса и выявили все слабые стороны, не позволявшие
                                    клиенту получить кредит в своём регионе. В результате мы сформировали для компании 4 предложения. Выбор
                                    был сделан в пользу решения, не предполагающего залога недвижимого имущества. Сделка была проведена с
                                    привлечением партнёра, инвестирующего в аналогичные проекты. В качестве обеспечения удалось согласовать
                                    имущественные права по контрактам клиента, что в последнее время является большой редкостью.
                                </div>
                                <div class="result">С нашей помощью компания получила необходимую сумму без твёрдого обеспечения</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block clearfix">
                            <div class="avatar">
                                <img src="../images/img/wr8/24.jpg" alt="Решетов М.Р." title="Кейс по получению оборотных средствх — 9 млн. рублей">
                            </div>
                            <div class="client">
                                <div class="type">Бизнес-кредит</div>
                                <div class="clearfix">
                                    <div class="info-left">
                                        <div class="name">ИП «Решетов М.Р.»</div>
                                    </div>
                                    <div class="info-right">
                                        <div class="text">Были нужны оборотные средства — 9 млн. рублей</div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info-title">Проблема</div>
                                <div class="info-text">
                                    В период кризиса (конец 2014 года) клиенту были нужны оборотные средства в размере 9 млн. рублей на закупку
                                    товара для магазина. Твёрдого залога ИП не имел, он обладал только товарно-материальными запасами на сумму
                                    13 млн. рублей и двумя автомобилями.
                                </div>
                                <div class="info-title padding">Решение</div>
                                <div class="info-text">
                                    С учётом того, что степень официализации бизнеса не превышала 50%, нашим аналитикам пришлось проделать
                                    серьёзную работу по формированию ОПиУ и Cashflow для банка.
                                    Мы сумели показать компанию в самом выгодном свете: банк поверил в работоспособность модели ведения бизнеса
                                    клиента и одобрил 7,7 млн. с довольно слабым залогом.
                                    Клиенту хватило денег на существенную часть необходимого товара, а новогодний спрос принёс ожидаемые дивиденды
                                    и позволил закрыть значительную часть кредита уже через 3 месяца после его получения.
                                </div>
                                <div class="result">С нашей помощью он получил 7,7 млн. рублей с довольно слабым залогом</div>
                                <div class="info">
                                    * Мы не раскрываем персональные данные своих клиентов. Все примеры предоставлены с согласия клиентов
                                    на условии изменения их имён и фамилий


                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div><!--/noindex-->
    </div>

    <div class="wr wr15">
        <div class="block">
            <div class="title">1 минута отделяет вас от лучших кредитных предложений — <br> просто заполните заявку</div>
            <div class="subtitle">Эксперт позвонит и сделает индивидуальное предложение</div>
            <div class="line"></div>
            <div class="index-calc js-calculator">
                <form action="" method="post" data-result="Вам перезвонит специалист по кредитованию через 5 минут." class="order-form">
                    <div class="btn-group top clearfix js-select-type">
                        <label>Выберите тип</label>
                        <div class="form-control select-calc js-navigation">
                            <span>Выберите тип</span>
                            <div class="select-calc-items">
                                <div data-type="mortgage" class="select-calc-item">Ипотека</div>
                                <div data-type="secured" class="select-calc-item">Кредит под залог</div>
                                <div data-type="consumer" class="select-calc-item">Потребительский кредит</div>
                                <div data-type="business" class="select-calc-item">Бизнес-кредит</div>
                            </div>
                            <input type="hidden" name="credit" value="Выберите тип" id="formtip">
                        </div>
                    </div>
                    <div class="btn-group clearfix js-select-house" style="display: none;">
                        <label>Вид недвижимости</label>
                        <div class="form-control select-calc">
                            <span>Квартира (вторичный рынок)</span>
                            <div class="select-calc-items">
                                <div class="select-calc-item">Квартира (первичный рынок)</div>
                                <div class="select-calc-item">Квартира (вторичный рынок)</div>
                                <div class="select-calc-item">Дом</div>
                                <div class="select-calc-item">Земля</div>
                                <div class="select-calc-item">Коммерческая недвижимость</div>
                            </div>
                            <input type="hidden" name="house" value="" class="not-validate" id="formhouse">
                        </div>
                    </div>
                    <div class="btn-group center clearfix">
                        <label>Сумма кредита руб.</label>
                        <input type="text" name="summ" value="1 100 000" class="form-control not-validate js-calc-summ-input money-format" id="formsumm">
                        <div class="ion-center">
                            <span class="irs js-irs-1"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">1 000 000</span><span class="irs-max" style="visibility: visible;">100 000 000</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: -8.43582%;">1 100 000</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.73333%; width: 0.0975084%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0.0975084%;"></span></span><div class="js-calc-ion-summ irs-hidden-input"></div>
                        </div>
                    </div>
                    <div class="btn-group center-bottom js-ion">
                        <label>
                            <span class="js-ion-title">Первоначальный взнос, %</span>
                        </label>
                        <span class="irs js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: visible;">70</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 1.2218%;">0</span></span><span class="irs-grid" style="width: 97.5564%; left: 1.1218%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -0.56391%;">0</span><span class="irs-grid-pol small" style="left: 4.761904762%"></span><span class="irs-grid-pol small" style="left: 2.380952381%"></span><span class="irs-grid-pol" style="left: 7.142857143%"></span><span class="irs-grid-text js-grid-text-1" style="left: 7.14286%; visibility: visible; margin-left: -0.56391%;">5</span><span class="irs-grid-pol small" style="left: 11.904761905%"></span><span class="irs-grid-pol small" style="left: 9.523809524%"></span><span class="irs-grid-pol" style="left: 14.285714286%"></span><span class="irs-grid-text js-grid-text-2" style="left: 14.2857%; visibility: visible; margin-left: -0.56391%;">10</span><span class="irs-grid-pol small" style="left: 19.047619048%"></span><span class="irs-grid-pol small" style="left: 16.666666667%"></span><span class="irs-grid-pol" style="left: 21.428571429%"></span><span class="irs-grid-text js-grid-text-3" style="left: 21.4286%; visibility: visible; margin-left: -0.56391%;">15</span><span class="irs-grid-pol small" style="left: 26.190476191%"></span><span class="irs-grid-pol small" style="left: 23.80952381%"></span><span class="irs-grid-pol" style="left: 28.571428572%"></span><span class="irs-grid-text js-grid-text-4" style="left: 28.5714%; margin-left: -0.56391%;">20</span><span class="irs-grid-pol small" style="left: 33.333333334%"></span><span class="irs-grid-pol small" style="left: 30.952380953%"></span><span class="irs-grid-pol" style="left: 35.714285715%"></span><span class="irs-grid-text js-grid-text-5" style="left: 35.7143%; visibility: visible; margin-left: -0.56391%;">25</span><span class="irs-grid-pol small" style="left: 40.476190477%"></span><span class="irs-grid-pol small" style="left: 38.095238096%"></span><span class="irs-grid-pol" style="left: 42.857142858%"></span><span class="irs-grid-text js-grid-text-6" style="left: 42.8571%; visibility: visible; margin-left: -0.56391%;">30</span><span class="irs-grid-pol small" style="left: 47.61904762%"></span><span class="irs-grid-pol small" style="left: 45.238095239%"></span><span class="irs-grid-pol" style="left: 50.000000001%"></span><span class="irs-grid-text js-grid-text-7" style="left: 50%; visibility: visible; margin-left: -0.56391%;">35</span><span class="irs-grid-pol small" style="left: 54.761904763%"></span><span class="irs-grid-pol small" style="left: 52.380952382%"></span><span class="irs-grid-pol" style="left: 57.142857144%"></span><span class="irs-grid-text js-grid-text-8" style="left: 57.1429%; margin-left: -0.56391%;">40</span><span class="irs-grid-pol small" style="left: 61.904761906%"></span><span class="irs-grid-pol small" style="left: 59.523809525%"></span><span class="irs-grid-pol" style="left: 64.285714287%"></span><span class="irs-grid-text js-grid-text-9" style="left: 64.2857%; visibility: visible; margin-left: -0.56391%;">45</span><span class="irs-grid-pol small" style="left: 69.047619049%"></span><span class="irs-grid-pol small" style="left: 66.666666668%"></span><span class="irs-grid-pol" style="left: 71.42857143%"></span><span class="irs-grid-text js-grid-text-10" style="left: 71.4286%; visibility: visible; margin-left: -0.56391%;">50</span><span class="irs-grid-pol small" style="left: 76.190476192%"></span><span class="irs-grid-pol small" style="left: 73.809523811%"></span><span class="irs-grid-pol" style="left: 78.571428573%"></span><span class="irs-grid-text js-grid-text-11" style="left: 78.5714%; visibility: visible; margin-left: -0.56391%;">55</span><span class="irs-grid-pol small" style="left: 83.333333335%"></span><span class="irs-grid-pol small" style="left: 80.952380954%"></span><span class="irs-grid-pol" style="left: 85.714285716%"></span><span class="irs-grid-text js-grid-text-12" style="left: 85.7143%; margin-left: -0.56391%;">60</span><span class="irs-grid-pol small" style="left: 90.476190478%"></span><span class="irs-grid-pol small" style="left: 88.095238097%"></span><span class="irs-grid-pol" style="left: 92.857142859%"></span><span class="irs-grid-text js-grid-text-13" style="left: 92.8571%; visibility: visible; margin-left: -0.56391%;">65</span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-14" style="left: 100%; visibility: visible; margin-left: -0.56391%;">70</span></span><span class="irs-bar" style="left: 1.2218%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span><div class="js-calc-ion-type irs-hidden-input"></div>
                        <input type="hidden" name="period-name" value="0" class="not-validate js-calc-nameType-input" id="formperiodname">
                        <input type="hidden" name="period" value="0" class="not-validate js-calc-type-input" id="formperiod">
                    </div>
                    <div class="btn-group bottom clearfix">
                        <input type="text" name="name" placeholder="Введите ваше имя" class="form-control" id="formname">
                        <input type="text" name="phone" placeholder="+7 (___) ___-__-__" class="form-control" id="formphone">
                    </div>
                    <button id="send_form4" type="submit" class="btn btn-default" onclick="yaCounter41209659.reachGoal('ORDER');" _leadnoupdate="1">Отправить заявку</button>
                    <input type="hidden" name="goal" value="lead">
                    <input type="hidden" name="additional" value="Оставить заявку">
                    <div class="subtext">Вам перезвонит специалист по кредитованию через 5 минут.</div>
                </form>
            </div>
        </div>
    </div>
    <div class="wr wr-footer">
        <div class="block">
            <div class="line"></div>
            <div class="clearfix">
                <div class="left">
                    <a href="/" class="icon icon-logo-footer"></a>
                    <ul class="clearfix f-menu">
                        <li>
                            <a href="/potrebitelskiy-kredit">Потребительский кредит</a>
                        </li>
                        <li>
                            <a href="/ipoteka">Ипотека</a>
                        </li>
                        <li>
                            <a href="/kredit-pod-zalog">Кредит под залог недвижимости</a>
                        </li>
                        <li>
                            <a href="/kredit-dlya-biznesa">Бизнес-кредит</a>
                        </li>
                    </ul>
                    <div class="copyright">© 2019 «Финансовый сервис» <br><a href="https://maps.google.com/?q=3-%D1%8F+%D0%AF%D0%BC%D1%81%D0%BA%D0%BE%D0%B3%D0%BE+%D0%BF%D0%BE%D0%BB%D1%8F+%D0%B4.9,+%D0%BE%D1%84.+%D0%95116&amp;entry=gmail&amp;source=g">125040, Россия, г. Москва, ул. 3-я Ямского поля д.9, оф. Е116 (БЦ Art Residence) <br> </a><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">105066, Россия, г. Москва, ул. Новорязанская д.30а стр.8 </a></div><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">
                        <div class="text">
                            Сайт ООО «Финансовый сервис» носит исключительно информационный характер <br> и ни при каких условиях
                            информационные материалы и условия кредитования, размещенные на сайте, не являются публичной офертой,
                            определяемой положениями Статей 435 и 437 Гражданского кодекса РФ.
                        </div>
                    </a></div><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">
                </a><div class="right"><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">
                    </a><ul><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">
                        </a><li><a href="https://www.google.com/maps?q=%D0%9D%D0%BE%D0%B2%D0%BE%D1%80%D1%8F%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F+%D0%B430%D0%B0+%D1%81%D1%82%D1%80.8&amp;entry=gmail&amp;source=g">
                            </a><a href="tel:+74959025556" class="phone">+7 (495) 902-55-56</a>
                        </li>
                        <li>
                            <a href="#" data-title="Закажите обратный звонок" data-fields="name,phone,time" data-goal="lead" data-btn="Заказать звонок" data-subtext="Мы позвоним вам в ближайшее время" data-additional="Обратный звонок" class="open-callback">Перезвоните мне</a>
                        </li>
                        <li><br>
                            e-mail: <a href="mailto:info@finsr.ru ">info@finsr.ru </a>
                            <!--<a href="http://conversionart.ru" target="_blank" class="c-art">Сделано в
                              <span>ConversionArt</span>
                            </a>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
