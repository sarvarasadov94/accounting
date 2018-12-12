<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 05.04.2018
 * Time: 12:32
 */
use yii\helpers\Html;

?>

<li class="dropdown">
    <a href="#" class="ropdown-stoggle" data-toggle="dropdown"><?= $current->NAME ?></a>
    <ul class="dropdown-menu lang">
        <?php foreach ($langs as $lang): ?>
            <li class=<?= ($current->URL === $lang->URL ? 'active' : '') ?>>
                <?= Html::a($lang->NAME, '/' . $lang->URL . Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</li>

