<?php

namespace app\modules\darkside\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

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
            [['id', 'factoryId', 'showProduct'], 'integer'],
            [['productTitle', 'productDesc', 'productImage', 'link100'], 'safe'],
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
            'factoryId' => $this->factoryId,
            'showProduct' => $this->showProduct,
        ]);

        $query->andFilterWhere(['like', 'productTitle', $this->productTitle])
            ->andFilterWhere(['like', 'productDesc', $this->productDesc])
            ->andFilterWhere(['like', 'productImage', $this->productImage])
            ->andFilterWhere(['like', 'link100', $this->link100]);

        return $dataProvider;
    }
}
