<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocEducation */

$this->title = Yii::t('main', 'Create Doc Education');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Educations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-education-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
