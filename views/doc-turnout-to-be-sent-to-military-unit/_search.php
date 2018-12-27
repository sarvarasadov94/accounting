<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocTurnoutToBeSentToMilitaryUnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-turnout-to-be-sent-to-military-unit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'departure_date') ?>

    <?= $form->field($model, 'military_team_number') ?>

    <?= $form->field($model, 'military_unit_id') ?>

    <?= $form->field($model, 'disappear_reason') ?>

    <?php // echo $form->field($model, 'return_reason') ?>

    <?php // echo $form->field($model, 'passed_passport_seria') ?>

    <?php // echo $form->field($model, 'passed_passport_number') ?>

    <?php // echo $form->field($model, 'passed_passport_date') ?>

    <?php // echo $form->field($model, 'passed_certificate_seria') ?>

    <?php // echo $form->field($model, 'passed_certificate_number') ?>

    <?php // echo $form->field($model, 'passed_certificate_date') ?>

    <?php // echo $form->field($model, 'returned_passport_seria') ?>

    <?php // echo $form->field($model, 'returned_passport_number') ?>

    <?php // echo $form->field($model, 'returned_passport_date') ?>

    <?php // echo $form->field($model, 'returned_certificate_of_conscript_sector_seria') ?>

    <?php // echo $form->field($model, 'conscript_id') ?>

    <?php // echo $form->field($model, 'returned_certificate_of_conscript_sector_number') ?>

    <?php // echo $form->field($model, 'returned_certificate_of_conscript_sector_date') ?>

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
