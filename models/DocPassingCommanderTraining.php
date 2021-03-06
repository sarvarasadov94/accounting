<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_passing_commander_training".
 *
 * @property int $id
 * @property string $training_name
 * @property string $training_date
 * @property string $training_end_date
 * @property int $military_service_card_id
 *
 * @property DocMilitaryServiceCard $militaryServiceCard
 */
class DocPassingCommanderTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_passing_commander_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['training_date', 'training_end_date'], 'safe'],
            [['military_service_card_id'], 'required'],
            [['military_service_card_id'], 'default', 'value' => null],
            [['military_service_card_id'], 'integer'],
            [['training_name'], 'string', 'max' => 200],
            [['military_service_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocMilitaryServiceCard::className(), 'targetAttribute' => ['military_service_card_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'training_name' => Yii::t('main', 'Training Name'),
            'training_end_date' => Yii::t('main', 'Training End Date'),
            'training_date' => Yii::t('main', 'Training Date'),
            'military_service_card_id' => Yii::t('main', 'Military Service Card ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitaryServiceCard()
    {
        return $this->hasOne(DocMilitaryServiceCard::className(), ['id' => 'military_service_card_id']);
    }
}
