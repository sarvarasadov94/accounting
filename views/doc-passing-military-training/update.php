<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryTraining */

$this->title = Yii::t('main', 'Update Doc Passing Military Training: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Military Trainings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-passing-military-training-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
