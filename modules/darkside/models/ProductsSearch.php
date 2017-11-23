<?php

namespace app\modules\darkside\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\darkside\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\modules\darkside\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'factory_id'], 'integer'],
            [['product_title', 'product_desc', 'product_image', 'link100'], 'safe'],
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
        $query = Products::find();

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

        $query->andFilterWhere(['like', 'product_title', $this->product_title])
            ->andFilterWhere(['like', 'product_desc', $this->product_desc])
            ->andFilterWhere(['like', 'product_image', $this->product_image])
            ->andFilterWhere(['like', 'link100', $this->link100]);

        return $dataProvider;
    }
}
