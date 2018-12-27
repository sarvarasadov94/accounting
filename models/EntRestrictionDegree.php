<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_restriction_degree".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocCommissionResults[] $docCommissionResults
 * @property DocMedicalOpinion[] $docMedicalOpinions
 * @property DocPassingMedCommission[] $docPassingMedCommissions
 * @property DocPassingMedCommission[] $docPassingMedCommissions0
 * @property DocPassingMedCommission[] $docPassingMedCommissions1
 */
class EntRestrictionDegree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_restriction_degree';
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
    public function getDocCommissionResults()
    {
        return $this->hasMany(DocCommissionResults::className(), ['restriction_degree_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocMedicalOpinions()
    {
        return $this->hasMany(DocMedicalOpinion::className(), ['restriction_degree_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMedCommissions()
    {
        return $this->hasMany(DocPassingMedCommission::className(), ['restriction_degree_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMedCommissions0()
    {
        return $this->hasMany(DocPassingMedCommission::className(), ['suitable_restriction_degree_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocPassingMedCommissions1()
    {
        return $this->hasMany(DocPassingMedCommission::className(), ['suitable_vdv_restriction_degree_id' => 'id']);
    }
}
