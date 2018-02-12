<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "plant".
 *
 * @property integer $id_plant
 * @property string $name
 * @property string $type
 * @property double $ph
 * @property double $temp
 */
class Plant extends ActiveRecord implements IdentityInterface
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
            [['name', 'type','gbr_plant'], 'string', 'max' => 250]
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
            'gbr_plant' => Yii::t('app', 'Gbr Plant'),
        ];
    }

    /**
         * Finds an identity by the given ID.
         *
         * @param string|int $id the ID to be looked for
         * @return IdentityInterface|null the identity object that matches the given ID.
         */
        public static function findIdentity($id_user)
        {
            return static::findOne($id_user);
        }

        /**
         * Finds an identity by the given token.
         *
         * @param string $token the token to be looked for
         * @return IdentityInterface|null the identity object that matches the given token.
         */
        public static function findIdentityByAccessToken($token, $type = null)
        {
            return static::findOne(['auth_key' => $token]);
        }

        /**
         * @return int|string current user ID
         */
        public function getId()
        {
            return $this->id_user;
        }

        /**
         * @return string current user auth key
         */
        public function getAuthKey()
        {
            return $this->auth_key;
        }

        /**
         * @param string $authKey
         * @return bool if auth key is valid for current user
         */
        public function validateAuthKey($authKey)
        {
            return $this->getAuthKey() === $authKey;
        }
}
