<?php

namespace app\modules\darkside\models;

use Yii;

/**
 * This is the model class for table "dvg73_regions".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $region_title
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['region_title'], 'string', 'max' => 32],
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
            'region_title' => 'Region Title',
        ];
    }
}
