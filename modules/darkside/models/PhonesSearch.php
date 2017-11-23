<?php

namespace app\modules\darkside\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\darkside\models\Phones;

/**
 * PhonesSearch represents the model behind the search form about `app\modules\darkside\models\Phones`.
 */
class PhonesSearch extends Phones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'factory_id'], 'integer'],
            [['factory_phone', 'phone_desc'], 'safe'],
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
        $query = Phones::find();

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
            'factory_id' => $this->factory_id,
        ]);

        $query->andFilterWhere(['like', 'factory_phone', $this->factory_phone])
            ->andFilterWhere(['like', 'phone_desc', $this->phone_desc]);

        return $dataProvider;
    }
}
