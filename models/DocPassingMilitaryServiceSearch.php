<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocPassingMilitaryService;

/**
 * DocPassingMilitaryServiceSearch represents the model behind the search form of `app\models\DocPassingMilitaryService`.
 */
class DocPassingMilitaryServiceSearch extends DocPassingMilitaryService
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'military_unit_id', 'record_card_id', 'creator', 'modifier'], 'integer'],
            [['position', 'vus_number', 'start_date', 'end_date', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocPassingMilitaryService::find();

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
            'military_unit_id' => $this->military_unit_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'record_card_id' => $this->record_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'position', $this->position])
            ->andFilterWhere(['ilike', 'vus_number', $this->vus_number]);

        return $dataProvider;
    }
}
