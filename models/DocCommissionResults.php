<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_commission_results".
 *
 * @property int $id
 * @property string $protocol_number
 * @property string $protocol_date
 * @property string $height
 * @property string $weight
 * @property string $chest_volume
 * @property string $spirometry
 * @property int $restriction_degree_id
 * @property int $registered_ond
 * @property string $registered_ond_reason
 * @property string $suitable_for_military_service
 * @property string $suitable_for_military_service_vdv
 * @property string $intended_for_vs
 * @property string $unsuitable_in_peace_time
 * @property string $unsuitable_with_exception
 * @property string $send_for_treatment
 * @property string $provide_reprieve
 * @property string $enddate_of_reprieve
 * @property string $appearance_date_to_send
 * @property string $commission_chairman
 * @property string $commission_members
 * @property string $head_of_dep
 * @property string $representative_nuroniy
 * @property string $representative_kamolot
 * @property string $representative_maxalla
 * @property string $representative1
 * @property string $representative2
 * @property string $senior_doctor
 * @property int $conscript_id
 *
 * @property DocConscript $conscript
 * @property EntRestrictionDegree $restrictionDegree
 * @property DocMedicalOpinion[] $docMedicalOpinions
 */
class DocCommissionResults extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_commission_results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['protocol_date', 'enddate_of_reprieve', 'appearance_date_to_send'], 'safe'],
            [['restriction_degree_id', 'registered_ond', 'conscript_id'], 'default', 'value' => null],
            [['restriction_degree_id', 'registered_ond', 'conscript_id'], 'integer'],
            [['conscript_id'], 'required'],
            [['protocol_number', 'height', 'weight', 'chest_volume', 'spirometry', 'registered_ond_reason', 'suitable_for_military_service', 'suitable_for_military_service_vdv', 'intended_for_vs', 'unsuitable_in_peace_time', 'unsuitable_with_exception', 'send_for_treatment', 'provide_reprieve', 'commission_chairman', 'commission_members', 'head_of_dep', 'representative_nuroniy', 'representative_kamolot', 'representative_maxalla', 'representative1', 'representative2', 'senior_doctor'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['restriction_degree_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'protocol_number' => 'Protocol Number',
            'protocol_date' => 'Protocol Date',
            'height' => 'Height',
            'weight' => 'Weight',
            'chest_volume' => 'Chest Volume',
            'spirometry' => 'Spirometry',
            'restriction_degree_id' => 'Restriction Degree ID',
            'registered_ond' => 'Registered Ond',
            'registered_ond_reason' => 'Registered Ond Reason',
            'suitable_for_military_service' => 'Suitable For Military Service',
            'suitable_for_military_service_vdv' => 'Suitable For Military Service Vdv',
            'intended_for_vs' => 'Intended For Vs',
            'unsuitable_in_peace_time' => 'Unsuitable In Peace Time',
            'unsuitable_with_exception' => 'Unsuitable With Exception',
            'send_for_treatment' => 'Send For Treatment',
            'provide_reprieve' => 'Provide Reprieve',
            'enddate_of_reprieve' => 'Enddate Of Reprieve',
            'appearance_date_to_send' => 'Appearance Date To Send',
            'commission_chairman' => 'Commission Chairman',
            'commission_members' => 'Commission Members',
            'head_of_dep' => 'Head Of Dep',
            'representative_nuroniy' => 'Representative Nuroniy',
            'representative_kamolot' => 'Representative Kamolot',
            'representative_maxalla' => 'Representative Maxalla',
            'representative1' => 'Representative1',
            'representative2' => 'Representative2',
            'senior_doctor' => 'Senior Doctor',
            'conscript_id' => 'Conscript ID',
        ];
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
    public function getRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'restriction_degree_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMedicalOpinions()
    {
        return $this->hasMany(DocMedicalOpinion::className(), ['commission_results_id' => 'id']);
    }
}
