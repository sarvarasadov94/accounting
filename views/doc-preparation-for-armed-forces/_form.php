<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPreparationForArmedForces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-preparation-for-armed-forces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'receipt_of_basic_military')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional_fitness_conclusion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'educational_establishment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialty_received')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'study_date')->textInput() ?>

    <?= $form->field($model, 'startdate')->textInput() ?>

    <?= $form->field($model, 'study_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enddate')->textInput() ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <?= $form->field($model, 'bloodgroup_id')->textInput() ?>

    <?= $form->field($model, 'rhfactor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
