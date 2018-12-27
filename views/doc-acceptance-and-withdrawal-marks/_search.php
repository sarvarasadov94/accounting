<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcceptanceAndWithdrawalMarksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-acceptance-and-withdrawal-marks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'accepted_date') ?>

    <?= $form->field($model, 'arrived') ?>

    <?= $form->field($model, 'arrived_district_id') ?>

    <?= $form->field($model, 'arrived_region_id') ?>

    <?php // echo $form->field($model, 'filmed_date') ?>

    <?php // echo $form->field($model, 'departed') ?>

    <?php // echo $form->field($model, 'departed_district_id') ?>

    <?php // echo $form->field($model, 'departed_region_id') ?>

    <?php // echo $form->field($model, 'record_card_id') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'modifier') ?>

    <?php // echo $form->field($model, 'modified_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
