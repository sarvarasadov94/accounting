<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_medical_opinion".
 *
 * @property int $id
 * @property int $doctor_type_id
 * @property int $validity_degree_id
 * @property string $validity_comment
 * @property int $restriction_degree_id
 * @property string $restriction_comment
 * @property int $passing_med_commission_id
 * @property int $commission_results_id
 * @property int $conscript_id
 *
 * @property DocCommissionResults $commissionResults
 * @property DocConscript $conscript
 * @property DocPassingMedCommission $passingMedCommission
 * @property EntDoctorType $doctorType
 * @property EntRestrictionDegree $restrictionDegree
 * @property EntValidityDegree $validityDegree
 */
class DocMedicalOpinion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_medical_opinion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doctor_type_id', 'validity_degree_id', 'restriction_degree_id', 'passing_med_commission_id', 'commission_results_id', 'conscript_id'], 'default', 'value' => null],
            [['doctor_type_id', 'validity_degree_id', 'restriction_degree_id', 'passing_med_commission_id', 'commission_results_id', 'conscript_id'], 'integer'],
            [['conscript_id'], 'required'],
            [['validity_comment', 'restriction_comment'], 'string', 'max' => 1000],
            [['commission_results_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocCommissionResults::className(), 'targetAttribute' => ['commission_results_id' => 'id']],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['passing_med_commission_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocPassingMedCommission::className(), 'targetAttribute' => ['passing_med_commission_id' => 'id']],
            [['doctor_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDoctorType::className(), 'targetAttribute' => ['doctor_type_id' => 'id']],
            [['restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['restriction_degree_id' => 'id']],
            [['validity_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntValidityDegree::className(), 'targetAttribute' => ['validity_degree_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doctor_type_id' => 'Doctor Type ID',
            'validity_degree_id' => 'Validity Degree ID',
            'validity_comment' => 'Validity Comment',
            'restriction_degree_id' => 'Restriction Degree ID',
            'restriction_comment' => 'Restriction Comment',
            'passing_med_commission_id' => 'Passing Med Commission ID',
            'commission_results_id' => 'Commission Results ID',
            'conscript_id' => 'Conscript ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommissionResults()
    {
        return $this->hasOne(DocCommissionResults::className(), ['id' => 'commission_results_id']);
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
    public function getPassingMedCommission()
    {
        return $this->hasOne(DocPassingMedCommission::className(), ['id' => 'passing_med_commission_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctorType()
    {
        return $this->hasOne(EntDoctorType::className(), ['id' => 'doctor_type_id']);
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
    public function getValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'validity_degree_id']);
    }
}
