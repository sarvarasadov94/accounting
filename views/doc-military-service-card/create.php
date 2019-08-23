<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = Yii::t('main', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'MilitaryServiceCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-military-service-card-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
