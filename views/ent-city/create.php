<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntCity */

$this->title = Yii::t('app', 'Create Ent City');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
