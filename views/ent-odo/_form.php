<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\EntOdo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-odo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(\app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(\app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

    <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(\app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
