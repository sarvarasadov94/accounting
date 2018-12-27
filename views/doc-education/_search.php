<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocEducationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-education-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'education_type_id') ?>

    <?= $form->field($model, 'educational_institution_id') ?>

    <?= $form->field($model, 'study_place') ?>

    <?= $form->field($model, 'study_period') ?>

    <?php // echo $form->field($model, 'enddate') ?>

    <?php // echo $form->field($model, 'course_number') ?>

    <?php // echo $form->field($model, 'specialty') ?>

    <?php // echo $form->field($model, 'conscript_id') ?>

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
