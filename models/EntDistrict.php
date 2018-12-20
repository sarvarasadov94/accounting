<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_district".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property int $city_id
 *
 * @property DocAcceptanceAndWithdrawalMarks[] $docAcceptanceAndWithdrawalMarks
 * @property DocAcceptanceAndWithdrawalMarks[] $docAcceptanceAndWithdrawalMarks0
 * @property DocConscript[] $docConscripts
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocRecordCard[] $docRecordCards
 * @property EntCity $city
 * @property EntRegion $region
 * @property EntMilitaryUnit[] $entMilitaryUnits
 */
class EntDistrict extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'city_id'], 'default', 'value' => null],
            [['region_id', 'city_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocAcceptanceAndWithdrawalMarks()
    {
        return $this->hasMany(DocAcceptanceAndWithdrawalMarks::className(), ['arrived_district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocAcceptanceAndWithdrawalMarks0()
    {
        return $this->hasMany(DocAcceptanceAndWithdrawalMarks::className(), ['departed_district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocConscripts()
    {
        return $this->hasMany(DocConscript::className(), ['district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(EntCity::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntMilitaryUnits()
    {
        return $this->hasMany(EntMilitaryUnit::className(), ['district_id' => 'id']);
    }
}
