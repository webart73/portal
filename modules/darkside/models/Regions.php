<?php

namespace app\modules\darkside\models;


/**
 * This is the model class for table "dvg73_regions".
 *
 * @property string $id
 * @property string $parentId
 * @property string $regionTitle
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
            [['parentId'], 'required'],
            [['parentId'], 'integer'],
            [['regionTitle'], 'string', 'max' => 32],
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
            'regionTitle' => 'Region Title',
        ];
    }
}
