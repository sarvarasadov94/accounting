<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_officer_vus".
 *
 * @property int $id
 * @property string $number
 */
class EntOfficerVus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_officer_vus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
        ];
    }
}
