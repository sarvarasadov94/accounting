<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enum_family_status".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMilitaryServiceCard[] $docMilitaryServiceCards
 * @property DocRecordCard[] $docRecordCards
 */
class EnumFamilyStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_family_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        return $this->hasMany(DocMilitaryServiceCard::className(), ['family_status_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['family_status_id' => 'id']);
    }
}
