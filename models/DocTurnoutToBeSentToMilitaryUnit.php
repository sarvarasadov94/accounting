<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_turnout_to_be_sent_to_military_unit".
 *
 * @property int $id
 * @property string $departure_date
 * @property string $military_team_number
 * @property int $military_unit_id
 * @property string $disappear_reason
 * @property string $return_reason
 * @property string $passed_passport_seria
 * @property string $passed_passport_number
 * @property string $passed_passport_date
 * @property string $passed_certificate_seria
 * @property string $passed_certificate_number
 * @property string $passed_certificate_date
 * @property string $returned_passport_seria
 * @property string $returned_passport_number
 * @property string $returned_passport_date
 * @property string $returned_certificate_of_conscript_sector_seria
 * @property int $conscript_id
 * @property string $returned_certificate_of_conscript_sector_number
 * @property string $returned_certificate_of_conscript_sector_date
 *
 * @property DocConscript $conscript
 * @property EntMilitaryUnit $militaryUnit
 */
class DocTurnoutToBeSentToMilitaryUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_turnout_to_be_sent_to_military_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departure_date', 'passed_passport_date', 'passed_certificate_date', 'returned_passport_date', 'returned_certificate_of_conscript_sector_date'], 'safe'],
            [['military_unit_id', 'conscript_id'], 'default', 'value' => null],
            [['military_unit_id', 'conscript_id'], 'integer'],
            [['military_team_number', 'passed_certificate_seria', 'passed_certificate_number', 'returned_certificate_of_conscript_sector_seria', 'returned_certificate_of_conscript_sector_number'], 'string', 'max' => 200],
            [['disappear_reason', 'return_reason'], 'string', 'max' => 1000],
            [['passed_passport_seria', 'returned_passport_seria'], 'string', 'max' => 2],
            [['passed_passport_number', 'returned_passport_number'], 'string', 'max' => 10],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['military_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntMilitaryUnit::className(), 'targetAttribute' => ['military_unit_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'departure_date' => Yii::t('main', 'Departure Date'),
            'military_team_number' => Yii::t('main', 'Military Team Number'),
            'military_unit_id' => Yii::t('main', 'Military Unit ID'),
            'disappear_reason' => Yii::t('main', 'Disappear Reason'),
            'return_reason' => Yii::t('main', 'Return Reason'),
            'passed_passport_seria' => Yii::t('main', 'Passed Passport Seria'),
            'passed_passport_number' => Yii::t('main', 'Passed Passport Number'),
            'passed_passport_date' => Yii::t('main', 'Passed Passport Date'),
            'passed_certificate_seria' => Yii::t('main', 'Passed Certificate Seria'),
            'passed_certificate_number' => Yii::t('main', 'Passed Certificate Number'),
            'passed_certificate_date' => Yii::t('main', 'Passed Certificate Date'),
            'returned_passport_seria' => Yii::t('main', 'Returned Passport Seria'),
            'returned_passport_number' => Yii::t('main', 'Returned Passport Number'),
            'returned_passport_date' => Yii::t('main', 'Returned Passport Date'),
            'returned_certificate_of_conscript_sector_seria' => Yii::t('main', 'Returned Certificate Of Conscript Sector Seria'),
            'conscript_id' => Yii::t('main', 'Conscript ID'),
            'returned_certificate_of_conscript_sector_number' => Yii::t('main', 'Returned Certificate Of Conscript Sector Number'),
            'returned_certificate_of_conscript_sector_date' => Yii::t('main', 'Returned Certificate Of Conscript Sector Date'),
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
    public function getMilitaryUnit()
    {
        return $this->hasOne(EntMilitaryUnit::className(), ['id' => 'military_unit_id']);
    }
}
