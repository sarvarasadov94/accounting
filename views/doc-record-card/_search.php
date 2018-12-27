<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-record-card-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pinfl') ?>

    <?= $form->field($model, 'passport_seria') ?>

    <?= $form->field($model, 'passport_number') ?>

    <?= $form->field($model, 'photo_name') ?>

    <?php // echo $form->field($model, 'photo_path') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'patronymic') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'vus_number') ?>

    <?php // echo $form->field($model, 'vus_code') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'education_type_id') ?>

    <?php // echo $form->field($model, 'civilian_profession') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'family_status_id') ?>

    <?php // echo $form->field($model, 'family_residence') ?>

    <?php // echo $form->field($model, 'voenkomat_id') ?>

    <?php // echo $form->field($model, 'voenkomat_region_id') ?>

    <?php // echo $form->field($model, 'military_unit_id') ?>

    <?php // echo $form->field($model, 'vocation_date') ?>

    <?php // echo $form->field($model, 'certificate_seria') ?>

    <?php // echo $form->field($model, 'certificate_number') ?>

    <?php // echo $form->field($model, 'validity_degree_id') ?>

    <?php // echo $form->field($model, 'rank_id') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'accounting_group') ?>

    <?php // echo $form->field($model, 'composition') ?>

    <?php // echo $form->field($model, 'rank_name_and_vus') ?>

    <?php // echo $form->field($model, 'team_number') ?>

    <?php // echo $form->field($model, 'by_vus') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'statewide_rank_id') ?>

    <?php // echo $form->field($model, 'route_number') ?>

    <?php // echo $form->field($model, 'days_and_hours') ?>

    <?php // echo $form->field($model, 'point') ?>

    <?php // echo $form->field($model, 'prescription_issued') ?>

    <?php // echo $form->field($model, 'access_number') ?>

    <?php // echo $form->field($model, 'based_date') ?>

    <?php // echo $form->field($model, 'based_comment') ?>

    <?php // echo $form->field($model, 'secondment_conclusion') ?>

    <?php // echo $form->field($model, 'head_of_dep_conclusion') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'head_circumference') ?>

    <?php // echo $form->field($model, 'uniform_size') ?>

    <?php // echo $form->field($model, 'shoe_size') ?>

    <?php // echo $form->field($model, 'participation_in_battles') ?>

    <?php // echo $form->field($model, 'military_oath_taken_date') ?>

    <?php // echo $form->field($model, 'military_oath_taken_comment') ?>

    <?php // echo $form->field($model, 'awards') ?>

    <?php // echo $form->field($model, 'wounds') ?>

    <?php // echo $form->field($model, 'special_marks') ?>

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
