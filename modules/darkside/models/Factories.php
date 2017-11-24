<?php

namespace app\modules\darkside\models;

use Yii;

/**
 * This is the model class for table "dvg73_factories".
 *
 * @property string $id
 * @property string $user_id
 * @property string $factory_title
 * @property string $factory_desc
 * @property string $factory_address
 * @property string $factory_region
 * @property string $factory_country
 * @property string $factory_website
 * @property string $factory_email
 * @property string $factory_logo
 * @property string $website100
 * @property integer $compare
 */
class Factories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_factories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'factory_title', 'factory_desc', 'factory_email'], 'required'],
            [['user_id', 'compare'], 'integer'],
            [['factory_desc'], 'string'],
            [['factory_title', 'factory_address', 'website100'], 'string', 'max' => 255],
            [['factory_region'], 'string', 'max' => 64],
            [['factory_country'], 'string', 'max' => 16],
            [['factory_website', 'factory_email', 'factory_logo'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'factory_title' => 'Название',
            'factory_desc' => 'Описание',
            'factory_address' => 'Адрес',
            'factory_region' => 'Регион',
            'factory_country' => 'Страна',
            'factory_website' => 'Сайт',
            'factory_email' => 'Email',
            'factory_logo' => 'Логотип',
            'website100' => 'Website100',
            'compare' => 'Compare',
        ];
    }
}
