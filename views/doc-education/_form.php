<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocEducation */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'AboutEducation'); ?></h2>
                <div class="doc-education-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'education_type_id')->dropDownList(ArrayHelper::map(app\models\EnumEducationType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'educational_institution_id')->dropDownList(ArrayHelper::map(app\models\EntEducationalInstitution::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'study_place')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'study_period')->textInput(['maxlength' => true]) ?>
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

                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'course_number')->textInput() ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'specialty')->textInput(['maxlength' => true]) ?>
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
