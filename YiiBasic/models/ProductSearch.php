<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['ID', 'phone', 'ProductName', 'Price', 'Category', 'ImageURL', 'Detail'], 'required'],
            [['ID'], 'integer'],
            [['ProductName', 'Price', 'Category', 'ImageURL', 'Detail', 'phone'], 'safe'],
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
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder'=>['ID'=>SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'user' => $this->user,
        ]);

        $query->andFilterWhere(['like', 'ProductName', $this->ProductName]);
            // ->andFilterWhere(['like', 'Price', $this->Price])
            // ->andFilterWhere(['like', 'Category', $this->Category])
            // ->andFilterWhere(['like', 'ImageURL', $this->ImageURL]);

        return $dataProvider;
    }
}
