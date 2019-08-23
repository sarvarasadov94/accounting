<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryRegistration */

//$this->title = Yii::t('main', 'Create Doc Military Registration');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Military Registrations'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-military-registration-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
