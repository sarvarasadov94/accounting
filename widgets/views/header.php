<?php
/**
 * Created by PhpStorm.
 * User: R_Alidjanovich
 * Date: 29.03.2018
 * Time: 13:25
 */
use mdm\admin\models\User;
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
                <li><a href="#"><img src="/public/Images/emblem_2.png" style="width: 50px; height: 50px"></a></li>
                <li><span><?php echo(Yii::t('main', 'HeaderText')) ?></span>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right users_block">
                <li class="dropdown">
                    <?= WLang::widget(); ?>
                </li>
                <li class="dropdown">
                    <?php if (isset(User::findOne(Yii::$app->user->getId())->photo_path)) { ?>
                        <img class="user_img"
                             src="<?= DIRECTORY_SEPARATOR . User::findOne(Yii::$app->user->getId())->photo_path ?>"
                             style="width: 32px;">
                    <?php } else { ?>
                        <img class="user_img"
                             src="/public/Images/avatar.png"
                             style="width: 32px;">
                    <?php } ?>
                    <?php if (Yii::$app->user->isGuest) { ?>
                <li class="dropdown">
                    <?= Html::a('<span class="username">' . Yii::t('main', 'Login') . '</span>', ['site/login'], ['class' => 'dropdown-toggle', 'style' => 'padding: 4px 4px 5px 9px;']) ?>
                </li>
                <?php } else { ?>
                    <a href="#" class="ropdown-stoggle"
                       data-toggle="dropdown"><?= Yii::$app->user->identity->username; ?></a>
                    <ul class="dropdown-menu user_settings">
                        <li><?= Html::a(Yii::t('main', 'Profile'), ['site/profile', 'id' => Yii::$app->user->getId()]) ?></li>
                        <li><?= Html::a(Yii::t('main', 'ChangePassword'), ['site/change-password']) ?></li>
                        <?php if (Yii::$app->user->can('AdminPermission') || Yii::$app->user->can('SuperadminPermission')) { ?>
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
