<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntSoldierVus */

$this->title = Yii::t('main', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'EntSoldierVus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="ent-soldier-vus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
