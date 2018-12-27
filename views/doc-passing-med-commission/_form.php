<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-passing-med-commission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'protocol_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protocol_date')->textInput() ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chest_volume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spirometry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restriction_degree_id')->textInput() ?>

    <?= $form->field($model, 'registered_on_d')->textInput() ?>

    <?= $form->field($model, 'registered_on_d_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suitable_for_military_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suitable_restriction_degree_id')->textInput() ?>

    <?= $form->field($model, 'suitable_for_military_service_vdv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suitable_vdv_restriction_degree_id')->textInput() ?>

    <?= $form->field($model, 'unsuitable_for_military_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delay_in_treatment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unsuitable_in_peace_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unsuitable_with_exception')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'needs_deferment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intended')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
