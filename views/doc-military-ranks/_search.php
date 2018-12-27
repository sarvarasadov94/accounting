<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryRanksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-military-ranks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rank_id') ?>

    <?= $form->field($model, 'whose_order') ?>

    <?= $form->field($model, 'order_number') ?>

    <?= $form->field($model, 'order_date') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'military_service_card_id') ?>

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
