<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMedicalOpinionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-medical-opinion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'doctor_type_id') ?>

    <?= $form->field($model, 'validity_degree_id') ?>

    <?= $form->field($model, 'validity_comment') ?>

    <?= $form->field($model, 'restriction_degree_id') ?>

    <?php // echo $form->field($model, 'restriction_comment') ?>

    <?php // echo $form->field($model, 'passing_med_commission_id') ?>

    <?php // echo $form->field($model, 'commission_results_id') ?>

    <?php // echo $form->field($model, 'conscript_id') ?>

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
