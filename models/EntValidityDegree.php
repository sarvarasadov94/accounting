<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_validity_degree".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMedicalOpinion[] $docMedicalOpinions
 * @property DocRecordCard[] $docRecordCards
 */
class EntValidityDegree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_validity_degree';
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
            'id' => Yii::t('main', 'id'),
            'name' => Yii::t('main', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMedicalOpinions()
    {
        return $this->hasMany(DocMedicalOpinion::className(), ['validity_degree_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocRecordCards()
    {
        return $this->hasMany(DocRecordCard::className(), ['validity_degree_id' => 'id']);
    }
}
