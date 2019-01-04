<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_military_service_card".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $personal_number
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nationality_id
 * @property int $citizenship_id
 * @property string $military_special
 * @property string $foreign_lang_id
 * @property int $family_status_id
 * @property string $participation_in_battles
 * @property string $photo_name
 * @property string $photo_path
 * @property string $drafted_to_armed_forces
 * @property string $continuation_of_service
 * @property string $med_comission_result
 * @property int $rank_id
 * @property int $reserve_id
 * @property string $category
 * @property string $intended
 * @property string $work_place
 * @property string $address
 * @property int $region_id
 * @property int $city_id
 * @property int $district_id
 * @property int $is_registered_odo
 * @property int $udo_id
 * @property string $ld_number
 * @property string $is_registered_date
 * @property int $conscript_id
 *
 * @property DocContinuationOfService[] $docContinuationOfServices
 * @property DocEducation[] $docEducations
 * @property DocFamilyMembers[] $docFamilyMembers
 * @property DocMilitaryRanks[] $docMilitaryRanks
 * @property DocConscript $conscript
 * @property EntCitizenship $citizenship
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntNationality $nationality
 * @property EntRank $rank
 * @property EntRegion $region
 * @property EntReserve $reserve
 * @property EnumFamilyStatus $familyStatus
 * @property DocPassingCommanderTraining[] $docPassingCommanderTrainings
 * @property DocPassingMilitaryTraining[] $docPassingMilitaryTrainings
 */
class DocMilitaryServiceCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_military_service_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date', 'is_registered_date'], 'safe'],
            [['nationality_id', 'citizenship_id', 'family_status_id', 'rank_id', 'reserve_id', 'region_id', 'city_id', 'district_id', 'is_registered_odo', 'udo_id', 'conscript_id'], 'default', 'value' => null],
            [['nationality_id', 'citizenship_id', 'family_status_id', 'rank_id', 'reserve_id', 'region_id', 'city_id', 'district_id', 'is_registered_odo', 'udo_id', 'conscript_id'], 'integer'],
            [['conscript_id'], 'required'],
            [['first_name', 'last_name', 'patronymic', 'personal_number'], 'string', 'max' => 200],
            [['birth_place', 'military_special', 'foreign_lang_id', 'participation_in_battles', 'photo_name', 'photo_path', 'drafted_to_armed_forces', 'continuation_of_service', 'med_comission_result', 'category', 'intended', 'work_place', 'address', 'ld_number'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['citizenship_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCitizenship::className(), 'targetAttribute' => ['citizenship_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['rank_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['reserve_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntReserve::className(), 'targetAttribute' => ['reserve_id' => 'id']],
            [['family_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumFamilyStatus::className(), 'targetAttribute' => ['family_status_id' => 'id']],
            [['is_registered_odo'], 'exist', 'skipOnError' => true, 'targetClass' => EntOdo::className(), 'targetAttribute' => ['is_registered_odo' => 'id']],
            [['udo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntUdo::className(), 'targetAttribute' => ['udo_id' => 'id']],
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
            'personal_number' => 'Personal Number',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'nationality_id' => 'Nationality ID',
            'citizenship_id' => 'Citizenship ID',
            'military_special' => 'Military Special',
            'foreign_lang_id' => 'Foreign Lang ID',
            'family_status_id' => 'Family Status ID',
            'participation_in_battles' => 'Participation In Battles',
            'photo_name' => 'Photo Name',
            'photo_path' => 'Photo Path',
            'drafted_to_armed_forces' => 'Drafted To Armed Forces',
            'continuation_of_service' => 'Continuation Of Service',
            'med_comission_result' => 'Med Comission Result',
            'rank_id' => 'Rank ID',
            'reserve_id' => 'Reserve ID',
            'category' => 'Category',
            'intended' => 'Intended',
            'work_place' => 'Work Place',
            'address' => 'Address',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'is_registered_odo' => 'Is Registered Odo',
            'udo_id' => 'Udo ID',
            'ld_number' => 'Ld Number',
            'is_registered_date' => 'Is Registered Date',
            'conscript_id' => 'Conscript ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocContinuationOfServices()
    {
        return $this->hasMany(DocContinuationOfService::className(), ['military_service_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocEducations()
    {
        return $this->hasMany(DocEducation::className(), ['military_service_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocFamilyMembers()
    {
        return $this->hasMany(DocFamilyMembers::className(), ['military_service_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryRanks()
    {
        return $this->hasMany(DocMilitaryRanks::className(), ['military_service_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConscript()
    {
        return $this->hasOne(DocConscript::className(), ['id' => 'conscript_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitizenship()
    {
        return $this->hasOne(EntCitizenship::className(), ['id' => 'citizenship_id']);
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
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReserve()
    {
        return $this->hasOne(EntReserve::className(), ['id' => 'reserve_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilyStatus()
    {
        return $this->hasOne(EnumFamilyStatus::className(), ['id' => 'family_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIsRegisteredOdo()
    {
        return $this->hasOne(EntOdo::className(), ['id' => 'is_registered_odo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUdo()
    {
        return $this->hasOne(EntUdo::className(), ['id' => 'udo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingCommanderTrainings()
    {
        return $this->hasMany(DocPassingCommanderTraining::className(), ['military_service_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMilitaryTrainings()
    {
        return $this->hasMany(DocPassingMilitaryTraining::className(), ['military_service_card_id' => 'id']);
    }
}
