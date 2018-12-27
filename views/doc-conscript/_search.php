<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscriptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-conscript-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'passport_seria') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'passport_given_date') ?>

    <?php // echo $form->field($model, 'passport_issued_by') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'pinfl') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'native_lang_id') ?>

    <?php // echo $form->field($model, 'state_lang') ?>

    <?php // echo $form->field($model, 'foreign_lang_id') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'civilian_profession') ?>

    <?php // echo $form->field($model, 'committee') ?>

    <?php // echo $form->field($model, 'social_positionid') ?>

    <?php // echo $form->field($model, 'study_place') ?>

    <?php // echo $form->field($model, 'sport_type') ?>

    <?php // echo $form->field($model, 'criminal_record') ?>

    <?php // echo $form->field($model, 'criminal_record_relatives') ?>

    <?php // echo $form->field($model, 'doc_number') ?>

    <?php // echo $form->field($model, 'family_statusid') ?>

    <?php // echo $form->field($model, 'family_residence') ?>

    <?php // echo $form->field($model, 'sports_category') ?>

    <?php // echo $form->field($model, 'relatives_connect') ?>

    <?php // echo $form->field($model, 'fitness_degree') ?>

    <?php // echo $form->field($model, 'health_condition_id') ?>

    <?php // echo $form->field($model, 'postponement') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'street_id') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'photo_name') ?>

    <?php // echo $form->field($model, 'photo_path') ?>

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
