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
    public $email;
    public $telephone;
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
            [['password'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 60],
            [['telephone'], 'string', 'max' => 11],
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
    public function signup()
    {
        if($this->validate())
        {
            $user = new Account();
            $user->username = $this->username;
            $user->password = $this->password;
            $user->email = $this->email;
            $user->telephone = $this->telephone;
            $user->save();
            return $user;
        }
        return null;
    }

}
