<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocAcceptanceAndWithdrawalMarks;

/**
 * DocAcceptanceAndWithdrawalMarksSearch represents the model behind the search form of `app\models\DocAcceptanceAndWithdrawalMarks`.
 */
class DocAcceptanceAndWithdrawalMarksSearch extends DocAcceptanceAndWithdrawalMarks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'arrived_district_id', 'arrived_region_id', 'departed_district_id', 'departed_region_id', 'record_card_id', 'creator', 'modifier'], 'integer'],
            [['accepted_date', 'arrived', 'filmed_date', 'departed', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocAcceptanceAndWithdrawalMarks::find();

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
            'accepted_date' => $this->accepted_date,
            'arrived_district_id' => $this->arrived_district_id,
            'arrived_region_id' => $this->arrived_region_id,
            'filmed_date' => $this->filmed_date,
            'departed_district_id' => $this->departed_district_id,
            'departed_region_id' => $this->departed_region_id,
            'record_card_id' => $this->record_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'arrived', $this->arrived])
            ->andFilterWhere(['ilike', 'departed', $this->departed]);

        return $dataProvider;
    }
}
