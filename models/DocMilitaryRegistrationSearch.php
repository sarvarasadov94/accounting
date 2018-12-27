<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocMilitaryRegistration;

/**
 * DocMilitaryRegistrationSearch represents the model behind the search form of `app\models\DocMilitaryRegistration`.
 */
class DocMilitaryRegistrationSearch extends DocMilitaryRegistration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'conscript_id', 'preparation_for_armed_forces_id', 'creator', 'modifier'], 'integer'],
            [['admitted', 'removed', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocMilitaryRegistration::find();

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
            'conscript_id' => $this->conscript_id,
            'preparation_for_armed_forces_id' => $this->preparation_for_armed_forces_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'admitted', $this->admitted])
            ->andFilterWhere(['ilike', 'removed', $this->removed]);

        return $dataProvider;
    }
}
