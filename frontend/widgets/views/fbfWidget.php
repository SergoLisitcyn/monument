<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>

    <?php
    $this->registerJs(
        "$('#myModalSendOk').modal('show');",
        yii\web\View::POS_READY
    );
    ?>

    <!-- Modal -->
    <div class="modal fade" id="myModalSendOk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Форма обратной связи</h4>
                </div>
                <div class="modal-body">
                    <p>Благодарим Вас за обращение к нам. Мы ответим Вам как можно скорее.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" id="myModalLabel">Написать нам</h3>
            </div>
            <div class="modal-body">

                <?= $form->field($model, 'name')->textInput(['placeholder' => "Ваше Имя:"])->label(false)->error(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => "E-mail адрес:"])->label(false)->error(false) ?>

                <?= $form->field($model, 'subject')->textInput(['placeholder' => "Тема сообщения:"])->label(false)->error(false) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 3])->label(false)->error(false) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

            </div>
            <div class="modal-footer">
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-decor', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>