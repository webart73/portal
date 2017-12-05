<?php

namespace app\models;


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

    public function getRegions()
    {
        return $this->hasOne(Regions::className(), ['id' => 'parentId']);
    }

    public function getFactories()
    {
        return $this->hasMany(Factories::className(), ['factoryRegion' => 'id'])
            ->where(['factoryShow' => 1]);
    }

    public static function getTree($id = 0)
    {
        if ($id) {
            $regions = Regions::find()
                ->indexBy('id')
                ->where(['id' => $id])
                ->orWhere(['parentId' => $id])
                ->with(['factories'])
                ->asArray()->all();
        } else {
            $regions = Regions::find()
                ->indexBy('id')
                ->with(['factories'])
                ->asArray()->all();
        }
        $tree = [];
        foreach ($regions as $item => &$node) {
            if (!$node['parentId'] or $node['id'] == $id) {
                $tree[$item] =& $node;
            } else {
                $regions[$node['parentId']]['childs'][$node['id']] = &$node;
                $regions[$node['parentId']]['childs'][$item]['value'] = count($regions[$node['parentId']]['childs'][$item]['factories']);
            }
        }
        foreach ($tree as &$region) {
            $sum = 0;
            if (isset($region['childs'])) {
                foreach ($region['childs'] as $town) {
                    $sum += $town['value'];
                }
                echo $sum;
                $region['value'] = $sum;
            }
        }
        return $tree;
    }

    /**
     * @inheritdoc
     */
    public
    function rules()
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
    public
    function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentId' => 'Parent ID',
            'regionTitle' => 'Region Title',
        ];
    }
}
