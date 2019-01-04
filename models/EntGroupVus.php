<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_group_vus".
 *
 * @property int $id
 * @property string $group_mark
 * @property string $definition
 */
class EntGroupVus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_group_vus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_mark', 'definition'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'group_mark' => Yii::t('app', 'Group Mark'),
            'definition' => Yii::t('app', 'Definition'),
        ];
    }
}
