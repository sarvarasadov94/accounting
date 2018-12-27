<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-military-service-card-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'personal_number') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'citizenship_id') ?>

    <?php // echo $form->field($model, 'military_special') ?>

    <?php // echo $form->field($model, 'foreign_lang_id') ?>

    <?php // echo $form->field($model, 'family_status_id') ?>

    <?php // echo $form->field($model, 'participation_in_battles') ?>

    <?php // echo $form->field($model, 'photo_name') ?>

    <?php // echo $form->field($model, 'photo_path') ?>

    <?php // echo $form->field($model, 'drafted_to_armed_forces') ?>

    <?php // echo $form->field($model, 'continuation_of_service') ?>

    <?php // echo $form->field($model, 'med_comission_result') ?>

    <?php // echo $form->field($model, 'rank_id') ?>

    <?php // echo $form->field($model, 'reserve_id') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'intended') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'is_registered_odo') ?>

    <?php // echo $form->field($model, 'ld_number') ?>

    <?php // echo $form->field($model, 'is_registered_date') ?>

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
