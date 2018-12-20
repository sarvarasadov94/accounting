<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_military_unit".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $region_id
 * @property int $city_id
 * @property int $district_id
 * @property int $code
 *
 * @property DocContinuationOfService[] $docContinuationOfServices
 * @property DocPassingMilitaryService[] $docPassingMilitaryServices
 * @property DocRecordCard[] $docRecordCards
 * @property DocTurnoutToBeSentToMilitaryUnit[] $docTurnoutToBeSentToMilitaryUnits
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntMilitaryUnit $parent
 * @property EntMilitaryUnit[] $entMilitaryUnits
 * @property EntRegion $region
 */
class EntMilitaryUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_military_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'region_id', 'city_id', 'district_id', 'code'], 'default', 'value' => null],
            [['parent_id', 'region_id', 'city_id', 'district_id', 'code'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntDistrict::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntMilitaryUnit::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => 'Parent ID',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocContinuationOfServices()
    {
        return $this->hasMany(DocContinuationOfService::className(), ['military_unit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMilitaryServices()
    {
        return $this->hasMany(DocPassingMilitaryService::className(), ['military_unit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['military_unit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocTurnoutToBeSentToMilitaryUnits()
    {
        return $this->hasMany(DocTurnoutToBeSentToMilitaryUnit::className(), ['military_unit_id' => 'id']);
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
    public function getDistrict()
    {
        return $this->hasOne(EntDistrict::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(EntMilitaryUnit::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntMilitaryUnits()
    {
        return $this->hasMany(EntMilitaryUnit::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
    }
}
