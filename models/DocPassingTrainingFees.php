<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_passing_training_fees".
 *
 * @property int $id
 * @property int $year
 * @property int $days
 * @property string $military_unit_or_orgname
 * @property string $position
 * @property string $vus_number
 * @property int $record_card_id
 *
 * @property DocRecordCard $recordCard
 */
class DocPassingTrainingFees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_passing_training_fees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'days', 'record_card_id'], 'default', 'value' => null],
            [['year', 'days', 'record_card_id'], 'integer'],
            [['record_card_id'], 'required'],
            [['military_unit_or_orgname'], 'string', 'max' => 200],
            [['position', 'vus_number'], 'string', 'max' => 1000],
            [['record_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocRecordCard::className(), 'targetAttribute' => ['record_card_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'year' => Yii::t('main', 'Year'),
            'days' => Yii::t('main', 'Days'),
            'military_unit_or_orgname' => Yii::t('main', 'Military Unit Or Orgname'),
            'position' => Yii::t('main', 'Position'),
            'vus_number' => Yii::t('main', 'Vus Number'),
            'record_card_id' => Yii::t('main', 'Record Card ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordCard()
    {
        return $this->hasOne(DocRecordCard::className(), ['id' => 'record_card_id']);
    }
}
