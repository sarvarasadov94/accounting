<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enum_blood_group".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocPreparationForArmedForces[] $docPreparationForArmedForces
 */
class EnumBloodGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_blood_group';
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
    public function getDocPreparationForArmedForces()
    {
        return $this->hasMany(DocPreparationForArmedForces::className(), ['bloodgroup_id' => 'id']);
    }
}
