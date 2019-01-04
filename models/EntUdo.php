<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_udo".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property int $city_id
 *
 * @property DocRecordCard[] $docRecordCards
 */
class EntUdo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_udo';
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
            'city_id' => Yii::t('main', 'city_id'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['udo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['udo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(EntCity::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(EntRegion::className(), ['id' => 'region_id']);
    }
}
