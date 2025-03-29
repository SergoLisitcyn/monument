<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $body
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 0],
            [['name', 'phone'], 'required'],
            [['body'], 'string'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['name', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'body' => 'Текст Сообщения',
            'created_at' => 'Дата обращения',
            'updated_at' => 'Updated At',
            'status' => 'Статус',
        ];
    }

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
