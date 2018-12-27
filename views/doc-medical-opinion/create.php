<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocMedicalOpinion */

$this->title = Yii::t('main', 'Create Doc Medical Opinion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Medical Opinions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-medical-opinion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
