<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>



<?php $form = ActiveForm::begin([
        'id' => 'test-form',
        'class' => 'white-popup-block mfp-hide'
]); ?>
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Свяжитесь с нами</h3>
            <form>
                <div class="row">

                    <div class="col-xl-6">
                        <?= $form->field($model, 'name')->textInput(['placeholder' => "Ваше Имя:"])->label(false)->error(false) ?>
                    </div>
                    <div class="col-xl-6">
                        <?= $form->field($model, 'phone')->textInput(['placeholder' => "Ваше телефон:"])->label(false)->error(false) ?>
                    </div>
                    <div class="col-xl-12">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => "E-mail адрес:"])->label(false)->error(false) ?>
                    </div>
                    <div class="col-xl-12">
                        <?= $form->field($model, 'body')->textarea(['rows' => 3])->label('Текст сообщения')->error(false) ?>
                    </div>
                    <div class="col-xl-12">
                        <?= $form->field($model, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha2::className(),
                            [
                                'siteKey' => '6LcDBE4aAAAAAKYO7sQ1NUd8G2rEJc9MDTJ_ceh5', // unnecessary is reCaptcha component was set up
                            ]
                        ) ?>
                    </div>

                    <div class="col-xl-12">
                        <?= Html::submitButton('Отправить', ['class' => 'boxed-btn3', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php ActiveForm::end(); ?>