<?php

namespace app\models;

use Yii;
use Yii\base\Model;

/**
 * This is the model class for table "user".
 *
 * @property integer $ID
 * @property string $username
 * @property string $password
 * @property string $authKey
 */
class SignupForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $username;
    public $password;
    public $authKey;
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
            [['username', 'password', 'authKey'], 'required'],
            [['username'], 'string', 'max' => 11],
            [['password'], 'string', 'max' => 32],
            [['authKey'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            //'authKey' => 'Auth Key',
        ];
    }
    public function signup()
    {
        if($this->validate())
        {
            $user = new Account();
            $user->username = $this->username;
            $user->password = $this->password;
            //$user->authKey = $this->authKey;
            $user->save();
            return $user;
        }
        return null;
    }

}
