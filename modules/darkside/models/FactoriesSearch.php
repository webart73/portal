<?php

namespace app\modules\darkside\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * FactoriesSearch represents the model behind the search form about `app\modules\darkside\models\Factories`.
 */
class FactoriesSearch extends Factories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'factoryType', 'factoryHits', 'factoryRating', 'bannerTop', 'bannerMain', 'bannerCategory', 'bannerRegion', 'factoryShow', 'compare'], 'integer'],
            [['factoryTitle', 'factoryDesc', 'factoryAddress', 'factoryRegion', 'factoryCountry', 'factoryWebsite', 'factoryLogo', 'website100'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Factories::find()->with('region');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'factoryType' => $this->factoryType,
            'factoryHits' => $this->factoryHits,
            'factoryRating' => $this->factoryRating,
            'bannerTop' => $this->bannerTop,
            'bannerMain' => $this->bannerMain,
            'bannerCategory' => $this->bannerCategory,
            'bannerRegion' => $this->bannerRegion,
            'factoryShow' => $this->factoryShow,
            'compare' => $this->compare,
        ]);

        $query->andFilterWhere(['like', 'factoryTitle', $this->factoryTitle])
            ->andFilterWhere(['like', 'factoryDesc', $this->factoryDesc])
            ->andFilterWhere(['like', 'factoryAddress', $this->factoryAddress])
            ->andFilterWhere(['like', 'factoryRegion', $this->factoryRegion])
            ->andFilterWhere(['like', 'factoryCountry', $this->factoryCountry])
            ->andFilterWhere(['like', 'factoryWebsite', $this->factoryWebsite])
            ->andFilterWhere(['like', 'factoryLogo', $this->factoryLogo])
            ->andFilterWhere(['like', 'website100', $this->website100]);

        return $dataProvider;
    }
}
