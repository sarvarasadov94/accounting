<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = Yii::t('main', 'Create Doc Military Service Card');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Military Service Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-military-service-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
