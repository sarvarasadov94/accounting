<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enum_education_type".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocEducation[] $docEducations
 * @property DocRecordCard[] $docRecordCards
 */
class EnumEducationType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_education_type';
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
    public function getDocEducations()
    {
        return $this->hasMany(DocEducation::className(), ['education_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['education_type_id' => 'id']);
    }
}
