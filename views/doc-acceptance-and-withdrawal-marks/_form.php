<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcceptanceAndWithdrawalMarks */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'AcceptanceAndWithdrawalMarks'); ?></h2>
                <div class="doc-acceptance-and-withdrawal-marks-form">

                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if (isset($model->accepted_date))
                                $model->accepted_date = date("d.m.Y", strtotime($model->accepted_date));
                            ?>
                            <?= $form->field($model, 'accepted_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?= $form->field($model, 'arrived_region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-acceptance-and-withdrawal-marks/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docacceptanceandwithdrawalmarks-arrived_district_id" ).html( data );
                                    });'
                            ]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'arrived_district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'arrived')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if (isset($model->filmed_date))
                                $model->filmed_date = date("d.m.Y", strtotime($model->filmed_date));
                            ?>
                            <?= $form->field($model, 'filmed_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?= $form->field($model, 'departed_region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-acceptance-and-withdrawal-marks/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docacceptanceandwithdrawalmarks-departed_district_id" ).html( data );
                                    });'
                            ]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'departed_district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'departed')->textInput(['maxlength' => true]) ?>
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
