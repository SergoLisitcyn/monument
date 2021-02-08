<?php


namespace frontend\controllers;


use common\widgets\costaRico\yii2Images\models\Image;
use yii\web\Controller;

class GalleryController  extends Controller
{
    public function actionGallery($url)
    {
        if($url == 'gallery'){
            $itemId = 1;
            $title = 'Наши работы';
        } elseif ($url == 'vertical'){
            $itemId = 2;
            $title = 'Наши работы';
        } elseif ($url == 'gorizontal'){
            $itemId = 3;
            $title = 'Виды памятников';
        }  elseif ($url == 'other'){
            $itemId = 7;
            $title = 'Лавки,вазы,оградки';
        } else {
            return $this->redirect('index');
        }
        if(isset($itemId)){
            $images = Image::find()->where(['itemId' => $itemId])->all();
            return $this->render('gallery', [
                'images' => $images,
                'title' => $title,
            ]);
        } else {
            return $this->redirect('index');
        }
    }
}