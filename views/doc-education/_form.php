<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'education_type_id')->textInput() ?>

    <?= $form->field($model, 'educational_institution_id')->textInput() ?>

    <?= $form->field($model, 'study_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'study_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enddate')->textInput() ?>

    <?= $form->field($model, 'course_number')->textInput() ?>

    <?= $form->field($model, 'specialty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <?= $form->field($model, 'military_service_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
