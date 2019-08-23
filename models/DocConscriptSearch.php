<?php

namespace app\models;

use Faker\Provider\zh_TW\DateTime;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocConscript;
use yii;

/**
 * DocConscriptSearch represents the model behind the search form of `app\models\DocConscript`.
 */
class DocConscriptSearch extends DocConscript
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'native_lang_id', 'foreign_lang_id', 'social_positionid', 'family_statusid', 'health_condition_id', 'city_id', 'district_id', 'street_id', 'region_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'passport_seria', 'passport_number', 'passport_given_date', 'passport_issued_by', 'birth_date', 'birth_place', 'pinfl', 'address', 'phone_number', 'state_lang', 'work_place', 'civilian_profession', 'committee', 'study_place', 'sport_type', 'criminal_record', 'criminal_record_relatives', 'doc_number', 'family_residence', 'sports_category', 'relatives_connect', 'fitness_degree', 'postponement', 'comment', 'photo_name', 'photo_path', 'created_at', 'modified_at'], 'safe'],
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
        $query = DocConscript::find();

        // add conditions that should always apply here
        if (Yii::$app->user->can('Guest')) {

            $this->load($params);

            if (($this->first_name != null || $this->first_name != '') || ($this->last_name != null || $this->last_name != '') || ($this->patronymic != null || $this->patronymic != '')) {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0']),
                ]);
                if (!$this->validate()) {
                    return $dataProvider;
                }

                $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
                    ->andFilterWhere(['ilike', 'last_name', $this->last_name])
                    ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
                    ->andFilterWhere(['ilike', 'passport_seria', $this->passport_seria])
                    ->andFilterWhere(['ilike', 'passport_number', $this->passport_number]);

                return $dataProvider;
            } else {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query->where(['deletion_mark' => null])->andWhere(['id' => '0']),
                ]);
                return $dataProvider;
            }
        } else {

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
                'passport_given_date' => $this->passport_given_date,
                'birth_date' => $this->birth_date,
                'nationality_id' => $this->nationality_id,
                'native_lang_id' => $this->native_lang_id,
                'foreign_lang_id' => $this->foreign_lang_id,
                'social_positionid' => $this->social_positionid,
                'family_statusid' => $this->family_statusid,
                'health_condition_id' => $this->health_condition_id,
                'city_id' => $this->city_id,
                'district_id' => $this->district_id,
                'street_id' => $this->street_id,
                'region_id' => $this->region_id,
                'creator' => $this->creator,
                'created_at' => $this->created_at,
                'modifier' => $this->modifier,
                'modified_at' => $this->modified_at,
            ]);

            $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
                ->andFilterWhere(['ilike', 'last_name', $this->last_name])
                ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
                ->andFilterWhere(['ilike', 'passport_seria', $this->passport_seria])
                ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
                ->andFilterWhere(['ilike', 'passport_issued_by', $this->passport_issued_by])
                ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
                ->andFilterWhere(['ilike', 'pinfl', $this->pinfl])
                ->andFilterWhere(['ilike', 'address', $this->address])
                ->andFilterWhere(['ilike', 'phone_number', $this->phone_number])
                ->andFilterWhere(['ilike', 'state_lang', $this->state_lang])
                ->andFilterWhere(['ilike', 'work_place', $this->work_place])
                ->andFilterWhere(['ilike', 'civilian_profession', $this->civilian_profession])
                ->andFilterWhere(['ilike', 'committee', $this->committee])
                ->andFilterWhere(['ilike', 'study_place', $this->study_place])
                ->andFilterWhere(['ilike', 'sport_type', $this->sport_type])
                ->andFilterWhere(['ilike', 'criminal_record', $this->criminal_record])
                ->andFilterWhere(['ilike', 'criminal_record_relatives', $this->criminal_record_relatives])
                ->andFilterWhere(['ilike', 'doc_number', $this->doc_number])
                ->andFilterWhere(['ilike', 'family_residence', $this->family_residence])
                ->andFilterWhere(['ilike', 'sports_category', $this->sports_category])
                ->andFilterWhere(['ilike', 'relatives_connect', $this->relatives_connect])
                ->andFilterWhere(['ilike', 'fitness_degree', $this->fitness_degree])
                ->andFilterWhere(['ilike', 'postponement', $this->postponement])
                ->andFilterWhere(['ilike', 'comment', $this->comment])
                ->andFilterWhere(['ilike', 'photo_name', $this->photo_name])
                ->andFilterWhere(['ilike', 'photo_path', $this->photo_path]);

            return $dataProvider;
        }
    }

    public function searchReportConscripts($params)
    {
        $query = DocConscript::find();

        // add conditions that should always apply here
        $date = date("Y-m-d");
        $date = date('Y-m-d', strtotime($date . ' - 27 year'));
//        var_dump($date);
//        exit();

        $dataProvider = new ActiveDataProvider([
            'query' => $query->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0'])->andWhere(['not', ['region_id' => null]])->andWhere(['<=', 'birth_date', $date])
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
            'passport_given_date' => $this->passport_given_date,
            'birth_date' => $this->birth_date,
            'nationality_id' => $this->nationality_id,
            'native_lang_id' => $this->native_lang_id,
            'foreign_lang_id' => $this->foreign_lang_id,
            'social_positionid' => $this->social_positionid,
            'family_statusid' => $this->family_statusid,
            'health_condition_id' => $this->health_condition_id,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'street_id' => $this->street_id,
            'region_id' => $this->region_id,
            'creator' => $this->creator,
            'created_at' => $this->created_at,
            'modifier' => $this->modifier,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'passport_seria', $this->passport_seria])
            ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
            ->andFilterWhere(['ilike', 'passport_issued_by', $this->passport_issued_by])
            ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
            ->andFilterWhere(['ilike', 'pinfl', $this->pinfl])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'phone_number', $this->phone_number])
            ->andFilterWhere(['ilike', 'state_lang', $this->state_lang])
            ->andFilterWhere(['ilike', 'work_place', $this->work_place])
            ->andFilterWhere(['ilike', 'civilian_profession', $this->civilian_profession])
            ->andFilterWhere(['ilike', 'committee', $this->committee])
            ->andFilterWhere(['ilike', 'study_place', $this->study_place])
            ->andFilterWhere(['ilike', 'sport_type', $this->sport_type])
            ->andFilterWhere(['ilike', 'criminal_record', $this->criminal_record])
            ->andFilterWhere(['ilike', 'criminal_record_relatives', $this->criminal_record_relatives])
            ->andFilterWhere(['ilike', 'doc_number', $this->doc_number])
            ->andFilterWhere(['ilike', 'family_residence', $this->family_residence])
            ->andFilterWhere(['ilike', 'sports_category', $this->sports_category])
            ->andFilterWhere(['ilike', 'relatives_connect', $this->relatives_connect])
            ->andFilterWhere(['ilike', 'fitness_degree', $this->fitness_degree])
            ->andFilterWhere(['ilike', 'postponement', $this->postponement])
            ->andFilterWhere(['ilike', 'comment', $this->comment])
            ->andFilterWhere(['ilike', 'photo_name', $this->photo_name])
            ->andFilterWhere(['ilike', 'photo_path', $this->photo_path]);

        return $dataProvider;
    }
}
