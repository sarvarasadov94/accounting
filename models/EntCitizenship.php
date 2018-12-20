<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_citizenship".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 */
class EntCitizenship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_citizenship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 1000],
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
        return $this->hasMany(DocMilitaryServiceCard::className(), ['citizenship_id' => 'id']);
    }
}
