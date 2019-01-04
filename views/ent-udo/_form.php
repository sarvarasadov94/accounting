<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\EntRegion;
use app\models\EntCity;

/* @var $this yii\web\View */
/* @var $model app\models\EntUdo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-udo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
