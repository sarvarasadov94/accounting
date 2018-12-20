<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_acceptance_and_withdrawal_marks".
 *
 * @property int $id
 * @property string $accepted_date
 * @property string $arrived
 * @property int $arrived_district_id
 * @property int $arrived_region_id
 * @property string $filmed_date
 * @property string $departed
 * @property int $departed_district_id
 * @property int $departed_region_id
 * @property int $record_card_id
 *
 * @property DocRecordCard $recordCard
 * @property EntDistrict $arrivedDistrict
 * @property EntDistrict $departedDistrict
 * @property EntRegion $arrivedRegion
 * @property EntRegion $departedRegion
 */
class DocAcceptanceAndWithdrawalMarks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_acceptance_and_withdrawal_marks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accepted_date', 'filmed_date'], 'safe'],
            [['arrived_district_id', 'arrived_region_id', 'departed_district_id', 'departed_region_id', 'record_card_id'], 'default', 'value' => null],
            [['arrived_district_id', 'arrived_region_id', 'departed_district_id', 'departed_region_id', 'record_card_id'], 'integer'],
            [['record_card_id'], 'required'],
            [['arrived', 'departed'], 'string', 'max' => 1000],
            [['record_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocRecordCard::className(), 'targetAttribute' => ['record_card_id' => 'id']],
            [['arrived_district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['arrived_district_id' => 'id']],
            [['departed_district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['departed_district_id' => 'id']],
            [['arrived_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['arrived_region_id' => 'id']],
            [['departed_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['departed_region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accepted_date' => 'Accepted Date',
            'arrived' => 'Arrived',
            'arrived_district_id' => 'Arrived District ID',
            'arrived_region_id' => 'Arrived Region ID',
            'filmed_date' => 'Filmed Date',
            'departed' => 'Departed',
            'departed_district_id' => 'Departed District ID',
            'departed_region_id' => 'Departed Region ID',
            'record_card_id' => 'Record Card ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordCard()
    {
        return $this->hasOne(DocRecordCard::className(), ['id' => 'record_card_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArrivedDistrict()
    {
        return $this->hasOne(EntDistrict::className(), ['id' => 'arrived_district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartedDistrict()
    {
        return $this->hasOne(EntDistrict::className(), ['id' => 'departed_district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArrivedRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'arrived_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartedRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'departed_region_id']);
    }
}
