<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */

//$this->title = Yii::t('main', 'Create Doc Passing Med Commission');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Med Commissions'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-med-commission-create">

    <?= $this->render('_form', [
        'model' => $model,
        'conscript' => $conscript,
    ]) ?>

</div>
