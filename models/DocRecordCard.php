<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "doc_record_card".
 *
 * @property int $id
 * @property string $pinfl
 * @property string $passport_seria
 * @property string $passport_number
 * @property string $passport_given_date
 * @property string $passport_issued_by
 * @property string $photo_name
 * @property string $photo_path
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $birth_date
 * @property string $birth_place
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
 * @property string $vus_group
 * @property string $vus_number
 * @property string $vus_code
 * @property int $creator
 * @property string $created_at
 * @property int $modifier
 * @property string $modified_at
 * @property int $deletion_mark
 * @property int $udo_id
 * @property int $odo_id
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
 * @property EntOdo $odo
 * @property EntValidityDegree $validityDegree
 * @property EntUdo $udo
 * @property EnumEducationType $educationType
 * @property EnumFamilyStatus $familyStatus
 * @property EntGroupVus $vusGroup
 * @property EntSoldierVusCode $vusCode
 * @property EntSoldierVus $vusNumber
 */
class DocRecordCard extends \yii\db\ActiveRecord
{
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_record_card';
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
            [['created_at', 'modified_at', 'birth_date', 'vocation_date', 'based_date', 'military_oath_taken_date', 'passport_given_date'], 'safe'],
            [['creator', 'modifier', 'deletion_mark', 'vus_group', 'vus_number', 'vus_code', 'nationality_id', 'education_type_id', 'region_id', 'city_id', 'district_id', 'family_status_id', 'odo_id', 'udo_id', 'military_unit_id', 'validity_degree_id', 'rank_id', 'statewide_rank_id'], 'default', 'value' => null],
            [['creator', 'modifier', 'deletion_mark', 'vus_group', 'vus_number', 'vus_code', 'nationality_id', 'education_type_id', 'region_id', 'city_id', 'district_id', 'family_status_id', 'odo_id', 'udo_id', 'military_unit_id', 'validity_degree_id', 'rank_id', 'statewide_rank_id'], 'integer'],
            [['pinfl'], 'string', 'max' => 14],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number'], 'string', 'max' => 10],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpeg, jpg'],
            [['passport_issued_by', 'photo_name', 'photo_path', 'birth_place', 'civilian_profession', 'work_place', 'phone_number', 'address', 'family_residence', 'certificate_seria', 'certificate_number', 'category', 'accounting_group', 'composition', 'rank_name_and_vus', 'team_number', 'by_vus', 'position', 'route_number', 'days_and_hours', 'point', 'prescription_issued', 'access_number', 'based_comment', 'secondment_conclusion', 'head_of_dep_conclusion', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'participation_in_battles', 'military_oath_taken_comment', 'awards', 'wounds', 'special_marks'], 'string', 'max' => 1000],
            [['first_name', 'last_name', 'patronymic'], 'string', 'max' => 200],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['military_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntMilitaryUnit::className(), 'targetAttribute' => ['military_unit_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntNationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['rank_id' => 'id']],
            [['statewide_rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['statewide_rank_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['udo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntUdo::className(), 'targetAttribute' => ['udo_id' => 'id']],
            [['validity_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntValidityDegree::className(), 'targetAttribute' => ['validity_degree_id' => 'id']],
            [['odo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntOdo::className(), 'targetAttribute' => ['odo_id' => 'id']],
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
            'id' => Yii::t('main', 'ID'),
            'pinfl' => Yii::t('main', 'Pinfl'),
            'passport_seria' => Yii::t('main', 'Passport Seria'),
            'passport_number' => Yii::t('main', 'Passport Number'),
            'passport_given_date' => Yii::t('main', 'Passport Given Date'),
            'passport_issued_by' => Yii::t('main', 'Passport Issued By'),
            'photo_name' => Yii::t('main', 'Photo Name'),
            'photo_path' => Yii::t('main', 'Photo Path'),
            'first_name' => Yii::t('main', 'First Name'),
            'last_name' => Yii::t('main', 'Last Name'),
            'patronymic' => Yii::t('main', 'Patronymic'),
            'birth_date' => Yii::t('main', 'Birth Date'),
            'birth_place' => Yii::t('main', 'Birth Place'),
            'vus_group' => Yii::t('main', 'Vus Group'),
            'vus_number' => Yii::t('main', 'Vus Number'),
            'vus_code' => Yii::t('main', 'Vus Code'),
            'nationality_id' => Yii::t('main', 'Nationality ID'),
            'education_type_id' => Yii::t('main', 'Education Type ID'),
            'civilian_profession' => Yii::t('main', 'Civilian Profession'),
            'work_place' => Yii::t('main', 'Work Place'),
            'phone_number' => Yii::t('main', 'Phone Number'),
            'address' => Yii::t('main', 'Address'),
            'region_id' => Yii::t('main', 'Region ID'),
            'city_id' => Yii::t('main', 'City ID'),
            'district_id' => Yii::t('main', 'District ID'),
            'family_status_id' => Yii::t('main', 'Family Status ID'),
            'family_residence' => Yii::t('main', 'Family Residence'),
            'udo_id' => Yii::t('main', 'Udo'),
            'odo_id' => Yii::t('main', 'Odo'),
            'military_unit_id' => Yii::t('main', 'Military Unit ID'),
            'vocation_date' => Yii::t('main', 'Vocation Date'),
            'certificate_seria' => Yii::t('main', 'Certificate Seria'),
            'certificate_number' => Yii::t('main', 'Certificate Number'),
            'validity_degree_id' => Yii::t('main', 'Validity Degree ID'),
            'rank_id' => Yii::t('main', 'Rank ID'),
            'category' => Yii::t('main', 'Category'),
            'accounting_group' => Yii::t('main', 'Accounting Group'),
            'composition' => Yii::t('main', 'Composition'),
            'rank_name_and_vus' => Yii::t('main', 'Rank Name And Vus'),
            'team_number' => Yii::t('main', 'Team Number'),
            'by_vus' => Yii::t('main', 'By Vus'),
            'position' => Yii::t('main', 'Position'),
            'statewide_rank_id' => Yii::t('main', 'Statewide Rank ID'),
            'route_number' => Yii::t('main', 'Route Number'),
            'days_and_hours' => Yii::t('main', 'Days And Hours'),
            'point' => Yii::t('main', 'Point'),
            'prescription_issued' => Yii::t('main', 'Prescription Issued'),
            'access_number' => Yii::t('main', 'Access Number'),
            'based_date' => Yii::t('main', 'Based Date'),
            'based_comment' => Yii::t('main', 'Based Comment'),
            'secondment_conclusion' => Yii::t('main', 'Secondment Conclusion'),
            'head_of_dep_conclusion' => Yii::t('main', 'Head Of Dep Conclusion'),
            'height' => Yii::t('main', 'Height'),
            'head_circumference' => Yii::t('main', 'Head Circumference'),
            'uniform_size' => Yii::t('main', 'Uniform Size'),
            'shoe_size' => Yii::t('main', 'Shoe Size'),
            'participation_in_battles' => Yii::t('main', 'Participation In Battles'),
            'military_oath_taken_date' => Yii::t('main', 'Military Oath Taken Date'),
            'military_oath_taken_comment' => Yii::t('main', 'Military Oath Taken Comment'),
            'awards' => Yii::t('main', 'Awards'),
            'wounds' => Yii::t('main', 'Wounds'),
            'special_marks' => Yii::t('main', 'Special Marks'),
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
    public function getUdo()
    {
        return $this->hasOne(EntUdo::className(), ['id' => 'udo_id']);
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
    public function getOdo()
    {
        return $this->hasOne(EntOdo::className(), ['id' => 'odo_id']);
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

    public function getVusNumber()
    {
        return $this->hasOne(EntSoldierVus::className(), ['id' => 'vus_number']);
    }

    public function getVusCode()
    {
        return $this->hasOne(EntSoldierVusCode::className(), ['id' => 'vus_code']);
    }

    public function getVusGroup()
    {
        return $this->hasOne(EntGroupVus::className(), ['id' => 'vus_group']);
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->photo = UploadedFile::getInstance($this, 'photo');
            if (!is_null($this->photo)) {
                $this->photo_path = 'uploads/record_card/' . $this->id . DIRECTORY_SEPARATOR;
                $this->photo_name = $this->photo->baseName . '.' . $this->photo->extension;
                FileHelper::createDirectory('uploads/record_card/' . $this->id, $mode = 0775, $recursive = true);
                $this->photo->saveAs('uploads/record_card/' . $this->id . DIRECTORY_SEPARATOR . $this->photo->baseName . '.' . $this->photo->extension);
                $this->save(false);
                return true;
            }
            return false;

        } else {
            return false;
        }
    }
}
