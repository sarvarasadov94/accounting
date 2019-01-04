<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcceptanceAndWithdrawalMarks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-acceptance-and-withdrawal-marks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'accepted_date')->textInput() ?>

    <?= $form->field($model, 'arrived')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrived_district_id')->textInput() ?>

    <?= $form->field($model, 'arrived_region_id')->textInput() ?>

    <?= $form->field($model, 'filmed_date')->textInput() ?>

    <?= $form->field($model, 'departed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departed_district_id')->textInput() ?>

    <?= $form->field($model, 'departed_region_id')->textInput() ?>

    <?= $form->field($model, 'record_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
