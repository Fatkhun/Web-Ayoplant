<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "useraccount".
 *
 * @property integer $id_user
 * @property string $full_name
 * @property string $password
 * @property string $email
 * @property string $ttl
 * @property string $hp
 * @property string $access_token
 * @property string $auth_key
 * @property string $country
 */
class Useraccount extends ActiveRecord implements IdentityInterface
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
            [['full_name', 'password', 'email'], 'required'],
            [['full_name', 'password', 'email', 'country','gbr_profile'], 'string', 'max' => 250],
            [['hp'], 'string', 'max' => 12],
            [['auth_key'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => Yii::t('app', 'Id User'),
            'full_name' => Yii::t('app', 'Full Name'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'hp' => Yii::t('app', 'Hp'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'country' => Yii::t('app', 'Country'),
            'gbr_profile' => Yii::t('app', 'Gbr Profile'),
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
            return static::findOne(['access_token' => $token]);
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
