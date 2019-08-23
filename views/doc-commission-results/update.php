<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */

//$this->title = Yii::t('main', 'Update Doc Commission Results: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Commission Results'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-commission-results-update">

    <?= $this->render('_form', [
        'model' => $model,
        'conscript' => $conscript,
    ]) ?>

</div>
