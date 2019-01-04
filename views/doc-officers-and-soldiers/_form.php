<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-officers-and-soldiers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_ticket_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_ticket_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issue_date')->textInput() ?>

    <?= $form->field($model, 'issued_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'committee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_type_id')->textInput() ?>

    <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_status_id')->textInput() ?>

    <?= $form->field($model, 'sport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'criminal_record')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_service_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validity_degree_id')->textInput() ?>

    <?= $form->field($model, 'rank_id')->textInput() ?>

    <?= $form->field($model, 'accounting_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accounting_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_unit_id')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'reserver_date')->textInput() ?>

    <?= $form->field($model, 'reserver_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oath_date')->textInput() ?>

    <?= $form->field($model, 'intended_to_command')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intended_vus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enrollment_to_reservre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_date')->textInput() ?>

    <?= $form->field($model, 'date_of_deregistration')->textInput() ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_circumference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uniform_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoe_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gas_mask_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soldier_type_id')->textInput() ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'modifier')->textInput() ?>

    <?= $form->field($model, 'modified_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
