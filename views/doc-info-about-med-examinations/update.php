<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocInfoAboutMedExaminations */

$this->title = Yii::t('main', 'Update Doc Info About Med Examinations: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Info About Med Examinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-info-about-med-examinations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
