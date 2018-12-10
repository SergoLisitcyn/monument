<?php
use yii\helpers\Html;

$this->title = 'Гравировки';
?>
<div class="page-category">
    <div class="row">
        <div class="container">
            <? $this->params['breadcrumbs'][] = ['label' => $this->title];?>
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