<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocOfficersAndSoldiers;

/**
 * DocOfficersAndSoldiersSearch represents the model behind the search form of `app\models\DocOfficersAndSoldiers`.
 */
class DocOfficersAndSoldiersSearch extends DocOfficersAndSoldiers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'region_id', 'city_id', 'district_id', 'education_type_id', 'family_status_id', 'validity_degree_id', 'rank_id', 'military_unit_id', 'soldier_type_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'military_ticket_seria', 'military_ticket_number', 'issue_date', 'issued_by', 'birth_date', 'birth_place', 'address', 'phone_number', 'committee', 'civilian_profession', 'work_place', 'sport', 'criminal_record', 'military_service_type', 'accounting_category', 'accounting_group', 'vus', 'start_date', 'end_date', 'reserver_date', 'reserver_comment', 'oath_date', 'intended_to_command', 'intended_vus', 'enrollment_to_reservre', 'registration_date', 'date_of_deregistration', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'comment', 'gas_mask_size', 'special_number', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocOfficersAndSoldiers::find();

        // add conditions that should always apply here

        if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) {
            $dataProvider = new ActiveDataProvider([
                'query' => $query->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0']),
            ]);
        } else if (isset(User::findOne(Yii::$app->user->getId())->udo_id) && isset(User::findOne(Yii::$app->user->getId())->odo_id)) {
            $dataProvider = new ActiveDataProvider([
                'query' => $query->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0'])->andWhere(['udo_id' => User::findOne(Yii::$app->user->getId())->udo_id])->andWhere(['odo_id' => User::findOne(Yii::$app->user->getId())->odo_id]),
            ]);
        } else if (isset(User::findOne(Yii::$app->user->getId())->udo_id) && !isset(User::findOne(Yii::$app->user->getId())->odo_id)) {
            $dataProvider = new ActiveDataProvider([
                'query' => $query->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0'])->andWhere(['udo_id' => User::findOne(Yii::$app->user->getId())->udo_id]),
            ]);
        } else {
            $dataProvider = new ActiveDataProvider([
                'query' => $query->where(['deletion_mark' => '0'])->andWhere(['deletion_mark' => null]),
            ]);
        }


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'issue_date' => $this->issue_date,
            'birth_date' => $this->birth_date,
            'nationality_id' => $this->nationality_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'education_type_id' => $this->education_type_id,
            'family_status_id' => $this->family_status_id,
            'validity_degree_id' => $this->validity_degree_id,
            'rank_id' => $this->rank_id,
            'military_unit_id' => $this->military_unit_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'reserver_date' => $this->reserver_date,
            'oath_date' => $this->oath_date,
            'registration_date' => $this->registration_date,
            'date_of_deregistration' => $this->date_of_deregistration,
            'soldier_type_id' => $this->soldier_type_id,
            'conscript_id' => $this->conscript_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'military_ticket_seria', $this->military_ticket_seria])
            ->andFilterWhere(['ilike', 'military_ticket_number', $this->military_ticket_number])
            ->andFilterWhere(['ilike', 'issued_by', $this->issued_by])
            ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'phone_number', $this->phone_number])
            ->andFilterWhere(['ilike', 'committee', $this->committee])
            ->andFilterWhere(['ilike', 'civilian_profession', $this->civilian_profession])
            ->andFilterWhere(['ilike', 'work_place', $this->work_place])
            ->andFilterWhere(['ilike', 'sport', $this->sport])
            ->andFilterWhere(['ilike', 'criminal_record', $this->criminal_record])
            ->andFilterWhere(['ilike', 'military_service_type', $this->military_service_type])
            ->andFilterWhere(['ilike', 'accounting_category', $this->accounting_category])
            ->andFilterWhere(['ilike', 'accounting_group', $this->accounting_group])
            ->andFilterWhere(['ilike', 'vus', $this->vus])
            ->andFilterWhere(['ilike', 'reserver_comment', $this->reserver_comment])
            ->andFilterWhere(['ilike', 'intended_to_command', $this->intended_to_command])
            ->andFilterWhere(['ilike', 'intended_vus', $this->intended_vus])
            ->andFilterWhere(['ilike', 'enrollment_to_reservre', $this->enrollment_to_reservre])
            ->andFilterWhere(['ilike', 'height', $this->height])
            ->andFilterWhere(['ilike', 'head_circumference', $this->head_circumference])
            ->andFilterWhere(['ilike', 'uniform_size', $this->uniform_size])
            ->andFilterWhere(['ilike', 'shoe_size', $this->shoe_size])
            ->andFilterWhere(['ilike', 'comment', $this->comment])
            ->andFilterWhere(['ilike', 'gas_mask_size', $this->gas_mask_size])
            ->andFilterWhere(['ilike', 'special_number', $this->special_number]);

        return $dataProvider;
    }
}
