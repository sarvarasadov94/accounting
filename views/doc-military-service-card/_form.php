<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-military-service-card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'citizenship_id')->textInput() ?>

    <?= $form->field($model, 'military_special')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foreign_lang_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_status_id')->textInput() ?>

    <?= $form->field($model, 'participation_in_battles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drafted_to_armed_forces')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'continuation_of_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'med_comission_result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank_id')->textInput() ?>

    <?= $form->field($model, 'reserve_id')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intended')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'udo_id')->textInput() ?>

    <?= $form->field($model, 'is_registered_odo')->textInput() ?>

    <?= $form->field($model, 'ld_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_registered_date')->textInput() ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
