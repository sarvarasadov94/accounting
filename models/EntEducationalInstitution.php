<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_educational_institution".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocEducation[] $docEducations
 */
class EntEducationalInstitution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_educational_institution';
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
    public function getDocEducations()
    {
        return $this->hasMany(DocEducation::className(), ['educational_institution_id' => 'id']);
    }
}
