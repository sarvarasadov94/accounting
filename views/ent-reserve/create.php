<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntReserve */

$this->title = Yii::t('main', 'Create Ent Reserve');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Reserves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-reserve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
