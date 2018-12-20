<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_reserve".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 */
class EntReserve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_reserve';
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
    public function getDocMilitaryServiceCards()
    {
        return $this->hasMany(DocMilitaryServiceCard::className(), ['reserve_id' => 'id']);
    }
}
