<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $ID
 * @property integer $userID
 * @property string $ProductName
 * @property string $Price
 * @property string $Category
 * @property string $ImageURL
 */
class Postnew extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $userID;
    public $ProductName;
    public $Category;
    public $Price;
    public $ImageURL;
    public $Detail;
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userID'], 'integer'],
            [['ProductName'], 'string', 'max' => 200],
            [['Price'], 'string', 'max' => 40],
            [['Category'], 'string', 'max' => 30],
            [['ImageURL'], 'string', 'max' => 100],
            [['Detail'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'userID' => 'User ID',
            'ProductName' => 'Product Name',
            'Price' => 'Price',
            'Category' => 'Category',
            'ImageURL' => 'Image Url',
            'Detail' => 'Detail',
        ];
    }
    public function postnew()
    {
        if($this->validate())
        {
            $user = new Product();
            $user->userID = $this->userID;
            $user->ProductName = $this->ProductName;
            $user->Category = $this->Category;
            $user->Price = $this->Price;
            $user->Detail = $this->Detail;
            $user->save();
            return $user;
        }
        return null;
    }

}
