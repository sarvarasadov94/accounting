<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_soldier_vus".
 *
 * @property int $id
 * @property string $code
 */
class EntSoldierVus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_soldier_vus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
        ];
    }
}
