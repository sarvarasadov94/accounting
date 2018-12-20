<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_rank".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMilitaryRanks[] $docMilitaryRanks
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocRecordCard[] $docRecordCards
 * @property DocRecordCard[] $docRecordCards0
 */
class EntRank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_rank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryRanks()
    {
        return $this->hasMany(DocMilitaryRanks::className(), ['rank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['rank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['rank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards0()
    {
        return $this->hasMany(DocRecordCard::className(), ['statewide_rank_id' => 'id']);
    }
}
