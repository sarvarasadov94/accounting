<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryService */

//$this->title = Yii::t('main', 'Update Doc Passing Military Service: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Military Services'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-passing-military-service-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
