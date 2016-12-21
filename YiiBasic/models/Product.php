<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $user
 * @property string $phone
 * @property string $ProductName
 * @property string $Price
 * @property string $Category
 * @property string $ImageURL
 * @property string $Detail
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
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['user'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 11],
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
            'user' => 'Tên Người Bán',
            'phone' => 'Số Điện Thoại',
            'ProductName' => 'Tên Sản Phẩm',
            'Price' => 'Giá (VND)',
            'Category' => 'Danh Mục',
            'ImageURL' => 'Hình Ảnh',
            'Detail' => 'Mô Tả',
        ];
    }
}
