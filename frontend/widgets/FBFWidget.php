<?php

namespace frontend\widgets;

use frontend\models\ContactForm;
use Yii;
//use yii\base\Widget;

class FBFWidget extends \yii\bootstrap\Widget
{

    public function run()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('fbfWidget', [
            'model' => $model,
        ]);
    }

}