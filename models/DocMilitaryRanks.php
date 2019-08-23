<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_military_ranks".
 *
 * @property int $id
 * @property int $rank_id
 * @property string $whose_order
 * @property string $order_number
 * @property string $order_date
 * @property string $comment
 * @property int $military_service_card_id
 *
 * @property DocMilitaryServiceCard $militaryServiceCard
 * @property EntRank $rank
 */
class DocMilitaryRanks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_military_ranks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rank_id', 'military_service_card_id'], 'default', 'value' => null],
            [['rank_id', 'military_service_card_id'], 'integer'],
            [['order_date'], 'safe'],
            [['military_service_card_id'], 'required'],
            [['whose_order', 'order_number'], 'string', 'max' => 200],
            [['comment'], 'string', 'max' => 1000],
            [['military_service_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocMilitaryServiceCard::className(), 'targetAttribute' => ['military_service_card_id' => 'id']],
            [['rank_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRank::className(), 'targetAttribute' => ['rank_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'rank_id' => Yii::t('main', 'Rank ID'),
            'whose_order' => Yii::t('main', 'Whose Order'),
            'order_number' => Yii::t('main', 'Order Number'),
            'order_date' => Yii::t('main', 'Order Date'),
            'comment' => Yii::t('main', 'Comment'),
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
    public function getRank()
    {
        return $this->hasOne(EntRank::className(), ['id' => 'rank_id']);
    }
}
