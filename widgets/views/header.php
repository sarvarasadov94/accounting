<?php
/**
 * Created by PhpStorm.
 * User: R_Alidjanovich
 * Date: 29.03.2018
 * Time: 13:25
 */
use yii\helpers\Html;
use app\widgets\WLang;

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <ul class="logo_and_title">
                <li>
                    <button type="button" id="sidebarCollapse" class="btn navbar-btn">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                    </button>
                </li>
                <li><a href="#"><img src="/public/Images/logo.png"></a></li>
                <li>АИС ПРОВЕРКА СУБЪЕКТОВ<span>ПРЕДПРИНИМАТЕЛЬСТВА</span>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right users_block">
                <li class="dropdown">
                    <?= WLang::widget(); ?>
                </li>
                <li class="dropdown">
                    <div class="user_img"><i class="glyphicon glyphicon-user"></i></div>
                    <?php if (Yii::$app->user->isGuest) { ?>
                <li class="dropdown">
                    <?= Html::a('<span class="username">' . Yii::t('main', 'Login') . '</span>', ['site/login'], ['class' => 'dropdown-toggle', 'style' => 'padding: 4px 4px 5px 9px;']) ?>
                </li>
                <?php } else { ?>
                    <a href="#" class="ropdown-stoggle"
                       data-toggle="dropdown"><?= Yii::$app->user->identity->username; ?></a>
                    <ul class="dropdown-menu user_settings">
                        <li><?= Html::a(Yii::t('main', 'Profile'), ['site/profile', 'id' => Yii::$app->user->getId()]) ?></li>
                        <?php if (Yii::$app->user->can('AdminAccess')) { ?>
                            <li><?= Html::a(Yii::t('main', 'Settings'), ['admin/assignment']) ?></li>
                        <?php } ?>
                        <li><?= Html::a(Yii::t('main', 'Log out'), ['site/logout'], ['data-method' => 'post']) ?></li>
                    </ul>
                <?php } ?>
                </li>
            </ul>
        </div>

    </div>
</nav>
