<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = Yii::t('main', 'Update Doc Military Service Card: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Military Service Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-military-service-card-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
