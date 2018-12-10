<?php
use yii\helpers\Html;

$this->title = 'Виды Камня';
?>
<div class="page-category">
    <div class="row">
        <div class="container">
            <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="active"><span itemprop="name">Виды Камня</span>
                </li>
            </ul>
            <h1><?= Html::encode($this->title) ?></h1>
            <?php
            foreach($images as $img) {
                $icon = $img->getUrl();
                ?>
            <div class="col-sm-3">
               <div class="block-image">
                   <a data-fancybox="gallery" href="<?php echo $icon ?>">
                    <img style="height: 200px;width: 100%;margin-bottom: 10px;" src="<?php echo $icon ?>">
                   </a>
               </div>
            </div>
            <?php }
            ?>
        </div>
    </div>
</div>