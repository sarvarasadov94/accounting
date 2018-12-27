<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocCommissionResults;

/**
 * DocCommissionResultsSearch represents the model behind the search form of `app\models\DocCommissionResults`.
 */
class DocCommissionResultsSearch extends DocCommissionResults
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'restriction_degree_id', 'registered_ond', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['protocol_number', 'protocol_date', 'height', 'weight', 'chest_volume', 'spirometry', 'registered_ond_reason', 'suitable_for_military_service', 'suitable_for_military_service_vdv', 'intended_for_vs', 'unsuitable_in_peace_time', 'unsuitable_with_exception', 'send_for_treatment', 'provide_reprieve', 'enddate_of_reprieve', 'appearance_date_to_send', 'commission_chairman', 'commission_members', 'head_of_dep', 'representative_nuroniy', 'representative_kamolot', 'representative_maxalla', 'representative1', 'representative2', 'senior_doctor', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocCommissionResults::find();

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
            'protocol_date' => $this->protocol_date,
            'restriction_degree_id' => $this->restriction_degree_id,
            'registered_ond' => $this->registered_ond,
            'enddate_of_reprieve' => $this->enddate_of_reprieve,
            'appearance_date_to_send' => $this->appearance_date_to_send,
            'conscript_id' => $this->conscript_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'protocol_number', $this->protocol_number])
            ->andFilterWhere(['ilike', 'height', $this->height])
            ->andFilterWhere(['ilike', 'weight', $this->weight])
            ->andFilterWhere(['ilike', 'chest_volume', $this->chest_volume])
            ->andFilterWhere(['ilike', 'spirometry', $this->spirometry])
            ->andFilterWhere(['ilike', 'registered_ond_reason', $this->registered_ond_reason])
            ->andFilterWhere(['ilike', 'suitable_for_military_service', $this->suitable_for_military_service])
            ->andFilterWhere(['ilike', 'suitable_for_military_service_vdv', $this->suitable_for_military_service_vdv])
            ->andFilterWhere(['ilike', 'intended_for_vs', $this->intended_for_vs])
            ->andFilterWhere(['ilike', 'unsuitable_in_peace_time', $this->unsuitable_in_peace_time])
            ->andFilterWhere(['ilike', 'unsuitable_with_exception', $this->unsuitable_with_exception])
            ->andFilterWhere(['ilike', 'send_for_treatment', $this->send_for_treatment])
            ->andFilterWhere(['ilike', 'provide_reprieve', $this->provide_reprieve])
            ->andFilterWhere(['ilike', 'commission_chairman', $this->commission_chairman])
            ->andFilterWhere(['ilike', 'commission_members', $this->commission_members])
            ->andFilterWhere(['ilike', 'head_of_dep', $this->head_of_dep])
            ->andFilterWhere(['ilike', 'representative_nuroniy', $this->representative_nuroniy])
            ->andFilterWhere(['ilike', 'representative_kamolot', $this->representative_kamolot])
            ->andFilterWhere(['ilike', 'representative_maxalla', $this->representative_maxalla])
            ->andFilterWhere(['ilike', 'representative1', $this->representative1])
            ->andFilterWhere(['ilike', 'representative2', $this->representative2])
            ->andFilterWhere(['ilike', 'senior_doctor', $this->senior_doctor]);

        return $dataProvider;
    }
}
