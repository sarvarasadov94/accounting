<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "lang".
 *
 * @property int $id
 * @property string $url
 * @property string $local
 * @property string $name
 * @property int $default_lang
 * @property int $date_update
 * @property int $date_create
 */
class Lang extends ActiveRecord
{
    static $current = null;
    /**
     * @inheritdoc
     */
    public static function tablename()
    {
        return 'lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'default_lang'], 'integer'],
            [['url', 'local', 'name', 'default_lang'], 'required'],
            [['url', 'local', 'name'], 'string', 'max' => 255],
            [['date_update', 'date_update'], 'string', 'max' => 7],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'url' => 'url',
            'local' => 'local',
            'name' => 'name',
            'default_lang' => 'Default Lang',
            'date_update' => 'Date  Update',
            'date_create' => 'Date  Create',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
                ],
            ],
        ];
    }

    static function getCurrent()
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    static function setCurrent($url = null)
    {
        $language = self::getLangByurl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->local;
    }

    static function getDefaultLang()
    {
        return Lang::find()->where('default_lang = :default_lang', [':default_lang' => 1])->one();
    }

    static function getLangByurl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = Lang::find()->where('url = :url', [':url' => $url])->one();
            if ( $language === null ) {
                return null;
            }else{
                return $language;
            }
        }
    }
}
