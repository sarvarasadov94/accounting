<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */
//
//$this->title = Yii::t('main', 'Update Doc Passing Med Commission: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Med Commissions'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-passing-med-commission-update">

    <?= $this->render('_form', [
        'model' => $model,
        'conscript' => $conscript,
    ]) ?>

</div>
