<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_officers_and_soldiers".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $pinfl
 * @property string $passport_seria
 * @property string $passport_number
 * @property string $passport_given_date
 * @property string $passport_issued_by
 * @property string $military_ticket_seria
 * @property string $military_ticket_number
 * @property string $issue_date
 * @property string $issued_by
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nationality_id
 * @property string $address
 * @property int $region_id
 * @property int $city_id
 * @property int $district_id
 * @property string $phone_number
 * @property string $committee
 * @property int $education_type_id
 * @property string $civilian_profession
 * @property string $work_place
 * @property int $family_status_id
 * @property string $sport
 * @property string $criminal_record
 * @property string $military_service_type
 * @property int $validity_degree_id
 * @property int $rank_id
 * @property string $accounting_category
 * @property string $accounting_group
 * @property int $vus
 * @property int $military_unit_id
 * @property string $start_date
 * @property string $end_date
 * @property string $reserver_date
 * @property string $reserver_comment
 * @property string $oath_date
 * @property string $intended_to_command
 * @property int $intended_vus
 * @property string $enrollment_to_reservre
 * @property string $registration_date
 * @property string $date_of_deregistration
 * @property string $height
 * @property string $head_circumference
 * @property string $uniform_size
 * @property string $shoe_size
 * @property string $comment
 * @property string $gas_mask_size
 * @property string $special_number
 * @property int $soldier_type_id
 * @property int $conscript_id
 * @property int $creator
 * @property string $created_at
 * @property int $modifier
 * @property string $modified_at
 * @property int $deletion_mark
 * @property int $udo_id
 * @property int $odo_id
 * @property int $intended_odo_id
 * @property string $intended_odo_date
 * @property string $order_number
 * @property string $order_date
 */
class DocOfficersAndSoldiers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_officers_and_soldiers';
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
            [['order_date', 'intended_odo_date', 'passport_given_date', 'issue_date', 'birth_date', 'start_date', 'end_date', 'reserver_date', 'oath_date', 'registration_date', 'date_of_deregistration', 'created_at', 'modified_at'], 'safe'],
            [['intended_odo_id', 'udo_id', 'odo_id', 'deletion_mark', 'vus', 'intended_vus', 'nationality_id', 'region_id', 'city_id', 'district_id', 'education_type_id', 'family_status_id', 'validity_degree_id', 'rank_id', 'military_unit_id', 'soldier_type_id', 'conscript_id', 'creator', 'modifier'], 'default', 'value' => null],
            [['intended_odo_id', 'udo_id', 'odo_id', 'deletion_mark', 'vus', 'intended_vus', 'nationality_id', 'region_id', 'city_id', 'district_id', 'education_type_id', 'family_status_id', 'validity_degree_id', 'rank_id', 'military_unit_id', 'soldier_type_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'issued_by'], 'string', 'max' => 200],
            [['military_ticket_seria', 'military_ticket_number'], 'string', 'max' => 100],
            [['pinfl'], 'string', 'max' => 14],
            [['passport_seria'], 'string', 'max' => 2],
            [['passport_number'], 'string', 'max' => 100],
            [['order_number', 'passport_issued_by', 'birth_place', 'address', 'phone_number', 'committee', 'civilian_profession', 'work_place', 'sport', 'criminal_record', 'military_service_type', 'accounting_category', 'accounting_group', 'reserver_comment', 'intended_to_command', 'enrollment_to_reservre', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'comment', 'gas_mask_size', 'special_number'], 'string', 'max' => 1000],
            [['first_name', 'last_name', 'patronymic'], 'required'],
            [['passport_seria', 'passport_number'], 'unique'],
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
            'pinfl' => Yii::t('main', 'Pinfl'),
            'passport_seria' => Yii::t('main', 'Passport Seria'),
            'passport_number' => Yii::t('main', 'Passport Number'),
            'passport_given_date' => Yii::t('main', 'Passport Given Date'),
            'passport_issued_by' => Yii::t('main', 'Passport Issued By'),
            'military_ticket_seria' => Yii::t('main', 'Military Ticket Seria'),
            'military_ticket_number' => Yii::t('main', 'Military Ticket Number'),
            'issue_date' => Yii::t('main', 'Issue Date'),
            'issued_by' => Yii::t('main', 'Issued By'),
            'birth_date' => Yii::t('main', 'Birth Date'),
            'birth_place' => Yii::t('main', 'Birth Place'),
            'nationality_id' => Yii::t('main', 'Nationality ID'),
            'address' => Yii::t('main', 'Address'),
            'region_id' => Yii::t('main', 'region_id'),
            'city_id' => Yii::t('main', 'city_id'),
            'district_id' => Yii::t('main', 'district_id'),
            'phone_number' => Yii::t('main', 'Phone Number'),
            'committee' => Yii::t('main', 'Committee'),
            'education_type_id' => Yii::t('main', 'Education Type ID'),
            'civilian_profession' => Yii::t('main', 'Civilian Profession'),
            'work_place' => Yii::t('main', 'Work Place'),
            'family_status_id' => Yii::t('main', 'Family Status ID'),
            'sport' => Yii::t('main', 'Sport'),
            'criminal_record' => Yii::t('main', 'Criminal Record'),
            'military_service_type' => Yii::t('main', 'Military Service Type'),
            'validity_degree_id' => Yii::t('main', 'Validity Degree ID'),
            'rank_id' => Yii::t('main', 'Rank ID'),
            'accounting_category' => Yii::t('main', 'Accounting Category'),
            'accounting_group' => Yii::t('main', 'Accounting Group'),
            'vus' => Yii::t('main', 'Vus'),
            'military_unit_id' => Yii::t('main', 'Military Unit ID'),
            'start_date' => Yii::t('main', 'Start Date'),
            'end_date' => Yii::t('main', 'End Date'),
            'reserver_date' => Yii::t('main', 'Reserver Date'),
            'reserver_comment' => Yii::t('main', 'Reserver Comment'),
            'oath_date' => Yii::t('main', 'Oath Date'),
            'intended_to_command' => Yii::t('main', 'Intended To Command'),
            'intended_vus' => Yii::t('main', 'Intended Vus'),
            'enrollment_to_reservre' => Yii::t('main', 'Enrollment To Reservre'),
            'registration_date' => Yii::t('main', 'Registration Date'),
            'date_of_deregistration' => Yii::t('main', 'Date Of Deregistration'),
            'height' => Yii::t('main', 'Height'),
            'head_circumference' => Yii::t('main', 'Head Circumference'),
            'uniform_size' => Yii::t('main', 'Uniform Size'),
            'shoe_size' => Yii::t('main', 'Shoe Size'),
            'comment' => Yii::t('main', 'Comment'),
            'gas_mask_size' => Yii::t('main', 'Gas Mask Size'),
            'special_number' => Yii::t('main', 'Special Number'),
            'soldier_type_id' => Yii::t('main', 'Soldier Type ID'),
            'conscript_id' => Yii::t('main', 'Conscript ID'),
            'creator' => Yii::t('main', 'Creator'),
            'created_at' => Yii::t('main', 'Created At'),
            'modifier' => Yii::t('main', 'Modifier'),
            'modified_at' => Yii::t('main', 'Modified At'),
            'udo_id' => Yii::t('main', 'Udo'),
            'odo_id' => Yii::t('main', 'Odo'),
            'intended_odo_id' => Yii::t('main', 'Intended odo id'),
            'intended_odo_date' => Yii::t('main', 'Intended odo date'),
            'order_number' => Yii::t('main', 'Order number'),
            'order_date' => Yii::t('main', 'Order date'),
        ];
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
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
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
        return $this->hasOne(EntOfficerVus::className(), ['id' => 'vus']);
    }

    public function getIntendedVus()
    {
        return $this->hasOne(EntOfficerVus::className(), ['id' => 'intended_vus']);
    }

    public function getSoldierType()
    {
        return $this->hasOne(EntSoldierType::className(), ['id' => 'soldier_type_id']);
    }

    public function getUdo()
    {
        return $this->hasOne(EntSoldierType::className(), ['id' => 'soldier_type_id']);
    }

    public function getOdo()
    {
        return $this->hasOne(EntOdo::className(), ['id' => 'odo_id']);
    }

    public function getIntendedOdo()
    {
        return $this->hasOne(EntOdo::className(), ['id' => 'intended_odo_id']);
    }
}
