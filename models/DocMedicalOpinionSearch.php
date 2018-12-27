<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocMedicalOpinion;

/**
 * DocMedicalOpinionSearch represents the model behind the search form of `app\models\DocMedicalOpinion`.
 */
class DocMedicalOpinionSearch extends DocMedicalOpinion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'doctor_type_id', 'validity_degree_id', 'restriction_degree_id', 'passing_med_commission_id', 'commission_results_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['validity_comment', 'restriction_comment', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocMedicalOpinion::find();

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
            'doctor_type_id' => $this->doctor_type_id,
            'validity_degree_id' => $this->validity_degree_id,
            'restriction_degree_id' => $this->restriction_degree_id,
            'passing_med_commission_id' => $this->passing_med_commission_id,
            'commission_results_id' => $this->commission_results_id,
            'conscript_id' => $this->conscript_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'validity_comment', $this->validity_comment])
            ->andFilterWhere(['ilike', 'restriction_comment', $this->restriction_comment]);

        return $dataProvider;
    }
}
