<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */

$this->title = Yii::t('main', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'RecordCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-record-card-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
