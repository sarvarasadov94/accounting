<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-conscript-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_given_date')->textInput() ?>

    <?= $form->field($model, 'passport_issued_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'pinfl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'native_lang_id')->textInput() ?>

    <?= $form->field($model, 'state_lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foreign_lang_id')->textInput() ?>

    <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'committee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_positionid')->textInput() ?>

    <?= $form->field($model, 'study_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sport_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'criminal_record')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'criminal_record_relatives')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_statusid')->textInput() ?>

    <?= $form->field($model, 'family_residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sports_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relatives_connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fitness_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'health_condition_id')->textInput() ?>

    <?= $form->field($model, 'postponement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'street_id')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_path')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
