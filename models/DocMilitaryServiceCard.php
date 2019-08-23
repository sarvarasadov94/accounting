<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "doc_military_service_card".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $personal_number
 * @property string $pinfl
 * @property string $passport_seria
 * @property string $passport_number
 * @property string $passport_given_date
 * @property string $passport_issued_by
 * @property string $phone_number
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nationality_id
 * @property int $citizenship_id
 * @property string $military_special
 * @property int $foreign_lang_id
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
 * @property int $odo_id
 * @property string $ld_number
 * @property string $is_registered_date
 * @property string $oath_date
 * @property int $conscript_id
 * @property int $creator
 * @property string $created_at
 * @property int $modifier
 * @property string $modified_at
 * @property int $deletion_mark
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
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_military_service_card';
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord && $insert) {
            $this->deletion_mark = 0;
            $this->created_at = date('m.d.Y h:m:s');
            $this->creator = Yii::$app->user->getId();
        } else {
            $this->created_at = date('m.d.Y h:m:s');
            $this->modifier = Yii::$app->user->getId();
        }
        return parent::beforeSave($insert);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'modified_at', 'birth_date', 'is_registered_date', 'oath_date', 'passport_given_date'], 'safe'],
            [['creator', 'modifier', 'odo_id', 'deletion_mark', 'foreign_lang_id', 'nationality_id', 'citizenship_id', 'family_status_id', 'rank_id', 'reserve_id', 'region_id', 'city_id', 'district_id', 'udo_id', 'conscript_id'], 'default', 'value' => null],
            [['creator', 'modifier', 'odo_id', 'deletion_mark', 'foreign_lang_id', 'nationality_id', 'citizenship_id', 'family_status_id', 'rank_id', 'reserve_id', 'region_id', 'city_id', 'district_id', 'udo_id', 'conscript_id'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'personal_number'], 'string', 'max' => 200],
            [['pinfl'], 'string', 'max' => 14],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number'], 'string', 'max' => 100],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpeg, jpg'],
            [['phone_number', 'passport_issued_by', 'birth_place', 'military_special', 'participation_in_battles', 'photo_name', 'photo_path', 'drafted_to_armed_forces', 'continuation_of_service', 'med_comission_result', 'category', 'intended', 'work_place', 'address', 'ld_number'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['citizenship_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCitizenship::className(), 'targetAttribute' => ['citizenship_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['rank_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['reserve_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntReserve::className(), 'targetAttribute' => ['reserve_id' => 'id']],
            [['family_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumFamilyStatus::className(), 'targetAttribute' => ['family_status_id' => 'id']],
            [['udo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntUdo::className(), 'targetAttribute' => ['udo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'first_name' => Yii::t('main', 'First Name'),
            'last_name' => Yii::t('main', 'Last Name'),
            'patronymic' => Yii::t('main', 'Patronymic'),
            'personal_number' => Yii::t('main', 'Personal Number'),
            'pinfl' => Yii::t('main', 'Pinfl'),
            'passport_seria' => Yii::t('main', 'Passport Seria'),
            'passport_number' => Yii::t('main', 'Passport Number'),
            'passport_given_date' => Yii::t('main', 'Passport Given Date'),
            'passport_issued_by' => Yii::t('main', 'Passport Issued By'),
            'phone_number' => Yii::t('main', 'Phone Number'),
            'birth_date' => Yii::t('main', 'Birth Date'),
            'oath_date' => Yii::t('main', 'Oath Date'),
            'birth_place' => Yii::t('main', 'Birth Place'),
            'nationality_id' => Yii::t('main', 'Nationality ID'),
            'citizenship_id' => Yii::t('main', 'Citizenship ID'),
            'military_special' => Yii::t('main', 'Military Special'),
            'foreign_lang_id' => Yii::t('main', 'Foreign Lang ID'),
            'family_status_id' => Yii::t('main', 'Family Status ID'),
            'participation_in_battles' => Yii::t('main', 'Participation In Battles'),
            'photo_name' => Yii::t('main', 'Photo Name'),
            'photo_path' => Yii::t('main', 'Photo Path'),
            'drafted_to_armed_forces' => Yii::t('main', 'Drafted To Armed Forces'),
            'continuation_of_service' => Yii::t('main', 'Continuation Of Service'),
            'med_comission_result' => Yii::t('main', 'Med Comission Result'),
            'rank_id' => Yii::t('main', 'Rank ID'),
            'reserve_id' => Yii::t('main', 'Reserve ID'),
            'category' => Yii::t('main', 'Category'),
            'intended' => Yii::t('main', 'Intended'),
            'work_place' => Yii::t('main', 'Work Place'),
            'address' => Yii::t('main', 'Address'),
            'region_id' => Yii::t('main', 'Region ID'),
            'city_id' => Yii::t('main', 'City ID'),
            'district_id' => Yii::t('main', 'District ID'),
            'udo_id' => Yii::t('main', 'Udo'),
            'odo_id' => Yii::t('main', 'Odo'),
            'ld_number' => Yii::t('main', 'Ld Number'),
            'conscript_id' => Yii::t('main', 'Conscript ID'),
            'is_registered_date' => Yii::t('main', 'Is Registered Date'),
        ];
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
        return $this->hasOne(EntOdo::className(), ['id' => 'odo_id']);
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

    public function upload()
    {
        if ($this->validate()) {
            $this->photo = UploadedFile::getInstance($this, 'photo');
            if (!is_null($this->photo)) {
                $this->photo_path = 'uploads/military_service_card/' . $this->id . DIRECTORY_SEPARATOR;
                $this->photo_name = $this->photo->baseName . '.' . $this->photo->extension;
                FileHelper::createDirectory('uploads/military_service_card/' . $this->id, $mode = 0775, $recursive = true);
                $this->photo->saveAs('uploads/military_service_card/' . $this->id . DIRECTORY_SEPARATOR . $this->photo->baseName . '.' . $this->photo->extension);
                $this->save(false);
                return true;
            }
            return false;

        } else {
            return false;
        }
    }
}
