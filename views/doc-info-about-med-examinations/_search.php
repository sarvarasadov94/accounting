<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocInfoAboutMedExaminationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-info-about-med-examinations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pass_date') ?>

    <?= $form->field($model, 'comission_name') ?>

    <?= $form->field($model, 'comission_comment') ?>

    <?= $form->field($model, 'comission_date') ?>

    <?php // echo $form->field($model, 'tore_examination') ?>

    <?php // echo $form->field($model, 'tore_examination_date') ?>

    <?php // echo $form->field($model, 'record_card_id') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'modifier') ?>

    <?php // echo $form->field($model, 'modified_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
