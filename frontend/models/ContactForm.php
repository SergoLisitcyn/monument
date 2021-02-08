<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $phone;
    public $body;
    public $reCaptcha;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body','phone'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['verifyCode', 'captcha'],
            // verifyCode needs to be entered correctly
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(),
                'secret' => '6LcDBE4aAAAAABV5_aub9vSAJgA9hvbfVNDBtqhn', // unnecessary if reСaptcha is already configured
                'uncheckedMessage' => 'Пожалуйста, подтвердите, что вы не робот.'],
//            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LdobXwUAAAAAPar52mkeRo34zjrMRtfu_DW7f7o', 'uncheckedMessage' => 'Пожалуйста, подтвердите, что вы не робот.'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Имя',
            'email' => 'Электронный адрес',
            'phone' => 'Телефон',
            'subject' => 'Тема',
            'body' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
        $html = '<b>Имя: </b>'.$this->name.'<br><b>Телефон: </b>'.$this->phone.'<br><b>Текст сообщения: </b><br>'.$this->body;
        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['adminEmail']])
            ->setSubject('Заявка с сайта')
            ->setHtmlBody($html)
            ->send();
    }
}
