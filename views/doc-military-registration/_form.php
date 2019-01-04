<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-military-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admitted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'removed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conscript_id')->textInput() ?>

    <?= $form->field($model, 'preparation_for_armed_forces_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
