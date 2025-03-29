<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\helpers\Json;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property int|null $status
 */
class Gallery extends \yii\db\ActiveRecord
{

    public function afterFind() {
        parent::afterFind();
        $this->image = Json::decode($this->image);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 1],
            [['name'], 'required'],
            [['image'], 'safe'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Названия',
            'image' => 'Изображения',
            'status' => 'Статус',
        ];
    }

    public static function attachImage($uploadedFiles,$name): array
    {
        $folder = '/';
        if($name == 'Наши работы'){
            $folder = '/nashi-raboty/';
        }
        if($name == 'Оградки, Столики и Вазы'){
            $folder = '/ogradki-stoliki-vazy/';
        }
        if($name == 'Памятники'){
            $folder = '/pamyatniki/';
        }
        $directory = Yii::getAlias('@frontend/web/uploads/gallery'.$folder) . DIRECTORY_SEPARATOR;
        $existingData = [];

        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        }

        foreach ($uploadedFiles as $file) {
            $fileName = substr(md5(microtime(true) . $file['tmp_name']), 4, 6) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
            $filePath = $directory . $fileName;

            $fileUrl = '/uploads/gallery'.$folder . $fileName;

            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $existingData[] = ['file' => $fileUrl];
            }
        }
        return $existingData;
    }



}
