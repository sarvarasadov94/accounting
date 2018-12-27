<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResultsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-commission-results-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'protocol_number') ?>

    <?= $form->field($model, 'protocol_date') ?>

    <?= $form->field($model, 'height') ?>

    <?= $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'chest_volume') ?>

    <?php // echo $form->field($model, 'spirometry') ?>

    <?php // echo $form->field($model, 'restriction_degree_id') ?>

    <?php // echo $form->field($model, 'registered_ond') ?>

    <?php // echo $form->field($model, 'registered_ond_reason') ?>

    <?php // echo $form->field($model, 'suitable_for_military_service') ?>

    <?php // echo $form->field($model, 'suitable_for_military_service_vdv') ?>

    <?php // echo $form->field($model, 'intended_for_vs') ?>

    <?php // echo $form->field($model, 'unsuitable_in_peace_time') ?>

    <?php // echo $form->field($model, 'unsuitable_with_exception') ?>

    <?php // echo $form->field($model, 'send_for_treatment') ?>

    <?php // echo $form->field($model, 'provide_reprieve') ?>

    <?php // echo $form->field($model, 'enddate_of_reprieve') ?>

    <?php // echo $form->field($model, 'appearance_date_to_send') ?>

    <?php // echo $form->field($model, 'commission_chairman') ?>

    <?php // echo $form->field($model, 'commission_members') ?>

    <?php // echo $form->field($model, 'head_of_dep') ?>

    <?php // echo $form->field($model, 'representative_nuroniy') ?>

    <?php // echo $form->field($model, 'representative_kamolot') ?>

    <?php // echo $form->field($model, 'representative_maxalla') ?>

    <?php // echo $form->field($model, 'representative1') ?>

    <?php // echo $form->field($model, 'representative2') ?>

    <?php // echo $form->field($model, 'senior_doctor') ?>

    <?php // echo $form->field($model, 'conscript_id') ?>

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
