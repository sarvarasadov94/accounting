<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_region".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocAcceptanceAndWithdrawalMarks[] $docAcceptanceAndWithdrawalMarks
 * @property DocAcceptanceAndWithdrawalMarks[] $docAcceptanceAndWithdrawalMarks0
 * @property DocConscript[] $docConscripts
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocRecordCard[] $docRecordCards
 * @property DocRecordCard[] $docRecordCards0
 * @property EntCity[] $entCities
 * @property EntDistrict[] $entDistricts
 * @property EntMilitaryUnit[] $entMilitaryUnits
 */
class EntRegion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_region';
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
    public function getDocAcceptanceAndWithdrawalMarks()
    {
        return $this->hasMany(DocAcceptanceAndWithdrawalMarks::className(), ['arrived_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocAcceptanceAndWithdrawalMarks0()
    {
        return $this->hasMany(DocAcceptanceAndWithdrawalMarks::className(), ['departed_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocConscripts()
    {
        return $this->hasMany(DocConscript::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards0()
    {
        return $this->hasMany(DocRecordCard::className(), ['voenkomat_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntCities()
    {
        return $this->hasMany(EntCity::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntDistricts()
    {
        return $this->hasMany(EntDistrict::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntMilitaryUnits()
    {
        return $this->hasMany(EntMilitaryUnit::className(), ['region_id' => 'id']);
    }
}
