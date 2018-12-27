<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRestrictionDegree */

$this->title = Yii::t('main', 'Update Ent Restriction Degree: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Restriction Degrees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="ent-restriction-degree-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
