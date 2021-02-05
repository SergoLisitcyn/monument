<?php
use yii\helpers\Html;

$this->title = 'Виды Камня';
?>
<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>КАТЕГОРИИ</h3>
                    <p>Если вы хотите заказать изделие, которого нет в каталоге сайта, пожалуйста,<br>
                        вышлите нам по электронной почте victor1714@mail.ru фото или рисунок<br>
                        интересующего вас памятника или свяжитесь с нами по телефону.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach($images as $img) {
            $icon = $img->getUrl(); ?>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <a data-fancybox="gallery" href="<?= $icon ?>">
                        <img src="<?= $icon ?>" alt="" style="height: 350px;">
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>