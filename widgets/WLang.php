<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 21.06.2017
 * Time: 11:03
 */

namespace app\widgets;

use app\models\Lang;
use yii\bootstrap\Widget;

class WLang extends Widget
{
    public function init()
    {
    }

    public function run()
    {
        return $this->render('lang/view', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->all(),
        ]);
    }

}