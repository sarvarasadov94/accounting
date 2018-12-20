<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_native_language".
 *
 * @property int $id
 * @property string $name
 *
 * @property DocConscript[] $docConscripts
 */
class EntNativeLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ent_native_language';
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
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocConscripts()
    {
        return $this->hasMany(DocConscript::className(), ['native_lang_id' => 'id']);
    }
}
