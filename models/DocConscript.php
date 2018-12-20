<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_conscript".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $passport_seria
 * @property string $passport_number
 * @property string $passport_given_date
 * @property string $passport_issued_by
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nationality_id
 * @property string $pinfl
 * @property string $address
 * @property string $phone_number
 * @property int $native_lang_id
 * @property string $state_lang
 * @property int $foreign_lang_id
 * @property string $work_place
 * @property string $civilian_profession
 * @property string $committee
 * @property int $social_positionid
 * @property string $study_place
 * @property string $sport_type
 * @property string $criminal_record
 * @property string $criminal_record_relatives
 * @property string $doc_number
 * @property int $family_statusid
 * @property string $family_residence
 * @property string $sports_category
 * @property string $relatives_connect
 * @property string $fitness_degree
 * @property int $health_condition_id
 * @property string $postponement
 * @property string $comment
 * @property int $city_id
 * @property int $district_id
 * @property int $street_id
 * @property int $region_id
 * @property string $photo_name
 * @property string $photo_path
 *
 * @property DocCommissionResults[] $docCommissionResults
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntForeignLanguage $foreignLang
 * @property EntHealthCondition $healthCondition
 * @property EntNationality $nationality
 * @property EntNativeLanguage $nativeLang
 * @property EntRegion $region
 * @property DocEducation[] $docEducations
 * @property DocFamilyMembers[] $docFamilyMembers
 * @property DocMedicalOpinion[] $docMedicalOpinions
 * @property DocMilitaryRegistration[] $docMilitaryRegistrations
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocPassingMedCommission[] $docPassingMedCommissions
 * @property DocPreparationForArmedForces[] $docPreparationForArmedForces
 * @property DocTurnoutToBeSentToMilitaryUnit[] $docTurnoutToBeSentToMilitaryUnits
 */
class DocConscript extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_conscript';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['passport_given_date', 'birth_date'], 'safe'],
            [['nationality_id', 'native_lang_id', 'foreign_lang_id', 'social_positionid', 'family_statusid', 'health_condition_id', 'city_id', 'district_id', 'street_id', 'region_id'], 'default', 'value' => null],
            [['nationality_id', 'native_lang_id', 'foreign_lang_id', 'social_positionid', 'family_statusid', 'health_condition_id', 'city_id', 'district_id', 'street_id', 'region_id'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'passport_issued_by'], 'string', 'max' => 200],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number', 'state_lang'], 'string', 'max' => 100],
            [['birth_place', 'address', 'phone_number', 'work_place', 'civilian_profession', 'committee', 'study_place', 'sport_type', 'criminal_record', 'criminal_record_relatives', 'doc_number', 'family_residence', 'sports_category', 'relatives_connect', 'fitness_degree', 'postponement', 'comment', 'photo_name', 'photo_path'], 'string', 'max' => 1000],
            [['pinfl'], 'string', 'max' => 14],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['foreign_lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntForeignLanguage::className(), 'targetAttribute' => ['foreign_lang_id' => 'id']],
            [['health_condition_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntHealthCondition::className(), 'targetAttribute' => ['health_condition_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['native_lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNativeLanguage::className(), 'targetAttribute' => ['native_lang_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'patronymic' => 'Patronymic',
            'passport_seria' => 'Passport Seria',
            'passport_number' => 'Passport Number',
            'passport_given_date' => 'Passport Given Date',
            'passport_issued_by' => 'Passport Issued By',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'nationality_id' => 'Nationality ID',
            'pinfl' => 'Pinfl',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'native_lang_id' => 'Native Lang ID',
            'state_lang' => 'State Lang',
            'foreign_lang_id' => 'Foreign Lang ID',
            'work_place' => 'Work Place',
            'civilian_profession' => 'Civilian Profession',
            'committee' => 'Committee',
            'social_positionid' => 'Social Positionid',
            'study_place' => 'Study Place',
            'sport_type' => 'Sport Type',
            'criminal_record' => 'Criminal Record',
            'criminal_record_relatives' => 'Criminal Record Relatives',
            'doc_number' => 'Doc Number',
            'family_statusid' => 'Family Statusid',
            'family_residence' => 'Family Residence',
            'sports_category' => 'Sports Category',
            'relatives_connect' => 'Relatives Connect',
            'fitness_degree' => 'Fitness Degree',
            'health_condition_id' => 'Health Condition ID',
            'postponement' => 'Postponement',
            'comment' => 'Comment',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'street_id' => 'Street ID',
            'region_id' => 'Region ID',
            'photo_name' => 'Photo Name',
            'photo_path' => 'Photo Path',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocCommissionResults()
    {
        return $this->hasMany(DocCommissionResults::className(), ['conscript_id' => 'id']);
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
    public function getForeignLang()
    {
        return $this->hasOne(EntForeignLanguage::className(), ['id' => 'foreign_lang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHealthCondition()
    {
        return $this->hasOne(EntHealthCondition::className(), ['id' => 'health_condition_id']);
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
    public function getNativeLang()
    {
        return $this->hasOne(EntNativeLanguage::className(), ['id' => 'native_lang_id']);
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
    public function getDocEducations()
    {
        return $this->hasMany(DocEducation::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocFamilyMembers()
    {
        return $this->hasMany(DocFamilyMembers::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMedicalOpinions()
    {
        return $this->hasMany(DocMedicalOpinion::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryRegistrations()
    {
        return $this->hasMany(DocMilitaryRegistration::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMedCommissions()
    {
        return $this->hasMany(DocPassingMedCommission::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPreparationForArmedForces()
    {
        return $this->hasMany(DocPreparationForArmedForces::className(), ['conscript_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocTurnoutToBeSentToMilitaryUnits()
    {
        return $this->hasMany(DocTurnoutToBeSentToMilitaryUnit::className(), ['conscript_id' => 'id']);
    }
}
