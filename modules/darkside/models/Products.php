<?php

namespace app\modules\darkside\models;

use Yii;

/**
 * This is the model class for table "dvg73_products".
 *
 * @property string $id
 * @property string $factory_id
 * @property string $product_title
 * @property string $product_desc
 * @property string $product_image
 * @property string $link100
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factory_id'], 'required'],
            [['factory_id'], 'integer'],
            [['product_desc'], 'string'],
            [['product_title', 'product_image'], 'string', 'max' => 128],
            [['link100'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'factory_id' => 'Factory ID',
            'product_title' => 'Product Title',
            'product_desc' => 'Product Desc',
            'product_image' => 'Product Image',
            'link100' => 'Link100',
        ];
    }
}
