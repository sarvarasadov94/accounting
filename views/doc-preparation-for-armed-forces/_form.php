<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocPreparationForArmedForces */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'PreparationForArmedForces'); ?></h2>
                <div class="doc-preparation-for-armed-forces-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'receipt_of_basic_military')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'professional_fitness_conclusion')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'educational_establishment')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'specialty_received')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <?php if (isset($model->study_date))
                                $model->study_date = date("d.m.Y", strtotime($model->study_date));
                            ?>
                            <?= $form->field($model, 'study_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'study_period')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?php if (isset($model->startdate))
                                $model->startdate = date("d.m.Y", strtotime($model->startdate));
                            ?>
                            <?= $form->field($model, 'startdate')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?php if (isset($model->enddate))
                                $model->enddate = date("d.m.Y", strtotime($model->enddate));
                            ?>
                            <?= $form->field($model, 'enddate')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'bloodgroup_id')->dropDownList(ArrayHelper::map(app\models\EnumBloodGroup::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'rhfactor_id')->dropDownList(ArrayHelper::map(app\models\EnumRhFactor::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
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
