<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lang_translations".
 *
 * @property int $id
 * @property string $code
 * @property string $lang_ru
 * @property string $lang_uz
 */
class LangTranslations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lang_translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'integer'],
            [['code', 'lang_ru', 'lang_uz'], 'required'],
            [['code', 'lang_ru', 'lang_uz'], 'string', 'max' => 255],
            //[['id'], 'unique'],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'id'),
            'code' => Yii::t('main', 'code'),
            'lang_ru' => Yii::t('main', 'Lang Ru'),
            'lang_uz' => Yii::t('main', 'Lang Uz'),
        ];
    }
}
