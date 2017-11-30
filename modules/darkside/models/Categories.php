<?php

namespace app\modules\darkside\models;


/**
 * This is the model class for table "dvg73_categories".
 *
 * @property string $id
 * @property string $parentId
 * @property string $categoryTitle
 * @property string $categoryDesc
 * @property string $categoryImage
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_categories';
    }

    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parentId']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentId', 'categoryTitle'], 'required'],
            [['parentId'], 'integer'],
            [['categoryDesc'], 'string'],
            [['categoryTitle'], 'string', 'max' => 64],
            [['categoryImage'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentId' => 'Parent ID',
            'categoryTitle' => 'Category Title',
            'categoryDesc' => 'Category Desc',
            'categoryImage' => 'Category Image',
        ];
    }
}
