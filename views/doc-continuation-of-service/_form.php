<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocContinuationOfService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-continuation-of-service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'military_unit_id')->textInput() ?>

    <?= $form->field($model, 'military_union')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whose_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'military_service_card_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
