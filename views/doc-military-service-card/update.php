<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = Yii::t('main', 'Update', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'MilitaryServiceCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-military-service-card-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
