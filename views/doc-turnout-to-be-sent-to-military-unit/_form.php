<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\DocTurnoutToBeSentToMilitaryUnit */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'TurnoutToBeSentToMilitaryUnit'); ?></h2>
                <div class="doc-turnout-to-be-sent-to-military-unit-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if (isset($model->departure_date))
                                $model->departure_date = date("d.m.Y", strtotime($model->departure_date));
                            ?>
                            <?= $form->field($model, 'departure_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <?= $form->field($model, 'military_team_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'military_unit_id')->dropDownList(ArrayHelper::map(app\models\EntMilitaryUnit::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'disappear_reason')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'passed_passport_seria')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'passed_passport_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->passed_passport_date))
                                $model->passed_passport_date = date("d.m.Y", strtotime($model->passed_passport_date));
                            ?>
                            <?= $form->field($model, 'passed_passport_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'passed_certificate_seria')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'passed_certificate_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->passed_certificate_date))
                                $model->passed_certificate_date = date("d.m.Y", strtotime($model->passed_certificate_date));
                            ?>
                            <?= $form->field($model, 'passed_certificate_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'returned_passport_seria')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'returned_passport_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->returned_passport_date))
                                $model->returned_passport_date = date("d.m.Y", strtotime($model->returned_passport_date));
                            ?>
                            <?= $form->field($model, 'returned_passport_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'returned_certificate_of_conscript_sector_seria')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'returned_certificate_of_conscript_sector_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->returned_certificate_of_conscript_sector_date))
                                $model->returned_certificate_of_conscript_sector_date = date("d.m.Y", strtotime($model->returned_certificate_of_conscript_sector_date));
                            ?>
                            <?= $form->field($model, 'returned_certificate_of_conscript_sector_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </section>
    </div>
</div>
