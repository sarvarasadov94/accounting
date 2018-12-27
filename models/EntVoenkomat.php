<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_voenkomat".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property int $city_id
 * @property int $district_id
 *
 * @property DocRecordCard[] $docRecordCards
 */
class EntVoenkomat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_voenkomat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'city_id', 'district_id'], 'default', 'value' => null],
            [['region_id', 'city_id', 'district_id'], 'integer'],
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
            'district_id' => Yii::t('main', 'district_id'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['voenkomat_id' => 'id']);
    }
}
