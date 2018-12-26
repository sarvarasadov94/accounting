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
    <a href="#" class="ropdown-stoggle" data-toggle="dropdown"><?= $current->name ?></a>
    <ul class="dropdown-menu lang">
        <?php foreach ($langs as $lang): ?>
            <li class=<?= ($current->url === $lang->url ? 'active' : '') ?>>
                <?= Html::a($lang->name, '/' . $lang->url . Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</li>

