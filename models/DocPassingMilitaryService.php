<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_passing_military_service".
 *
 * @property int $id
 * @property int $military_unit_id
 * @property string $position
 * @property string $vus_number
 * @property string $start_date
 * @property string $end_date
 * @property int $record_card_id
 *
 * @property DocRecordCard $recordCard
 * @property EntMilitaryUnit $militaryUnit
 */
class DocPassingMilitaryService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_passing_military_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['military_unit_id', 'record_card_id'], 'default', 'value' => null],
            [['military_unit_id', 'record_card_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['record_card_id'], 'required'],
            [['position', 'vus_number'], 'string', 'max' => 1000],
            [['record_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocRecordCard::className(), 'targetAttribute' => ['record_card_id' => 'id']],
            [['military_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntMilitaryUnit::className(), 'targetAttribute' => ['military_unit_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main','ID'),
            'military_unit_id' => Yii::t('main','Military Unit ID'),
            'position' => Yii::t('main','Position'),
            'vus_number' => Yii::t('main','Vus Number'),
            'start_date' => Yii::t('main','Start Date'),
            'end_date' => Yii::t('main','End Date'),
            'record_card_id' => Yii::t('main','Record Card ID'),
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
    public function getMilitaryUnit()
    {
        return $this->hasOne(EntMilitaryUnit::className(), ['id' => 'military_unit_id']);
    }
}
