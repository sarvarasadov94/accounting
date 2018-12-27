<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocInfoAboutMedExaminations;

/**
 * DocInfoAboutMedExaminationsSearch represents the model behind the search form of `app\models\DocInfoAboutMedExaminations`.
 */
class DocInfoAboutMedExaminationsSearch extends DocInfoAboutMedExaminations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'record_card_id', 'creator', 'modifier'], 'integer'],
            [['pass_date', 'comission_name', 'comission_comment', 'comission_date', 'tore_examination', 'tore_examination_date', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocInfoAboutMedExaminations::find();

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
            'pass_date' => $this->pass_date,
            'comission_date' => $this->comission_date,
            'tore_examination_date' => $this->tore_examination_date,
            'record_card_id' => $this->record_card_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'comission_name', $this->comission_name])
            ->andFilterWhere(['ilike', 'comission_comment', $this->comission_comment])
            ->andFilterWhere(['ilike', 'tore_examination', $this->tore_examination]);

        return $dataProvider;
    }
}
