<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryTraining */

$this->title = Yii::t('main', 'Create Doc Passing Military Training');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Military Trainings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-military-training-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
