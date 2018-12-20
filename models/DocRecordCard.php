<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_record_card".
 *
 * @property int $id
 * @property string $pinfl
 * @property string $passport_seria
 * @property string $passport_number
 * @property string $photo_name
 * @property string $photo_path
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $birth_date
 * @property string $birth_place
 * @property string $vus_number
 * @property string $vus_code
 * @property int $nationality_id
 * @property int $education_type_id
 * @property string $civilian_profession
 * @property string $work_place
 * @property string $phone_number
 * @property string $address
 * @property int $region_id
 * @property int $city_id
 * @property int $district_id
 * @property int $family_status_id
 * @property string $family_residence
 * @property int $voenkomat_id
 * @property int $voenkomat_region_id
 * @property int $military_unit_id
 * @property string $vocation_date
 * @property string $certificate_seria
 * @property string $certificate_number
 * @property int $validity_degree_id
 * @property int $rank_id
 * @property string $category
 * @property string $accounting_group
 * @property string $composition
 * @property string $rank_name_and_vus
 * @property string $team_number
 * @property string $by_vus
 * @property string $position
 * @property int $statewide_rank_id
 * @property string $route_number
 * @property string $days_and_hours
 * @property string $point
 * @property string $prescription_issued
 * @property string $access_number
 * @property string $based_date
 * @property string $based_comment
 * @property string $secondment_conclusion
 * @property string $head_of_dep_conclusion
 * @property string $height
 * @property string $head_circumference
 * @property string $uniform_size
 * @property string $shoe_size
 * @property string $participation_in_battles
 * @property string $military_oath_taken_date
 * @property string $military_oath_taken_comment
 * @property string $awards
 * @property string $wounds
 * @property string $special_marks
 *
 * @property DocAcceptanceAndWithdrawalMarks[] $docAcceptanceAndWithdrawalMarks
 * @property DocInfoAboutMedExaminations[] $docInfoAboutMedExaminations
 * @property DocPassingMilitaryService[] $docPassingMilitaryServices
 * @property DocPassingTrainingFees[] $docPassingTrainingFees
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntMilitaryUnit $militaryUnit
 * @property EntNationality $nationality
 * @property EntRank $rank
 * @property EntRank $statewideRank
 * @property EntRegion $region
 * @property EntRegion $voenkomatRegion
 * @property EntValidityDegree $validityDegree
 * @property EntVoenkomat $voenkomat
 * @property EnumEducationType $educationType
 * @property EnumFamilyStatus $familyStatus
 */
class DocRecordCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_record_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date', 'vocation_date', 'based_date', 'military_oath_taken_date'], 'safe'],
            [['nationality_id', 'education_type_id', 'region_id', 'city_id', 'district_id', 'family_status_id', 'voenkomat_id', 'voenkomat_region_id', 'military_unit_id', 'validity_degree_id', 'rank_id', 'statewide_rank_id'], 'default', 'value' => null],
            [['nationality_id', 'education_type_id', 'region_id', 'city_id', 'district_id', 'family_status_id', 'voenkomat_id', 'voenkomat_region_id', 'military_unit_id', 'validity_degree_id', 'rank_id', 'statewide_rank_id'], 'integer'],
            [['pinfl'], 'string', 'max' => 100],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number'], 'string', 'max' => 10],
            [['photo_name', 'photo_path', 'birth_place', 'vus_number', 'vus_code', 'civilian_profession', 'work_place', 'phone_number', 'address', 'family_residence', 'certificate_seria', 'certificate_number', 'category', 'accounting_group', 'composition', 'rank_name_and_vus', 'team_number', 'by_vus', 'position', 'route_number', 'days_and_hours', 'point', 'prescription_issued', 'access_number', 'based_comment', 'secondment_conclusion', 'head_of_dep_conclusion', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'participation_in_battles', 'military_oath_taken_comment', 'awards', 'wounds', 'special_marks'], 'string', 'max' => 1000],
            [['first_name', 'last_name', 'patronymic'], 'string', 'max' => 200],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['military_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntMilitaryUnit::className(), 'targetAttribute' => ['military_unit_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['rank_id' => 'id']],
            [['statewide_rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['statewide_rank_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['voenkomat_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['voenkomat_region_id' => 'id']],
            [['validity_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntValidityDegree::className(), 'targetAttribute' => ['validity_degree_id' => 'id']],
            [['voenkomat_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntVoenkomat::className(), 'targetAttribute' => ['voenkomat_id' => 'id']],
            [['education_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumEducationType::className(), 'targetAttribute' => ['education_type_id' => 'id']],
            [['family_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumFamilyStatus::className(), 'targetAttribute' => ['family_status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pinfl' => 'Pinfl',
            'passport_seria' => 'Passport Seria',
            'passport_number' => 'Passport Number',
            'photo_name' => 'Photo Name',
            'photo_path' => 'Photo Path',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'patronymic' => 'Patronymic',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'vus_number' => 'Vus Number',
            'vus_code' => 'Vus Code',
            'nationality_id' => 'Nationality ID',
            'education_type_id' => 'Education Type ID',
            'civilian_profession' => 'Civilian Profession',
            'work_place' => 'Work Place',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'family_status_id' => 'Family Status ID',
            'family_residence' => 'Family Residence',
            'voenkomat_id' => 'Voenkomat ID',
            'voenkomat_region_id' => 'Voenkomat Region ID',
            'military_unit_id' => 'Military Unit ID',
            'vocation_date' => 'Vocation Date',
            'certificate_seria' => 'Certificate Seria',
            'certificate_number' => 'Certificate Number',
            'validity_degree_id' => 'Validity Degree ID',
            'rank_id' => 'Rank ID',
            'category' => 'Category',
            'accounting_group' => 'Accounting Group',
            'composition' => 'Composition',
            'rank_name_and_vus' => 'Rank Name And Vus',
            'team_number' => 'Team Number',
            'by_vus' => 'By Vus',
            'position' => 'Position',
            'statewide_rank_id' => 'Statewide Rank ID',
            'route_number' => 'Route Number',
            'days_and_hours' => 'Days And Hours',
            'point' => 'Point',
            'prescription_issued' => 'Prescription Issued',
            'access_number' => 'Access Number',
            'based_date' => 'Based Date',
            'based_comment' => 'Based Comment',
            'secondment_conclusion' => 'Secondment Conclusion',
            'head_of_dep_conclusion' => 'Head Of Dep Conclusion',
            'height' => 'Height',
            'head_circumference' => 'Head Circumference',
            'uniform_size' => 'Uniform Size',
            'shoe_size' => 'Shoe Size',
            'participation_in_battles' => 'Participation In Battles',
            'military_oath_taken_date' => 'Military Oath Taken Date',
            'military_oath_taken_comment' => 'Military Oath Taken Comment',
            'awards' => 'Awards',
            'wounds' => 'Wounds',
            'special_marks' => 'Special Marks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocAcceptanceAndWithdrawalMarks()
    {
        return $this->hasMany(DocAcceptanceAndWithdrawalMarks::className(), ['record_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocInfoAboutMedExaminations()
    {
        return $this->hasMany(DocInfoAboutMedExaminations::className(), ['record_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMilitaryServices()
    {
        return $this->hasMany(DocPassingMilitaryService::className(), ['record_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingTrainingFees()
    {
        return $this->hasMany(DocPassingTrainingFees::className(), ['record_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(EntCity::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(EntDistrict::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitaryUnit()
    {
        return $this->hasOne(EntMilitaryUnit::className(), ['id' => 'military_unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(EntNationality::className(), ['id' => 'nationality_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRank()
    {
        return $this->hasOne(EntRank::className(), ['id' => 'rank_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatewideRank()
    {
        return $this->hasOne(EntRank::className(), ['id' => 'statewide_rank_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVoenkomatRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'voenkomat_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'validity_degree_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVoenkomat()
    {
        return $this->hasOne(EntVoenkomat::className(), ['id' => 'voenkomat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducationType()
    {
        return $this->hasOne(EnumEducationType::className(), ['id' => 'education_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilyStatus()
    {
        return $this->hasOne(EnumFamilyStatus::className(), ['id' => 'family_status_id']);
    }
}
