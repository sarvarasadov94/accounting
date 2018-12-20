<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_passing_med_commission".
 *
 * @property int $id
 * @property string $protocol_number
 * @property string $protocol_date
 * @property string $height
 * @property string $weight
 * @property string $chest_volume
 * @property string $spirometry
 * @property int $restriction_degree_id
 * @property int $registered_on_d
 * @property string $registered_on_d_reason
 * @property string $suitable_for_military_service
 * @property int $suitable_restriction_degree_id
 * @property string $suitable_for_military_service_vdv
 * @property int $suitable_vdv_restriction_degree_id
 * @property string $unsuitable_for_military_service
 * @property string $delay_in_treatment
 * @property string $unsuitable_in_peace_time
 * @property string $unsuitable_with_exception
 * @property string $needs_deferment
 * @property string $intended
 * @property int $conscript_id
 *
 * @property DocMedicalOpinion[] $docMedicalOpinions
 * @property DocConscript $conscript
 * @property EntRestrictionDegree $restrictionDegree
 * @property EntRestrictionDegree $suitableRestrictionDegree
 * @property EntRestrictionDegree $suitableVdvRestrictionDegree
 */
class DocPassingMedCommission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_passing_med_commission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['protocol_date'], 'safe'],
            [['restriction_degree_id', 'registered_on_d', 'suitable_restriction_degree_id', 'suitable_vdv_restriction_degree_id', 'conscript_id'], 'default', 'value' => null],
            [['restriction_degree_id', 'registered_on_d', 'suitable_restriction_degree_id', 'suitable_vdv_restriction_degree_id', 'conscript_id'], 'integer'],
            [['conscript_id'], 'required'],
            [['protocol_number'], 'string', 'max' => 200],
            [['height', 'weight', 'chest_volume', 'spirometry'], 'string', 'max' => 100],
            [['registered_on_d_reason', 'suitable_for_military_service', 'suitable_for_military_service_vdv', 'unsuitable_for_military_service', 'delay_in_treatment', 'unsuitable_in_peace_time', 'unsuitable_with_exception', 'needs_deferment', 'intended'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['restriction_degree_id' => 'id']],
            [['suitable_restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['suitable_restriction_degree_id' => 'id']],
            [['suitable_vdv_restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['suitable_vdv_restriction_degree_id' => 'id']],
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
            'registered_on_d' => 'Registered On D',
            'registered_on_d_reason' => 'Registered On D Reason',
            'suitable_for_military_service' => 'Suitable For Military Service',
            'suitable_restriction_degree_id' => 'Suitable Restriction Degree ID',
            'suitable_for_military_service_vdv' => 'Suitable For Military Service Vdv',
            'suitable_vdv_restriction_degree_id' => 'Suitable Vdv Restriction Degree ID',
            'unsuitable_for_military_service' => 'Unsuitable For Military Service',
            'delay_in_treatment' => 'Delay In Treatment',
            'unsuitable_in_peace_time' => 'Unsuitable In Peace Time',
            'unsuitable_with_exception' => 'Unsuitable With Exception',
            'needs_deferment' => 'Needs Deferment',
            'intended' => 'Intended',
            'conscript_id' => 'Conscript ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMedicalOpinions()
    {
        return $this->hasMany(DocMedicalOpinion::className(), ['passing_med_commission_id' => 'id']);
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
    public function getSuitableRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'suitable_restriction_degree_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuitableVdvRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'suitable_vdv_restriction_degree_id']);
    }
}
