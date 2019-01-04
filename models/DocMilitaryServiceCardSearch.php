<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocMilitaryServiceCard;

/**
 * DocMilitaryServiceCardSearch represents the model behind the search form of `app\models\DocMilitaryServiceCard`.
 */
class DocMilitaryServiceCardSearch extends DocMilitaryServiceCard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'citizenship_id', 'family_status_id', 'rank_id', 'reserve_id', 'region_id', 'city_id', 'district_id', 'is_registered_odo','udo_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'personal_number', 'birth_date', 'birth_place', 'military_special', 'foreign_lang_id', 'participation_in_battles', 'photo_name', 'photo_path', 'drafted_to_armed_forces', 'continuation_of_service', 'med_comission_result', 'category', 'intended', 'work_place', 'address', 'ld_number', 'is_registered_date', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocMilitaryServiceCard::find();

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
            'birth_date' => $this->birth_date,
            'nationality_id' => $this->nationality_id,
            'citizenship_id' => $this->citizenship_id,
            'family_status_id' => $this->family_status_id,
            'rank_id' => $this->rank_id,
            'reserve_id' => $this->reserve_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'is_registered_odo' => $this->is_registered_odo,
            'udo_id' => $this->udo_id,
            'is_registered_date' => $this->is_registered_date,
            'conscript_id' => $this->conscript_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'personal_number', $this->personal_number])
            ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
            ->andFilterWhere(['ilike', 'military_special', $this->military_special])
            ->andFilterWhere(['ilike', 'foreign_lang_id', $this->foreign_lang_id])
            ->andFilterWhere(['ilike', 'participation_in_battles', $this->participation_in_battles])
            ->andFilterWhere(['ilike', 'photo_name', $this->photo_name])
            ->andFilterWhere(['ilike', 'photo_path', $this->photo_path])
            ->andFilterWhere(['ilike', 'drafted_to_armed_forces', $this->drafted_to_armed_forces])
            ->andFilterWhere(['ilike', 'continuation_of_service', $this->continuation_of_service])
            ->andFilterWhere(['ilike', 'med_comission_result', $this->med_comission_result])
            ->andFilterWhere(['ilike', 'category', $this->category])
            ->andFilterWhere(['ilike', 'intended', $this->intended])
            ->andFilterWhere(['ilike', 'work_place', $this->work_place])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'ld_number', $this->ld_number]);

        return $dataProvider;
    }
}
