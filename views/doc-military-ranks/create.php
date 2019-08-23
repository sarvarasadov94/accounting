<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryRanks */

//$this->title = Yii::t('main', 'Create Doc Military Ranks');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Military Ranks'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-military-ranks-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
