<?php

namespace app\models;


/**
 * This is the model class for table "dvg73_products".
 *
 * @property string $id
 * @property string $factoryId
 * @property string $productTitle
 * @property string $productDesc
 * @property string $productImage
 * @property integer $showProduct
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

    public function getFactory(){
        return  $this->hasOne(Factories::className(),['id'=>'factoryId']);
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factoryId'], 'required'],
            [['factoryId', 'showProduct'], 'integer'],
            [['productDesc'], 'string'],
            [['productTitle', 'productImage'], 'string', 'max' => 128],
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
            'factoryId' => 'Factory ID',
            'productTitle' => 'Product Title',
            'productDesc' => 'Product Desc',
            'productImage' => 'Product Image',
            'showProduct' => 'Show Product',
            'link100' => 'Link100',
        ];
    }
}
