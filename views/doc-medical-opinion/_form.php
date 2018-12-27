<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMedicalOpinion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-medical-opinion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doctor_type_id')->textInput() ?>

    <?= $form->field($model, 'validity_degree_id')->textInput() ?>

    <?= $form->field($model, 'validity_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restriction_degree_id')->textInput() ?>

    <?= $form->field($model, 'restriction_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passing_med_commission_id')->textInput() ?>

    <?= $form->field($model, 'commission_results_id')->textInput() ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
