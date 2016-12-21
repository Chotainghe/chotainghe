<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $ID
 * @property string $username
 * @property string $password
 * @property string $authKey
 */
class Account extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'telephone', 'password', 'email'], 'required'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'min' => 8],
            [['email'], 'email'],
            [['telephone'], 'number', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'telephone' => 'Telephone',
        ];
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->email;
    }
    

    /**
     * @inheritdoc
     */
    public function validateAuthKey($email)
    {
        return $this->email === $email;
    }
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       throw new \yii\base\NotSupportedException();
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
    }
}
