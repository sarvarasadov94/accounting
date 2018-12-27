<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\FrontAsset;
use app\widgets\Header;
use app\widgets\Sidebar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

FrontAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <nav id="sidebar">
        <?= Sidebar::widget() ?>
    </nav>
    <div id="content">
        <div class="header">
            <?= Header::widget() ?>
        </div>
        <div class="main_content">
            <div class="pull-right">
                <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
            </div>
            <?= $content; ?>
        </div>
        <div class="footer">
            <div class="col-md-6">
                <div class="footer_left_box">
                    <a href="/docs/Инструкция_пользователя_ИС_Проверки.docx">Инструкция пользователя</a>
<!--                    <a href="#">Обратная связь</a>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer_right_box">Служба технической поддержки: <span>+998 71 200 00 00</span></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

<?php

$js = <<<OEF
$(document).ready(function () {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
OEF;
$this->registerJs($js);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
