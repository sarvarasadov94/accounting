<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocRecordCard;

/**
 * DocRecordCardSearch represents the model behind the search form of `app\models\DocRecordCard`.
 */
class DocRecordCardSearch extends DocRecordCard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'education_type_id', 'region_id', 'city_id', 'district_id', 'family_status_id', 'voenkomat_id', 'voenkomat_region_id', 'military_unit_id', 'validity_degree_id', 'rank_id', 'statewide_rank_id', 'creator', 'modifier'], 'integer'],
            [['pinfl', 'passport_seria', 'passport_number', 'photo_name', 'photo_path', 'first_name', 'last_name', 'patronymic', 'birth_date', 'birth_place', 'vus_number', 'vus_code', 'civilian_profession', 'work_place', 'phone_number', 'address', 'family_residence', 'vocation_date', 'certificate_seria', 'certificate_number', 'category', 'accounting_group', 'composition', 'rank_name_and_vus', 'team_number', 'by_vus', 'position', 'route_number', 'days_and_hours', 'point', 'prescription_issued', 'access_number', 'based_date', 'based_comment', 'secondment_conclusion', 'head_of_dep_conclusion', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'participation_in_battles', 'military_oath_taken_date', 'military_oath_taken_comment', 'awards', 'wounds', 'special_marks', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocRecordCard::find();

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
            'education_type_id' => $this->education_type_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'family_status_id' => $this->family_status_id,
            'voenkomat_id' => $this->voenkomat_id,
            'voenkomat_region_id' => $this->voenkomat_region_id,
            'military_unit_id' => $this->military_unit_id,
            'vocation_date' => $this->vocation_date,
            'validity_degree_id' => $this->validity_degree_id,
            'rank_id' => $this->rank_id,
            'statewide_rank_id' => $this->statewide_rank_id,
            'based_date' => $this->based_date,
            'military_oath_taken_date' => $this->military_oath_taken_date,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'pinfl', $this->pinfl])
            ->andFilterWhere(['ilike', 'passport_seria', $this->passport_seria])
            ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
            ->andFilterWhere(['ilike', 'photo_name', $this->photo_name])
            ->andFilterWhere(['ilike', 'photo_path', $this->photo_path])
            ->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
            ->andFilterWhere(['ilike', 'vus_number', $this->vus_number])
            ->andFilterWhere(['ilike', 'vus_code', $this->vus_code])
            ->andFilterWhere(['ilike', 'civilian_profession', $this->civilian_profession])
            ->andFilterWhere(['ilike', 'work_place', $this->work_place])
            ->andFilterWhere(['ilike', 'phone_number', $this->phone_number])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'family_residence', $this->family_residence])
            ->andFilterWhere(['ilike', 'certificate_seria', $this->certificate_seria])
            ->andFilterWhere(['ilike', 'certificate_number', $this->certificate_number])
            ->andFilterWhere(['ilike', 'category', $this->category])
            ->andFilterWhere(['ilike', 'accounting_group', $this->accounting_group])
            ->andFilterWhere(['ilike', 'composition', $this->composition])
            ->andFilterWhere(['ilike', 'rank_name_and_vus', $this->rank_name_and_vus])
            ->andFilterWhere(['ilike', 'team_number', $this->team_number])
            ->andFilterWhere(['ilike', 'by_vus', $this->by_vus])
            ->andFilterWhere(['ilike', 'position', $this->position])
            ->andFilterWhere(['ilike', 'route_number', $this->route_number])
            ->andFilterWhere(['ilike', 'days_and_hours', $this->days_and_hours])
            ->andFilterWhere(['ilike', 'point', $this->point])
            ->andFilterWhere(['ilike', 'prescription_issued', $this->prescription_issued])
            ->andFilterWhere(['ilike', 'access_number', $this->access_number])
            ->andFilterWhere(['ilike', 'based_comment', $this->based_comment])
            ->andFilterWhere(['ilike', 'secondment_conclusion', $this->secondment_conclusion])
            ->andFilterWhere(['ilike', 'head_of_dep_conclusion', $this->head_of_dep_conclusion])
            ->andFilterWhere(['ilike', 'height', $this->height])
            ->andFilterWhere(['ilike', 'head_circumference', $this->head_circumference])
            ->andFilterWhere(['ilike', 'uniform_size', $this->uniform_size])
            ->andFilterWhere(['ilike', 'shoe_size', $this->shoe_size])
            ->andFilterWhere(['ilike', 'participation_in_battles', $this->participation_in_battles])
            ->andFilterWhere(['ilike', 'military_oath_taken_comment', $this->military_oath_taken_comment])
            ->andFilterWhere(['ilike', 'awards', $this->awards])
            ->andFilterWhere(['ilike', 'wounds', $this->wounds])
            ->andFilterWhere(['ilike', 'special_marks', $this->special_marks]);

        return $dataProvider;
    }
}
