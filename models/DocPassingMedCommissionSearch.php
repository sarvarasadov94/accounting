<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocPassingMedCommission;

/**
 * DocPassingMedCommissionSearch represents the model behind the search form of `app\models\DocPassingMedCommission`.
 */
class DocPassingMedCommissionSearch extends DocPassingMedCommission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'restriction_degree_id', 'registered_on_d', 'suitable_restriction_degree_id', 'suitable_vdv_restriction_degree_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['protocol_number', 'protocol_date', 'height', 'weight', 'chest_volume', 'spirometry', 'registered_on_d_reason', 'suitable_for_military_service', 'suitable_for_military_service_vdv', 'unsuitable_for_military_service', 'delay_in_treatment', 'unsuitable_in_peace_time', 'unsuitable_with_exception', 'needs_deferment', 'intended', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocPassingMedCommission::find();

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
            'registered_on_d' => $this->registered_on_d,
            'suitable_restriction_degree_id' => $this->suitable_restriction_degree_id,
            'suitable_vdv_restriction_degree_id' => $this->suitable_vdv_restriction_degree_id,
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
            ->andFilterWhere(['ilike', 'registered_on_d_reason', $this->registered_on_d_reason])
            ->andFilterWhere(['ilike', 'suitable_for_military_service', $this->suitable_for_military_service])
            ->andFilterWhere(['ilike', 'suitable_for_military_service_vdv', $this->suitable_for_military_service_vdv])
            ->andFilterWhere(['ilike', 'unsuitable_for_military_service', $this->unsuitable_for_military_service])
            ->andFilterWhere(['ilike', 'delay_in_treatment', $this->delay_in_treatment])
            ->andFilterWhere(['ilike', 'unsuitable_in_peace_time', $this->unsuitable_in_peace_time])
            ->andFilterWhere(['ilike', 'unsuitable_with_exception', $this->unsuitable_with_exception])
            ->andFilterWhere(['ilike', 'needs_deferment', $this->needs_deferment])
            ->andFilterWhere(['ilike', 'intended', $this->intended]);

        return $dataProvider;
    }
}
