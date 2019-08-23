<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_continuation_of_service".
 *
 * @property int $id
 * @property string $position
 * @property int $military_unit_id
 * @property string $military_union
 * @property string $whose_order
 * @property string $order_number
 * @property string $order_date
 * @property int $military_service_card_id
 *
 * @property DocMilitaryServiceCard $militaryServiceCard
 * @property EntMilitaryUnit $militaryUnit
 */
class DocContinuationOfService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_continuation_of_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['military_unit_id', 'military_service_card_id'], 'default', 'value' => null],
            [['military_unit_id', 'military_service_card_id'], 'integer'],
            [['order_date'], 'safe'],
            [['military_service_card_id'], 'required'],
            [['position', 'military_union', 'whose_order', 'order_number'], 'string', 'max' => 1000],
            [['military_service_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocMilitaryServiceCard::className(), 'targetAttribute' => ['military_service_card_id' => 'id']],
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
            'position' => Yii::t('main', 'Position'),
            'military_unit_id' => Yii::t('main', 'Military Unit ID'),
            'military_union' => Yii::t('main', 'Military Union'),
            'whose_order' => Yii::t('main', 'Whose Order'),
            'order_number' => Yii::t('main', 'Order Number'),
            'order_date' => Yii::t('main', 'Order Date'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitaryUnit()
    {
        return $this->hasOne(EntMilitaryUnit::className(), ['id' => 'military_unit_id']);
    }
}
