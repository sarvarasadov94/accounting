<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocMilitaryRanks;

/**
 * DocMilitaryRanksSearch represents the model behind the search form of `app\models\DocMilitaryRanks`.
 */
class DocMilitaryRanksSearch extends DocMilitaryRanks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rank_id', 'military_service_card_id', 'creator', 'modifier'], 'integer'],
            [['whose_order', 'order_number', 'order_date', 'comment', 'created_at', 'modified_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DocMilitaryRanks::find();

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
            'rank_id' => $this->rank_id,
            'order_date' => $this->order_date,
            'military_service_card_id' => $this->military_service_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'whose_order', $this->whose_order])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number])
            ->andFilterWhere(['ilike', 'comment', $this->comment]);

        return $dataProvider;
    }
}
