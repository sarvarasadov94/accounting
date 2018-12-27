<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingTrainingFees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-passing-training-fees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'days')->textInput() ?>

    <?= $form->field($model, 'military_unit_or_orgname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vus_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'record_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
