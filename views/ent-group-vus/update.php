<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntGroupVus */

$this->title = Yii::t('main', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'EntGroupVus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="ent-group-vus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
