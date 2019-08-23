<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */

//$this->title = Yii::t('main', 'Create Doc Commission Results');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Commission Results'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-commission-results-create">

    <?= $this->render('_form', [
        'model' => $model,
        'conscript' => $conscript,
    ]) ?>

</div>
