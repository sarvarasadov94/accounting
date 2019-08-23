<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

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
 * @property int $udo_id
 * @property int $odo_id
 * @property string $photo_name
 * @property string $photo_path
 * @property int $creator
 * @property string $created_at
 * @property int $modifier
 * @property string $modified_at
 * @property int $deletion_mark
 *
 * @property DocCommissionResults[] $docCommissionResults
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntForeignLanguage $foreignLang
 * @property EntHealthCondition $healthCondition
 * @property EntNationality $nationality
 * @property EntNativeLanguage $nativeLang
 * @property EntRegion $region
 * @property EntSocialPosition $socialPosition
 * @property EnumFamilyStatus $familyStatus
 * @property EntValidityDegree $fitnessDegree
 * @property DocEducation[] $docEducations
 * @property DocFamilyMembers[] $docFamilyMembers
 * @property DocMilitaryRegistration[] $docMilitaryRegistrations
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocPassingMedCommission[] $docPassingMedCommissions
 * @property DocPreparationForArmedForces[] $docPreparationForArmedForces
 * @property DocTurnoutToBeSentToMilitaryUnit[] $docTurnoutToBeSentToMilitaryUnits
 */
class DocConscript extends \yii\db\ActiveRecord
{
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_conscript';
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
            [['created_at', 'modified_at', 'passport_given_date', 'birth_date'], 'safe'],
            [['creator', 'modifier', 'udo_id', 'odo_id', 'deletion_mark', 'nationality_id', 'native_lang_id', 'foreign_lang_id', 'social_positionid', 'family_statusid', 'health_condition_id', 'city_id', 'district_id', 'street_id', 'region_id'], 'default', 'value' => null],
            [['creator', 'modifier', 'udo_id', 'odo_id', 'deletion_mark', 'nationality_id', 'native_lang_id', 'foreign_lang_id', 'social_positionid', 'family_statusid', 'health_condition_id', 'city_id', 'district_id', 'street_id', 'region_id'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'passport_issued_by'], 'string', 'max' => 200],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number', 'state_lang'], 'string', 'max' => 100],
            [['birth_place', 'address', 'phone_number', 'work_place', 'civilian_profession', 'committee', 'study_place', 'sport_type', 'criminal_record', 'criminal_record_relatives', 'doc_number', 'family_residence', 'sports_category', 'relatives_connect', 'fitness_degree', 'postponement', 'comment', 'photo_name', 'photo_path'], 'string', 'max' => 1000],
            [['pinfl'], 'string', 'max' => 14],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpeg, jpg'],
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
            'first_name' => Yii::t('main', 'First Name'),
            'last_name' => Yii::t('main', 'Last Name'),
            'patronymic' => Yii::t('main', 'Patronymic'),
            'passport_seria' => Yii::t('main', 'Passport Seria'),
            'passport_number' => Yii::t('main', 'Passport Number'),
            'passport_given_date' => Yii::t('main', 'Passport Given Date'),
            'passport_issued_by' => Yii::t('main', 'Passport Issued By'),
            'birth_date' => Yii::t('main', 'Birth Date'),
            'birth_place' => Yii::t('main', 'Birth Place'),
            'nationality_id' => Yii::t('main', 'Nationality ID'),
            'pinfl' => Yii::t('main', 'Pinfl'),
            'address' => Yii::t('main', 'Address'),
            'phone_number' => Yii::t('main', 'Phone Number'),
            'native_lang_id' => Yii::t('main', 'Native Lang ID'),
            'state_lang' => Yii::t('main', 'State Lang'),
            'foreign_lang_id' => Yii::t('main', 'Foreign Lang ID'),
            'work_place' => Yii::t('main', 'Work Place'),
            'civilian_profession' => Yii::t('main', 'Civilian Profession'),
            'committee' => Yii::t('main', 'Committee'),
            'social_positionid' => Yii::t('main', 'Social Positionid'),
            'study_place' => Yii::t('main', 'Study Place'),
            'sport_type' => Yii::t('main', 'Sport Type'),
            'criminal_record' => Yii::t('main', 'Criminal Record'),
            'criminal_record_relatives' => Yii::t('main', 'Criminal Record Relatives'),
            'doc_number' => Yii::t('main', 'Doc Number'),
            'family_statusid' => Yii::t('main', 'Family Statusid'),
            'family_residence' => Yii::t('main', 'Family Residence'),
            'sports_category' => Yii::t('main', 'Sports Category'),
            'relatives_connect' => Yii::t('main', 'Relatives Connect'),
            'fitness_degree' => Yii::t('main', 'Fitness Degree'),
            'health_condition_id' => Yii::t('main', 'Health Condition ID'),
            'postponement' => Yii::t('main', 'Postponement'),
            'comment' => Yii::t('main', 'Comment'),
            'city_id' => Yii::t('main', 'City ID'),
            'district_id' => Yii::t('main', 'District ID'),
            'street_id' => Yii::t('main', 'Street ID'),
            'region_id' => Yii::t('main', 'Region ID'),
            'photo_name' => Yii::t('main', 'Photo Name'),
            'photo_path' => Yii::t('main', 'Photo Path'),
            'udo_id' => Yii::t('main', 'Udo'),
            'odo_id' => Yii::t('main', 'Odo'),
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
    public function getFitnessDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'fitness_degree']);
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
    public function getFamilyStatus()
    {
        return $this->hasOne(EnumFamilyStatus::className(), ['id' => 'family_statusid']);
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
    public function getSocialPosition()
    {
        return $this->hasOne(EntSocialPosition::className(), ['id' => 'social_positionid']);
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

    public function upload()
    {
        if ($this->validate()) {
            $this->photo = UploadedFile::getInstance($this, 'photo');
            if (!is_null($this->photo)) {
                $this->photo_path = 'uploads/conscripts/' . $this->id . DIRECTORY_SEPARATOR;
                $this->photo_name = $this->photo->baseName . '.' . $this->photo->extension;
                FileHelper::createDirectory('uploads/conscripts/' . $this->id, $mode = 0775, $recursive = true);
                $this->photo->saveAs('uploads/conscripts/' . $this->id . DIRECTORY_SEPARATOR . $this->photo->baseName . '.' . $this->photo->extension);
                $this->save(false);
                return true;
            }
            return false;

        } else {
            return false;
        }
    }
}
