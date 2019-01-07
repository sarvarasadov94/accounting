<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_preparation_for_armed_forces".
 *
 * @property int $id
 * @property string $receipt_of_basic_military
 * @property string $professional_fitness_conclusion
 * @property string $educational_establishment
 * @property string $specialty_received
 * @property string $study_date
 * @property string $startdate
 * @property string $study_period
 * @property string $enddate
 * @property int $conscript_id
 * @property int $bloodgroup_id
 * @property int $rhfactor_id
 *
 * @property DocMilitaryRegistration[] $docMilitaryRegistrations
 * @property DocConscript $conscript
 * @property EnumBloodGroup $bloodgroup
 * @property EnumRhFactor $rhfactor
 */
class DocPreparationForArmedForces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_preparation_for_armed_forces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['study_date', 'startdate', 'enddate'], 'safe'],
            [['conscript_id', 'bloodgroup_id', 'rhfactor_id'], 'default', 'value' => null],
            [['conscript_id', 'bloodgroup_id', 'rhfactor_id'], 'integer'],
            [['receipt_of_basic_military', 'professional_fitness_conclusion', 'educational_establishment', 'specialty_received', 'study_period'], 'string', 'max' => 45],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['bloodgroup_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumBloodGroup::className(), 'targetAttribute' => ['bloodgroup_id' => 'id']],
            [['rhfactor_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumRhFactor::className(), 'targetAttribute' => ['rhfactor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receipt_of_basic_military' => 'Receipt Of Basic Military',
            'professional_fitness_conclusion' => 'Professional Fitness Conclusion',
            'educational_establishment' => 'Educational Establishment',
            'specialty_received' => 'Specialty Received',
            'study_date' => 'Study Date',
            'startdate' => 'Startdate',
            'study_period' => 'Study Period',
            'enddate' => 'Enddate',
            'conscript_id' => 'Conscript ID',
            'bloodgroup_id' => 'Bloodgroup ID',
            'rhfactor_id' => 'Rhfactor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryRegistrations()
    {
        return $this->hasMany(DocMilitaryRegistration::className(), ['preparation_for_armed_forces_id' => 'id']);
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
    public function getBloodgroup()
    {
        return $this->hasOne(EnumBloodGroup::className(), ['id' => 'bloodgroup_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhfactor()
    {
        return $this->hasOne(EnumRhFactor::className(), ['id' => 'rhfactor_id']);
    }
}
