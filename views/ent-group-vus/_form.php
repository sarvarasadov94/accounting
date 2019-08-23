<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntGroupVus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-group-vus-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-2">
        <div class="form-group">
            <?= $form->field($model, 'group_mark')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <?= $form->field($model, 'definition')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
