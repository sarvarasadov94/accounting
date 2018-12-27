<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocTurnoutToBeSentToMilitaryUnit;

/**
 * DocTurnoutToBeSentToMilitaryUnitSearch represents the model behind the search form of `app\models\DocTurnoutToBeSentToMilitaryUnit`.
 */
class DocTurnoutToBeSentToMilitaryUnitSearch extends DocTurnoutToBeSentToMilitaryUnit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'military_unit_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['departure_date', 'military_team_number', 'disappear_reason', 'return_reason', 'passed_passport_seria', 'passed_passport_number', 'passed_passport_date', 'passed_certificate_seria', 'passed_certificate_number', 'passed_certificate_date', 'returned_passport_seria', 'returned_passport_number', 'returned_passport_date', 'returned_certificate_of_conscript_sector_seria', 'returned_certificate_of_conscript_sector_number', 'returned_certificate_of_conscript_sector_date', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocTurnoutToBeSentToMilitaryUnit::find();

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
            'departure_date' => $this->departure_date,
            'military_unit_id' => $this->military_unit_id,
            'passed_passport_date' => $this->passed_passport_date,
            'passed_certificate_date' => $this->passed_certificate_date,
            'returned_passport_date' => $this->returned_passport_date,
            'conscript_id' => $this->conscript_id,
            'returned_certificate_of_conscript_sector_date' => $this->returned_certificate_of_conscript_sector_date,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'military_team_number', $this->military_team_number])
            ->andFilterWhere(['ilike', 'disappear_reason', $this->disappear_reason])
            ->andFilterWhere(['ilike', 'return_reason', $this->return_reason])
            ->andFilterWhere(['ilike', 'passed_passport_seria', $this->passed_passport_seria])
            ->andFilterWhere(['ilike', 'passed_passport_number', $this->passed_passport_number])
            ->andFilterWhere(['ilike', 'passed_certificate_seria', $this->passed_certificate_seria])
            ->andFilterWhere(['ilike', 'passed_certificate_number', $this->passed_certificate_number])
            ->andFilterWhere(['ilike', 'returned_passport_seria', $this->returned_passport_seria])
            ->andFilterWhere(['ilike', 'returned_passport_number', $this->returned_passport_number])
            ->andFilterWhere(['ilike', 'returned_certificate_of_conscript_sector_seria', $this->returned_certificate_of_conscript_sector_seria])
            ->andFilterWhere(['ilike', 'returned_certificate_of_conscript_sector_number', $this->returned_certificate_of_conscript_sector_number]);

        return $dataProvider;
    }
}
