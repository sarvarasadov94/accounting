<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryRanks */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'MilitaryRanks'); ?></h2>
                <div class="doc-military-ranks-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="col-md-3">
                        <div class="form-group">
                            <?= $form->field($model, 'rank_id')->dropDownList(ArrayHelper::map(app\models\EntRank::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'whose_order')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if (isset($model->order_date))
                                $model->order_date = date("d.m.Y", strtotime($model->order_date));
                            ?>
                            <?= $form->field($model, 'order_date')->widget(kartik\date\DatePicker::classname(), [
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
                            <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
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
