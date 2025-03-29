<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Pages;
use common\models\Services;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SitemapController  extends Controller
{
    public function actionIndex()
    {
        $urls = $this->renderPartial('index', [
            'host' => Yii::$app->request->hostInfo,
        ]);

        Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $urls;
    }
}