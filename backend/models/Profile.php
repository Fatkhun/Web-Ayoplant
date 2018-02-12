<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $place_of_birth
 * @property string $birthdate
 * @property string $gender
 * @property string $pic
 * @property string $bio
 * @property string $job_desc
 * @property string $fb
 * @property string $ig
 * @property string $ln
 * @property string $url
 * @property string $public_email
 * @property string $created_at
 * @property string $updated_at
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['first_name', 'last_name', 'place_of_birth', 'birthdate', 'gender', 'pic', 'bio', 'job_desc', 'fb', 'ig', 'ln', 'url', 'public_email'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'place_of_birth' => Yii::t('app', 'Place Of Birth'),
            'birthdate' => Yii::t('app', 'Birthdate'),
            'gender' => Yii::t('app', 'Gender'),
            'pic' => Yii::t('app', 'Pic'),
            'bio' => Yii::t('app', 'Bio'),
            'job_desc' => Yii::t('app', 'Job Desc'),
            'fb' => Yii::t('app', 'Fb'),
            'ig' => Yii::t('app', 'Ig'),
            'ln' => Yii::t('app', 'Ln'),
            'url' => Yii::t('app', 'Url'),
            'public_email' => Yii::t('app', 'Public Email'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getProfileIdLink() 
    { 
        $url = Url::to(['profile/update', 'id'=>$this->id]); 
        $options = []; 
        return Html::a($this->id, $url, $options); 
    } 
     
    public function getUser() 
    { 
        return $this->hasOne(User::className(), ['id' => 'user_id']); 
    } 
}
