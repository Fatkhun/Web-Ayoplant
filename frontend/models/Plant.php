<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plant".
 *
 * @property integer $id_plant
 * @property string $name
 * @property string $type
 * @property double $ph
 * @property double $temp
 */
class Plant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['ph', 'temp'], 'number'],
            [['name', 'type'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_plant' => Yii::t('app', 'Id Plant'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'ph' => Yii::t('app', 'Ph'),
            'temp' => Yii::t('app', 'Temp'),
        ];
    }
}
