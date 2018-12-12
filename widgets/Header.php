<?php

namespace app\widgets;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: R_Alidjanovich
 * Date: 29.03.2018
 * Time: 13:25
 */

class Header extends Widget{

    public function run()
    {
        return $this->render('header');
    }
}