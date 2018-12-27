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
 * @property string $vus
 * @property int $military_unit_id
 * @property string $start_date
 * @property string $end_date
 * @property string $reserver_date
 * @property string $reserver_comment
 * @property string $oath_date
 * @property string $intended_to_command
 * @property string $intended_vus
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['issue_date', 'birth_date', 'start_date', 'end_date', 'reserver_date', 'oath_date', 'registration_date', 'date_of_deregistration', 'created_at', 'modified_at'], 'safe'],
            [['nationality_id', 'region_id', 'city_id', 'district_id', 'education_type_id', 'family_status_id', 'validity_degree_id', 'rank_id', 'military_unit_id', 'soldier_type_id', 'conscript_id', 'creator', 'modifier'], 'default', 'value' => null],
            [['nationality_id', 'region_id', 'city_id', 'district_id', 'education_type_id', 'family_status_id', 'validity_degree_id', 'rank_id', 'military_unit_id', 'soldier_type_id', 'conscript_id', 'creator', 'modifier'], 'integer'],
            [['first_name', 'last_name', 'patronymic', 'issued_by'], 'string', 'max' => 200],
            [['military_ticket_seria', 'military_ticket_number'], 'string', 'max' => 100],
            [['birth_place', 'address', 'phone_number', 'committee', 'civilian_profession', 'work_place', 'sport', 'criminal_record', 'military_service_type', 'accounting_category', 'accounting_group', 'vus', 'reserver_comment', 'intended_to_command', 'intended_vus', 'enrollment_to_reservre', 'height', 'head_circumference', 'uniform_size', 'shoe_size', 'comment', 'gas_mask_size', 'special_number'], 'string', 'max' => 1000],
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
        ];
    }
}
