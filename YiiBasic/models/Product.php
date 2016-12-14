<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $ID
 * @property integer $userID
 * @property string $userPhone
 * @property string $ProductName
 * @property string $Price
 * @property string $Category
 * @property string $ImageURL
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['userID'], 'required'],
            [['userID'], 'integer'],
           // [['userPhone'], 'string', 'max' => 11],
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
            'ID' => 'Mã Sản Phẩm',
            'userID' => 'Mã Người Dùng',
            //'userPhone' => 'Số Điện Thoại',
            'ProductName' => 'Tên Sản Phẩm',
            'Price' => 'Giá (VND)',
            'Category' => 'Danh Mục',
            'ImageURL' => 'Hình Ảnh',
            'Detail' => 'Mô Tả',
        ];
    }
}
