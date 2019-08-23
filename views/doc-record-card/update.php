<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */

$this->title = Yii::t('main', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'RecordCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-record-card-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
