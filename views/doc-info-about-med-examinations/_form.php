<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocInfoAboutMedExaminations */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'InfoAboutMedExaminations'); ?></h2>
                <div class="doc-info-about-med-examinations-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->pass_date))
                                $model->pass_date = date("d.m.Y", strtotime($model->pass_date));
                            ?>
                            <?= $form->field($model, 'pass_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'tore_examination')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->tore_examination_date))
                                $model->tore_examination_date = date("d.m.Y", strtotime($model->tore_examination_date));
                            ?>
                            <?= $form->field($model, 'tore_examination_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?= $form->field($model, 'comission_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'comission_comment')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php if (isset($model->comission_date))
                                $model->comission_date = date("d.m.Y", strtotime($model->comission_date));
                            ?>
                            <?= $form->field($model, 'comission_date')->widget(kartik\date\DatePicker::classname(), [
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd.mm.yyyy',
                                ]
                            ]);
                            ?>
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
