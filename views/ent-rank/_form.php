<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\EntRank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-rank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rank_type_id')->dropDownList(ArrayHelper::map(\app\models\EnumRankType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
 
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
