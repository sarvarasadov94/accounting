<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocTurnoutToBeSentToMilitaryUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-turnout-to-be-sent-to-military-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'departure_date')->textInput() ?>

    <?= $form->field($model, 'military_team_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_unit_id')->textInput() ?>

    <?= $form->field($model, 'disappear_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'return_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passed_passport_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passed_passport_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passed_passport_date')->textInput() ?>

    <?= $form->field($model, 'passed_certificate_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passed_certificate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passed_certificate_date')->textInput() ?>

    <?= $form->field($model, 'returned_passport_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'returned_passport_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'returned_passport_date')->textInput() ?>

    <?= $form->field($model, 'returned_certificate_of_conscript_sector_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <?= $form->field($model, 'returned_certificate_of_conscript_sector_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'returned_certificate_of_conscript_sector_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
