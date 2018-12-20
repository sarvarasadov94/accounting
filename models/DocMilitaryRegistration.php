<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_military_registration".
 *
 * @property int $id
 * @property string $admitted
 * @property string $removed
 * @property int $conscript_id
 * @property int $preparation_for_armed_forces_id
 *
 * @property DocConscript $conscript
 * @property DocPreparationForArmedForces $preparationForArmedForces
 */
class DocMilitaryRegistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_military_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['conscript_id', 'preparation_for_armed_forces_id'], 'default', 'value' => null],
            [['conscript_id', 'preparation_for_armed_forces_id'], 'integer'],
            [['preparation_for_armed_forces_id'], 'required'],
            [['admitted', 'removed'], 'string', 'max' => 45],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['preparation_for_armed_forces_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocPreparationForArmedForces::className(), 'targetAttribute' => ['preparation_for_armed_forces_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admitted' => 'Admitted',
            'removed' => 'Removed',
            'conscript_id' => 'Conscript ID',
            'preparation_for_armed_forces_id' => 'Preparation For Armed Forces ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConscript()
    {
        return $this->hasOne(DocConscript::className(), ['id' => 'conscript_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreparationForArmedForces()
    {
        return $this->hasOne(DocPreparationForArmedForces::className(), ['id' => 'preparation_for_armed_forces_id']);
    }
}
