<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPreparationForArmedForces */

//$this->title = Yii::t('main', 'Update Doc Preparation For Armed Forces: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Preparation For Armed Forces'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-preparation-for-armed-forces-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
