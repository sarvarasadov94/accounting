<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LangTranslations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lang-translations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang_uz')->textInput(['maxlength' => true]) ?>

    <div class="form-group  pull-right">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
