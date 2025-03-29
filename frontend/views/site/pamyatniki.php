<?php
$this->title = 'Памятники | Изготовление и установка памятников в Калининграде и области';
$this->registerMetaTag(['name' => 'description','content' => 'Памятники ✔ Изготовление памятников на заказ ✔ Установка на всех кладбищах Калининграда и области ✔ Гарантия качества и индивидуальный подход.']);
?>

<section class="works-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Памятники</h1>
        </div>
    </div>
</section>
<section class="works">
    <div class="container">
        <div class="works__row class-row-works section-row">
            <p class="services__descr section-descr">Если в нашем каталоге нет нужного вам памятника, отправьте нам фото или эскиз на
                <a href="mailto:promonument@mail.ru">promonument@mail.ru</a> , и мы изготовим его по вашему заказу.
                Также вы можете связаться с нами по телефону <a href="tel:+7 (909) 793-83-73">+7 (909) 793-83-73</a> для консультации.</p>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div id="gallery">
            <?php foreach ($gallery->image as $item) : ?>
                <a href="<?= $item['file'] ?>" data-fancybox="gallery" class="gallery-item">
                    <img src="<?= $item['file'] ?>" alt="Nature">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>