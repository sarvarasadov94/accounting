<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_city".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 *
 * @property DocConscript[] $docConscripts
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocRecordCard[] $docRecordCards
 * @property EntRegion $region
 * @property EntDistrict[] $entDistricts
 * @property EntMilitaryUnit[] $entMilitaryUnits
 */
class EntCity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id'], 'default', 'value' => null],
            [['region_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRegion::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'id'),
            'name' => Yii::t('main', 'Name'),
            'region_id' => Yii::t('main', 'region_id'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocConscripts()
    {
        return $this->hasMany(DocConscript::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['city_id' => 'id']);
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
    public function getEntDistricts()
    {
        return $this->hasMany(EntDistrict::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntMilitaryUnits()
    {
        return $this->hasMany(EntMilitaryUnit::className(), ['city_id' => 'id']);
    }
}
