<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPreparationForArmedForces */

$this->title = Yii::t('main', 'Create Doc Preparation For Armed Forces');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Preparation For Armed Forces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-preparation-for-armed-forces-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
