<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\models\Useraccount;
use yii\db\Expression;

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

     // define("SCENARIO_CREATE", create);
    public $enableCsrfValidation = false;
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
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
    public function behaviors()
    {
        return [
                [
                    'class' => TimestampBehavior::className(),
                    'createdAtAttribute' => 'created_at',
                    'updatedAtAttribute' => 'updated_at',
                    'value' => new Expression('NOW()'),
                ],
            ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'password', 'email'], 'required'],
            [['full_name', 'password', 'email', 'country', 'gbr_profile'], 'string', 'max' => 250],
            [['hp'], 'string', 'max' => 12],
            [['auth_key'], 'string', 'max' => 25]
        ];
    }

    
    
    // public function scenario(){
    //     $scenarios = parent::scenarios();
    //     $scenarios['create'] = ['full_name', 'email', 'password', 'access_token'];
    //     return $scenarios;
    // }

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
            throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        }

        /**
         * Finds user by password reset token
         *
         * @param string $token password reset token
         * @return static|null
         */
        public static function findByPasswordResetToken($token)
        {
            if (!static::isPasswordResetTokenValid($token)) {
                return null;
            }

            return static::findOne([
                'password_reset_token' => $token,
                'status' => self::STATUS_ACTIVE,
            ]);
        }

        /**
         * Finds out if password reset token is valid
         *
         * @param string $token password reset token
         * @return boolean
         */
        public static function isPasswordResetTokenValid($token)
        {
            if (empty($token)) {
                return false;
            }

            $timestamp = (int) substr($token, strrpos($token, '_') + 1);
            $expire = Yii::$app->params['user.passwordResetTokenExpire'];
            return $timestamp + $expire >= time();
        }

        /**
         * Generates new password reset token
         */
        public function generatePasswordResetToken()
        {
            $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
        }

        /**
         * Removes password reset token
         */
        public function removePasswordResetToken()
        {
            $this->password_reset_token = null;
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

        public function beforeSave($insert)
            {
                if (parent::beforeSave($insert)) {
                    // if ($this->isNewRecord) {
                    //     $this->auth_key = \Yii::$app->security->generateRandomString();
                    // }
                    return true;
                }
                return false;
            }
}
