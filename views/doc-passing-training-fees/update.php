<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingTrainingFees */

//$this->title = Yii::t('main', 'Update Doc Passing Training Fees: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Training Fees'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-passing-training-fees-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
