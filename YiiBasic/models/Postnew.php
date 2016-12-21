<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $user
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
    public $image;
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
            [['user', 'phone', 'ProductName', 'Price', 'Category', 'ImageURL', 'Detail'], 'required'],
            [['user'], 'integer'],
            [['phone'], 'string', 'max' => 11],
            [['ProductName'], 'string', 'max' => 200],
            [['Price', ], 'string', 'max' => 40],
            [['Category'], 'string', 'max' => 30],
            [['Detail'], 'string', 'max' => 500],
            [['ImageURL'], 'string', 'max' => 100],
            [['image'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user' => 'Tên Người Dùng',
            'phone' => 'Số điện thoại',
            'ProductName' => 'Tên Sản Phẩm',
            'Price' => 'Giá',
            'Category' => 'Danh Mục',
            'image' => 'Hình Ảnh',
            'Detail' => 'Mô tả',
        ];
    }

}
