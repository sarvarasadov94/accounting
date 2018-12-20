<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enum_relative_group".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocFamilyMembers[] $docFamilyMembers
 */
class EnumRelativeGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enum_relative_group';
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
    public function getDocFamilyMembers()
    {
        return $this->hasMany(DocFamilyMembers::className(), ['relative_group_id' => 'id']);
    }
}
