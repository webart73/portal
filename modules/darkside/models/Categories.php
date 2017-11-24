<?php

namespace app\modules\darkside\models;

/**
 * This is the model class for table "dvg73_categories".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $category_title
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
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'category_title'], 'required'],
            [['parent_id'], 'integer'],
            [['category_title'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'category_title' => 'Category Title',
        ];
    }
}
