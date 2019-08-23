<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcceptanceAndWithdrawalMarks */

//$this->title = Yii::t('main', 'Update Doc Acceptance And Withdrawal Marks: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Acceptance And Withdrawal Marks'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-acceptance-and-withdrawal-marks-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
