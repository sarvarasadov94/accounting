<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 05.04.2018
 * Time: 11:24
 */
namespace app\components;

use yii\web\UrlManager;
use app\models\Lang;

class LangUrlManager extends UrlManager
{

    /**
     * @return string
     */
    public function createUrl($params)
    {
        if (isset($params['lang_id'])) {
            $lang = Lang::findOne($params['lang_id']);
            if ($lang === null) {
                $lang = Lang::getDefaultLang();
            }
            unset($params['lang_id']);
        } else {
            $lang = Lang::getCurrent();
        }

        $url = parent::createUrl($params);
        return $url == '/' ? '/' . $lang->url : '/' . $lang->url . $url;
    }
}