<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocPassingMilitaryTraining;

/**
 * DocPassingMilitaryTrainingSearch represents the model behind the search form of `app\models\DocPassingMilitaryTraining`.
 */
class DocPassingMilitaryTrainingSearch extends DocPassingMilitaryTraining
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'military_service_card_id', 'creator', 'modifier'], 'integer'],
            [['training_name', 'training_date', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocPassingMilitaryTraining::find();

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
            'training_date' => $this->training_date,
            'military_service_card_id' => $this->military_service_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'training_name', $this->training_name]);

        return $dataProvider;
    }
}
