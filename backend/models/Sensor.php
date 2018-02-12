<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensor".
 *
 * @property integer $id_sensor
 * @property integer $kode_sensor
 * @property double $ph_sensor
 * @property double $temp_sensor
 */
class Sensor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sensor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_sensor'], 'required'],
            [['kode_sensor'], 'integer'],
            [['ph_sensor', 'temp_sensor'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sensor' => Yii::t('app', 'Id Sensor'),
            'kode_sensor' => Yii::t('app', 'Kode Sensor'),
            'ph_sensor' => Yii::t('app', 'Ph Sensor'),
            'temp_sensor' => Yii::t('app', 'Temp Sensor'),
        ];
    }
}
