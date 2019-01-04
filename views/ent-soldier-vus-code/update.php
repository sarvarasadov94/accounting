<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntSoldierVusCode */

$this->title = Yii::t('app', 'Update Ent Soldier Vus Code: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Soldier Vus Codes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ent-soldier-vus-code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
