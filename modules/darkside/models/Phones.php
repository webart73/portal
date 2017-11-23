<?php

namespace app\modules\darkside\models;

use Yii;

/**
 * This is the model class for table "dvg73_phones".
 *
 * @property string $id
 * @property string $factory_id
 * @property string $factory_phone
 * @property string $phone_desc
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factory_id'], 'required'],
            [['factory_id'], 'integer'],
            [['factory_phone', 'phone_desc'], 'string', 'max' => 32],
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
            'factory_phone' => 'Factory Phone',
            'phone_desc' => 'Phone Desc',
        ];
    }
}
