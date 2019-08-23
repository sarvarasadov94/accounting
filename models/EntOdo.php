<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_odo".
 *
 * @property int $id
 * @property string $name
 * @property int $udo_id
 * @property int $district_id
 * @property int $city_id

 * @property EntUdo $udo
 * @property EntCity $city
 * @property EntDistrict $district
 * @property EntMilitaryUnit[] $entMilitaryUnits
 */
class EntOdo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_odo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['udo_id', 'district_id', 'city_id'], 'default', 'value' => null],
            [['udo_id', 'district_id', 'city_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
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
            'udo_id' => Yii::t('main', 'udo_id'),
            'district_id' => Yii::t('main', 'district_id'),
            'city_id' => Yii::t('main', 'city_id'),
        ];
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
    public function getUdo()
    {
        return $this->hasOne(EntUdo::className(), ['id' => 'udo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['odo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['odo_id' => 'id']);
    }
}
