<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryTraining */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'PassingMilitaryTraining'); ?></h2>
                <div class="doc-passing-military-training-form">

                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'training_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?php if (isset($model->training_date))
                                $model->training_date = date("d.m.Y", strtotime($model->training_date));
                            ?>
                            <?= $form->field($model, 'training_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?php if (isset($model->training_end_date))
                                $model->training_date = date("d.m.Y", strtotime($model->training_end_date));
                            ?>
                            <?= $form->field($model, 'training_end_date')->widget(kartik\date\DatePicker::classname(), [
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