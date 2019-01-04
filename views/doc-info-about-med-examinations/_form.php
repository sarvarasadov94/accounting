<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocInfoAboutMedExaminations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-info-about-med-examinations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pass_date')->textInput() ?>

    <?= $form->field($model, 'comission_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comission_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comission_date')->textInput() ?>

    <?= $form->field($model, 'tore_examination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tore_examination_date')->textInput() ?>

    <?= $form->field($model, 'record_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
