<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enum_rh_factor".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocPreparationForArmedForces[] $docPreparationForArmedForces
 */
class EnumRhFactor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_rh_factor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
    public function getDocPreparationForArmedForces()
    {
        return $this->hasMany(DocPreparationForArmedForces::className(), ['rhfactor_id' => 'id']);
    }
}
