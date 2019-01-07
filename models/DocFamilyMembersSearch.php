<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocFamilyMembers;

/**
 * DocFamilyMembersSearch represents the model behind the search form of `app\models\DocFamilyMembers`.
 */
class DocFamilyMembersSearch extends DocFamilyMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'relative_type_id', 'year_of_birth', 'conscript_id', 'military_service_card_id', 'relative_group_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'address', 'work_place', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocFamilyMembers::find();

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
            'relative_type_id' => $this->relative_type_id,
            'year_of_birth' => $this->year_of_birth,
            'conscript_id' => $this->conscript_id,
            'military_service_card_id' => $this->military_service_card_id,
            'relative_group_id' => $this->relative_group_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'work_place', $this->work_place]);

        return $dataProvider;
    }
}
