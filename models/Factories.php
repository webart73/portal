<?php

namespace app\models;


/**
 * This is the model class for table "dvg73_factories".
 *
 * @property string $id
 * @property string $user_id
 * @property string $factoryTitle
 * @property string $factoryDesc
 * @property string $factoryAddress
 * @property string $factoryRegion
 * @property string $factoryCountry
 * @property string $factoryWebsite
 * @property string $factoryLogo
 * @property integer $factoryType
 * @property string $factoryHits
 * @property integer $factoryRating
 * @property integer $bannerTop
 * @property integer $bannerMain
 * @property integer $bannerCategory
 * @property integer $bannerRegion
 * @property integer $factoryShow
 * @property integer $compare
 * @property string $website100
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

    public function getContacts()
    {
        return $this->hasMany(Contacts::className(), ['factoryId' => 'id']);
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['factoryId' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'factoryTitle', 'factoryDesc'], 'required'],
            [['user_id', 'factoryType', 'factoryHits', 'factoryRating', 'bannerTop', 'bannerMain', 'bannerCategory', 'bannerRegion', 'factoryShow', 'compare'], 'integer'],
            [['factoryDesc'], 'string'],
            [['factoryTitle', 'factoryAddress', 'website100'], 'string', 'max' => 255],
            [['factoryRegion'], 'string', 'max' => 64],
            [['factoryCountry'], 'string', 'max' => 16],
            [['factoryWebsite', 'factoryLogo'], 'string', 'max' => 128],
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
            'factoryTitle' => 'Factory Title',
            'factoryDesc' => 'Factory Desc',
            'factoryAddress' => 'Factory Address',
            'factoryRegion' => 'Factory Region',
            'factoryCountry' => 'Factory Country',
            'factoryWebsite' => 'Factory Website',
            'factoryLogo' => 'Factory Logo',
            'factoryType' => 'Factory Type',
            'factoryHits' => 'Factory Hits',
            'factoryRating' => 'Factory Rating',
            'bannerTop' => 'Banner Top',
            'bannerMain' => 'Banner Main',
            'bannerCategory' => 'Banner Category',
            'bannerRegion' => 'Banner Region',
            'factoryShow' => 'Factory Show',
            'compare' => 'Compare',
            'website100' => 'Website100',
        ];
    }
}
