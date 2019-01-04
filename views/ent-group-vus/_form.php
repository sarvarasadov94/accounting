<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntGroupVus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-group-vus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group_mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'definition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
