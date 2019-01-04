<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-record-card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pinfl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vus_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vus_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'education_type_id')->textInput() ?>

    <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'family_status_id')->textInput() ?>

    <?= $form->field($model, 'family_residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'odo_id')->textInput() ?>

    <?= $form->field($model, 'udo_id')->textInput() ?>

    <?= $form->field($model, 'military_unit_id')->textInput() ?>

    <?= $form->field($model, 'vocation_date')->textInput() ?>

    <?= $form->field($model, 'certificate_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validity_degree_id')->textInput() ?>

    <?= $form->field($model, 'rank_id')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accounting_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'composition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank_name_and_vus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'by_vus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statewide_rank_id')->textInput() ?>

    <?= $form->field($model, 'route_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'days_and_hours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'point')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prescription_issued')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'based_date')->textInput() ?>

    <?= $form->field($model, 'based_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondment_conclusion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_of_dep_conclusion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_circumference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uniform_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoe_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'participation_in_battles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_oath_taken_date')->textInput() ?>

    <?= $form->field($model, 'military_oath_taken_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'awards')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wounds')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special_marks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
