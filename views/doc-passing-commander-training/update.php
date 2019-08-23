<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingCommanderTraining */

//$this->title = Yii::t('main', 'Update Doc Passing Commander Training: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Commander Trainings'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-passing-commander-training-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
