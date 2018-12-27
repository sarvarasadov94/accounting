<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-commission-results-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'protocol_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protocol_date')->textInput() ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chest_volume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spirometry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restriction_degree_id')->textInput() ?>

    <?= $form->field($model, 'registered_ond')->textInput() ?>

    <?= $form->field($model, 'registered_ond_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suitable_for_military_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suitable_for_military_service_vdv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intended_for_vs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unsuitable_in_peace_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unsuitable_with_exception')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_for_treatment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provide_reprieve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enddate_of_reprieve')->textInput() ?>

    <?= $form->field($model, 'appearance_date_to_send')->textInput() ?>

    <?= $form->field($model, 'commission_chairman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commission_members')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_of_dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative_nuroniy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative_kamolot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative_maxalla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senior_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
