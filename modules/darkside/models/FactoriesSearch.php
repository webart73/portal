<?php

namespace app\modules\darkside\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\darkside\models\Factories;

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
            [['id', 'user_id', 'compare'], 'integer'],
            [['factory_title', 'factory_desc', 'factory_address', 'factory_region', 'factory_country', 'factory_website', 'factory_email', 'factory_logo', 'website100'], 'safe'],
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
        $query = Factories::find();

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
            'compare' => $this->compare,
        ]);

        $query->andFilterWhere(['like', 'factory_title', $this->factory_title])
            ->andFilterWhere(['like', 'factory_desc', $this->factory_desc])
            ->andFilterWhere(['like', 'factory_address', $this->factory_address])
            ->andFilterWhere(['like', 'factory_region', $this->factory_region])
            ->andFilterWhere(['like', 'factory_country', $this->factory_country])
            ->andFilterWhere(['like', 'factory_website', $this->factory_website])
            ->andFilterWhere(['like', 'factory_email', $this->factory_email])
            ->andFilterWhere(['like', 'factory_logo', $this->factory_logo])
            ->andFilterWhere(['like', 'website100', $this->website100]);

        return $dataProvider;
    }
}
