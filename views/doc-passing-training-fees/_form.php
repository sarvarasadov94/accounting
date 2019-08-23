<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingTrainingFees */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'PassingTrainingFees'); ?></h2>
                <div class="doc-passing-training-fees-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?= $form->field($model, 'year')->textInput() ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <?= $form->field($model, 'days')->textInput() ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'military_unit_or_orgname')->textInput(['maxlength' => true]) ?>
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

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </section>
    </div>
</div>