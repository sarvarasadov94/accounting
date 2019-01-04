<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryTraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-passing-military-training-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'training_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_date')->textInput() ?>

    <?= $form->field($model, 'military_service_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
