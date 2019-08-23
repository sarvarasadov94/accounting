<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_education".
 *
 * @property int $id
 * @property string $education_type_id
 * @property int $educational_institution_id
 * @property string $study_place
 * @property string $study_period
 * @property string $enddate
 * @property int $course_number
 * @property string $specialty
 * @property int $conscript_id
 * @property int $military_service_card_id
 *
 * @property DocConscript $conscript
 * @property DocMilitaryServiceCard $militaryServiceCard
 * @property EntEducationalInstitution $educationalInstitution
 * @property EnumEducationType $educationType
 */
class DocEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['education_type_id', 'educational_institution_id', 'course_number', 'conscript_id', 'military_service_card_id'], 'default', 'value' => null],
            [['education_type_id', 'educational_institution_id', 'course_number', 'conscript_id', 'military_service_card_id'], 'integer'],
            [['study_period'], 'required'],
            [['enddate'], 'safe'],
            [['study_place', 'study_period', 'specialty'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['military_service_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocMilitaryServiceCard::className(), 'targetAttribute' => ['military_service_card_id' => 'id']],
            [['educational_institution_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntEducationalInstitution::className(), 'targetAttribute' => ['educational_institution_id' => 'id']],
            [['education_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumEducationType::className(), 'targetAttribute' => ['education_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'education_type_id' => Yii::t('main', 'Education Type ID'),
            'educational_institution_id' => Yii::t('main', 'Educational Institution ID'),
            'study_place' => Yii::t('main', 'Study Place'),
            'study_period' => Yii::t('main', 'Study Period'),
            'enddate' => Yii::t('main', 'Enddate'),
            'course_number' => Yii::t('main', 'Course Number'),
            'specialty' => Yii::t('main', 'Specialty'),
            'conscript_id' => Yii::t('main', 'Conscript ID'),
            'military_service_card_id' => Yii::t('main', 'Military Service Card ID'),
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
    public function getMilitaryServiceCard()
    {
        return $this->hasOne(DocMilitaryServiceCard::className(), ['id' => 'military_service_card_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducationalInstitution()
    {
        return $this->hasOne(EntEducationalInstitution::className(), ['id' => 'educational_institution_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducationType()
    {
        return $this->hasOne(EnumEducationType::className(), ['id' => 'education_type_id']);
    }
}
