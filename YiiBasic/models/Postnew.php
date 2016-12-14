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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'userID' => 'Số điện thoại',
            'ProductName' => 'Tên sản phẩm',
            'Price' => 'Giá',
            'Category' => 'Danh mục',
            'ImageURL' => 'Link hình ảnh',
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
            $user->save();
            return $user;
        }
        return null;
    }

}
