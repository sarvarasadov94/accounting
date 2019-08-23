<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocFamilyMembers */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'AboutFamilyMembers'); ?></h2>
                <div class="doc-family-members-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'relative_group_id')->dropDownList(ArrayHelper::map(app\models\EnumRelativeGroup::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'relative_type_id')->dropDownList(ArrayHelper::map(app\models\EnumRelativeType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'year_of_birth')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </section>
    </div>
</div>
