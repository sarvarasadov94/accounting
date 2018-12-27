<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-passing-med-commission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'protocol_number') ?>

    <?= $form->field($model, 'protocol_date') ?>

    <?= $form->field($model, 'height') ?>

    <?= $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'chest_volume') ?>

    <?php // echo $form->field($model, 'spirometry') ?>

    <?php // echo $form->field($model, 'restriction_degree_id') ?>

    <?php // echo $form->field($model, 'registered_on_d') ?>

    <?php // echo $form->field($model, 'registered_on_d_reason') ?>

    <?php // echo $form->field($model, 'suitable_for_military_service') ?>

    <?php // echo $form->field($model, 'suitable_restriction_degree_id') ?>

    <?php // echo $form->field($model, 'suitable_for_military_service_vdv') ?>

    <?php // echo $form->field($model, 'suitable_vdv_restriction_degree_id') ?>

    <?php // echo $form->field($model, 'unsuitable_for_military_service') ?>

    <?php // echo $form->field($model, 'delay_in_treatment') ?>

    <?php // echo $form->field($model, 'unsuitable_in_peace_time') ?>

    <?php // echo $form->field($model, 'unsuitable_with_exception') ?>

    <?php // echo $form->field($model, 'needs_deferment') ?>

    <?php // echo $form->field($model, 'intended') ?>

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
