<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_doctor_type".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocMedicalOpinion[] $docMedicalOpinions
 */
class EntDoctorType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_doctor_type';
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

}
