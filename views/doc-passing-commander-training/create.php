<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingCommanderTraining */

//$this->title = Yii::t('main', 'Create Doc Passing Commander Training');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Commander Trainings'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-commander-training-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
