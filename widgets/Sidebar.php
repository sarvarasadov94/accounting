<?php
/**
 * Created by PhpStorm.
 * User: R_Alidjanovich
 * Date: 29.03.2018
 * Time: 12:25
 */

namespace app\widgets;


use yii\base\Widget;

class Sidebar extends Widget
{

    public function run()
    {
        return $this->render('sidebar');
    }

}