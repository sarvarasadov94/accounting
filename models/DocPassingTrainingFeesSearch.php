<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocPassingTrainingFees;

/**
 * DocPassingTrainingFeesSearch represents the model behind the search form of `app\models\DocPassingTrainingFees`.
 */
class DocPassingTrainingFeesSearch extends DocPassingTrainingFees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'year', 'days', 'record_card_id', 'creator', 'modifier'], 'integer'],
            [['military_unit_or_orgname', 'position', 'vus_number', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocPassingTrainingFees::find();

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
            'year' => $this->year,
            'days' => $this->days,
            'record_card_id' => $this->record_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'military_unit_or_orgname', $this->military_unit_or_orgname])
            ->andFilterWhere(['ilike', 'position', $this->position])
            ->andFilterWhere(['ilike', 'vus_number', $this->vus_number]);

        return $dataProvider;
    }
}
