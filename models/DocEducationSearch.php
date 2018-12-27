<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocEducation;

/**
 * DocEducationSearch represents the model behind the search form of `app\models\DocEducation`.
 */
class DocEducationSearch extends DocEducation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'education_type_id', 'educational_institution_id', 'course_number', 'conscript_id', 'military_service_card_id', 'creator', 'modifier'], 'integer'],
            [['study_place', 'study_period', 'enddate', 'specialty', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocEducation::find();

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
            'education_type_id' => $this->education_type_id,
            'educational_institution_id' => $this->educational_institution_id,
            'enddate' => $this->enddate,
            'course_number' => $this->course_number,
            'conscript_id' => $this->conscript_id,
            'military_service_card_id' => $this->military_service_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'study_place', $this->study_place])
            ->andFilterWhere(['ilike', 'study_period', $this->study_period])
            ->andFilterWhere(['ilike', 'specialty', $this->specialty]);

        return $dataProvider;
    }
}
