<?php

namespace app\models;

/**
 * This is the model class for table "dvg73_contacts".
 *
 * @property string $id
 * @property string $factoryId
 * @property integer $contactType
 * @property string $contactValue
 * @property string $contactDesc
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_contacts';
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
            [['factoryId', 'contactType', 'contactValue'], 'required'],
            [['factoryId', 'contactType'], 'integer'],
            [['contactValue', 'contactDesc'], 'string', 'max' => 128],
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
            'contactType' => 'Contact Type',
            'contactValue' => 'Contact Value',
            'contactDesc' => 'Contact Desc',
        ];
    }
}
