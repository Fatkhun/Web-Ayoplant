<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "useraccount".
 *
 * @property integer $id_user
 * @property string $full_name
 * @property string $password
 * @property string $email
 * @property string $hp
 * @property string $auth_key
 * @property string $country
 * @property string $created_at
 * @property string $updated_at
 */
class Useraccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'useraccount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'password', 'email', 'hp', 'country'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['full_name', 'password', 'email', 'country'], 'string', 'max' => 250],
            [['hp', 'auth_key'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'full_name' => 'Full Name',
            'password' => 'Password',
            'email' => 'Email',
            'hp' => 'Hp',
            'auth_key' => 'Auth Key',
            'country' => 'Country',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
