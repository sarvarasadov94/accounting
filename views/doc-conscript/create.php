<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */

$this->title = Yii::t('main', 'Create Doc Conscript');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Conscripts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-conscript-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
