<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_rank".
 *
 * @property int $id
 * @property string $name
 * @property int $rank_type_id
 *
 * @property EntRank{} $entRank

 */
class EnumRankType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_rank_type';
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
    public function getEntRank()
    {
        return $this->hasMany(EntRank::className(), ['rank_type_id' => 'id']);
    }

}
