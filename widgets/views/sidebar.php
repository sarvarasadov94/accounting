<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 29.03.2018
 * Time: 12:25
 */
use yii\helpers\Html;

?>
<ul class="list-unstyled components">
    <li>
        <?= Html::a('<img src="/public/Images/home_icon.png">' . Yii::t('main', 'Home'), ['site/index'], ['class' => 'active']) ?>
    </li>
    <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true">
            <img src="/public/Images/directory_icon.png">Entities</a>
        <ul class="collapse out list-unstyled" id="pageSubmenu">
            <li>
                <?= Html::a('Organization', ['organization/index']) ?>
            </li>
            <li>
                <?= Html::a('Status', ['organization/index']) ?>
            </li>
        </ul>
    </li>
    <li>
        <?= Html::a('<img src="/public/Images/sreate_user_icon.png">' . 'Create User', ['site/signup']) ?>
    </li>
    <li>
        <?= Html::a('<img src="/public/Images/translations_icon.png">' . 'Language translations', ['lang-translations/index']) ?>
    </li>
    <li><a href="#"><img src="/public/Images/settings_icon.png">Настройки</a></li>
</ul>

