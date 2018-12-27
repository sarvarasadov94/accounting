<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocInfoAboutMedExaminations */

$this->title = Yii::t('main', 'Create Doc Info About Med Examinations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Info About Med Examinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-info-about-med-examinations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
