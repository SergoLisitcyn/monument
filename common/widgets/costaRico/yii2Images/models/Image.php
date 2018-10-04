<?php


/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $filePath
 * @property integer $itemId
 * @property integer $isMain
 * @property string $modelName
 * @property string $urlAlias
 */

namespace common\widgets\costaRico\yii2Images\models;

use yii\helpers\Url;
use \rico\yii2images\models\Image as ImageBase;

class Image extends ImageBase
{
    public function getUrl($size = false){
        $urlSize = ($size) ? '_'.$size : '';
        $url = Url::toRoute([
//            '/'.$this->getPrimaryKey().'/images/image-by-item-and-alias',
            '/yii2images/images/image-by-item-and-alias',
//            '/'.$this->getPrimaryKey(). '/image'. '/item/' . $this->modelName.$this->itemId,
            'item' => $this->modelName.$this->itemId,
            'dirtyAlias' =>  $this->urlAlias.$urlSize.'.'.$this->getExtension()
        ]);

        return $url;
    }

}
