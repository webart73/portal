<?php

namespace app\models;

use Yii;

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

    public static function getTree()
    {
        $regions = Regions::find()->indexBy('id')->asArray()->all();
        foreach ($regions as &$region) {
            $region['value'] = Factories::find()->where(['factoryRegion' => $region ['id']])->count();
            if (0 < $region['value']) {
                $regions[$region['parentId']]['value'] += $region['value'];
            }
        }
        $tree = [];
        foreach ($regions as $id => &$node) {
            if (!$node['parentId'])
                $tree[$id] =& $node;
            else
                $regions[$node['parentId']]['childs'][$node['id']] = &$node;
        }
        return $tree;
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
