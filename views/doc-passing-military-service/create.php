<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryService */

$this->title = Yii::t('main', 'Create Doc Passing Military Service');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Military Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-military-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
