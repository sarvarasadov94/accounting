<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRegion */

$this->title = Yii::t('app', 'Create Ent Region');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Regions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-region-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
