<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocPreparationForArmedForces;

/**
 * DocPreparationForArmedForcesSearch represents the model behind the search form of `app\models\DocPreparationForArmedForces`.
 */
class DocPreparationForArmedForcesSearch extends DocPreparationForArmedForces
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'conscript_id', 'bloodgroup_id', 'rhfactor_id', 'creator', 'modifier'], 'integer'],
            [['receipt_of_basic_military', 'professional_fitness_conclusion', 'educational_establishment', 'specialty_received', 'study_date', 'startdate', 'study_period', 'enddate', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocPreparationForArmedForces::find();

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
            'study_date' => $this->study_date,
            'startdate' => $this->startdate,
            'enddate' => $this->enddate,
            'conscript_id' => $this->conscript_id,
            'bloodgroup_id' => $this->bloodgroup_id,
            'rhfactor_id' => $this->rhfactor_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'receipt_of_basic_military', $this->receipt_of_basic_military])
            ->andFilterWhere(['ilike', 'professional_fitness_conclusion', $this->professional_fitness_conclusion])
            ->andFilterWhere(['ilike', 'educational_establishment', $this->educational_establishment])
            ->andFilterWhere(['ilike', 'specialty_received', $this->specialty_received])
            ->andFilterWhere(['ilike', 'study_period', $this->study_period]);

        return $dataProvider;
    }
}
