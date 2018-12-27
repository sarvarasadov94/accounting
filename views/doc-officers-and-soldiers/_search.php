<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-officers-and-soldiers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'military_ticket_seria') ?>

    <?php // echo $form->field($model, 'military_ticket_number') ?>

    <?php // echo $form->field($model, 'issue_date') ?>

    <?php // echo $form->field($model, 'issued_by') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'committee') ?>

    <?php // echo $form->field($model, 'education_type_id') ?>

    <?php // echo $form->field($model, 'civilian_profession') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'family_status_id') ?>

    <?php // echo $form->field($model, 'sport') ?>

    <?php // echo $form->field($model, 'criminal_record') ?>

    <?php // echo $form->field($model, 'military_service_type') ?>

    <?php // echo $form->field($model, 'validity_degree_id') ?>

    <?php // echo $form->field($model, 'rank_id') ?>

    <?php // echo $form->field($model, 'accounting_category') ?>

    <?php // echo $form->field($model, 'accounting_group') ?>

    <?php // echo $form->field($model, 'vus') ?>

    <?php // echo $form->field($model, 'military_unit_id') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'reserver_date') ?>

    <?php // echo $form->field($model, 'reserver_comment') ?>

    <?php // echo $form->field($model, 'oath_date') ?>

    <?php // echo $form->field($model, 'intended_to_command') ?>

    <?php // echo $form->field($model, 'intended_vus') ?>

    <?php // echo $form->field($model, 'enrollment_to_reservre') ?>

    <?php // echo $form->field($model, 'registration_date') ?>

    <?php // echo $form->field($model, 'date_of_deregistration') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'head_circumference') ?>

    <?php // echo $form->field($model, 'uniform_size') ?>

    <?php // echo $form->field($model, 'shoe_size') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'gas_mask_size') ?>

    <?php // echo $form->field($model, 'special_number') ?>

    <?php // echo $form->field($model, 'soldier_type_id') ?>

    <?php // echo $form->field($model, 'conscript_id') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'modifier') ?>

    <?php // echo $form->field($model, 'modified_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('main', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
