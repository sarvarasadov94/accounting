<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntHealthCondition */

$this->title = Yii::t('app', 'Create Ent Health Condition');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Health Conditions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-health-condition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>