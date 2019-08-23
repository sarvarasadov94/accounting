<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMilitaryService */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'PassingMilitaryService'); ?></h2>
                <div class="doc-passing-military-service-form">

                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'military_unit_id')->dropDownList(ArrayHelper::map(app\models\EntMilitaryUnit::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <?= $form->field($model, 'vus_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if (isset($model->start_date))
                                $model->start_date = date("d.m.Y", strtotime($model->start_date));
                            ?>
                            <?= $form->field($model, 'start_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?php if (isset($model->end_date))
                                $model->end_date = date("d.m.Y", strtotime($model->end_date));
                            ?>
                            <?= $form->field($model, 'end_date')->widget(kartik\date\DatePicker::classname(), [
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