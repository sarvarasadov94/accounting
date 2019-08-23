<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'CommissionResults'); ?></h2>
                <div class="col-md-12" style="text-align: center">
                    <h4 style="color: #0b58a2">
                        <strong><?php echo $conscript['last_name'] . ' ' . $conscript['first_name'] . ' ' . $conscript['patronymic'] . ' / ' . $conscript['birth_date'] ?></strong>
                    </h4>
                </div>
                <div class="clearfix"></div>

                <div class="doc-commission-results-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Protokolist')) { ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'protocol_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php if (isset($model->protocol_date))
                                    $model->protocol_date = date("d.m.Y", strtotime($model->protocol_date));
                                ?>
                                <?= $form->field($model, 'protocol_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'protocol_number')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php if (isset($model->protocol_date))
                                    $model->protocol_date = date("d.m.Y", strtotime($model->protocol_date));
                                ?>
                                <?= $form->field($model, 'protocol_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ], 'disabled' => true
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>



                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Antropometrik')) { ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'chest_volume')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'spirometry')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'height')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'weight')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'chest_volume')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'spirometry')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Protokolist')) { ?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'), 'disabled' => true]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <div class="col-md-3">
                        <div class="form-group" style="margin: 20px 0px 0px">
                            <?= $form->field($model, 'registered_ond')->checkbox(); ?>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <?= $form->field($model, 'registered_ond_reason')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <hr style="margin-top: 10px !important;">
                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Dermatolog')) { ?>
                        <!-- dermatolog -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'dermatolog') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_validity_comment')->textInput(['maxlength' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'dermatolog_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_restriction_comment')->textInput(['maxlength' => true])->label(false); ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- dermatolog -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'dermatolog') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'dermatolog_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'dermatolog_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Xirurg')) { ?>
                        <!-- xirurg -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'xirurg') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_validity_comment')->textInput(['maxlength' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'xirurg_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_restriction_comment')->textInput(['maxlength' => true])->label(false); ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- xirurg -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'xirurg') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'xirurg_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'xirurg_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Terapevt')) { ?>
                        <!-- terapevt -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'terapevt') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_validity_comment')->textInput(['maxlength' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'terapevt_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- terapevt -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'terapevt') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'terapevt_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'terapevt_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Flyurograf')) { ?>
                        <!-- flyuro -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'flyuro') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'flyuro_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- flyuro -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'flyuro') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'flyuro_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'flyuro_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Nevropatolog')) { ?>
                        <!-- nevro -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'nevro') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'nevro_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- nevro -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'nevro') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'nevro_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'nevro_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Psixiatr')) { ?>
                        <!-- psix -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'psix') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'psix_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- psix -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'psix') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'psix_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'psix_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Oftalmolog')) { ?>
                        <!-- okulist -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'okulist') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'okulist_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- okulist -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'okulist') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'okulist_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'okulist_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Otolaringolog')) { ?>
                        <!-- oto -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'oto') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'oto_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- oto -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'oto') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'oto_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'oto_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Stomatolog')) { ?>
                        <!-- stom -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'stom') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_validity_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'stom_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id')])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_restriction_comment')->textInput(['maxlength' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <!-- stom -->
                        <div class="col-md-1">
                            <h5><strong><?= Yii::t('main', 'stom') ?></strong></h5>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'validity_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_validity_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="col-md-2">
                            <?= $form->field($model, 'stom_restriction_degree_id')->dropDownList(ArrayHelper::map(app\models\EntRestrictionDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'restriction_degree_id'), 'disabled' => true])->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= $form->field($model, 'stom_restriction_comment')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>


                    <hr style="margin-top: 10px !important;">


                    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Protokolist')) { ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $form->field($model, 'intended_for_vs')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'suitable_for_military_service')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'suitable_for_military_service_vdv')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'unsuitable_in_peace_time')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'unsuitable_with_exception')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'send_for_treatment')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'provide_reprieve')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?php if (isset($model->enddate_of_reprieve))
                                    $model->enddate_of_reprieve = date("d.m.Y", strtotime($model->enddate_of_reprieve));
                                ?>
                                <?= $form->field($model, 'enddate_of_reprieve')->widget(kartik\date\DatePicker::classname(), [
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
                                <?php if (isset($model->appearance_date_to_send))
                                    $model->appearance_date_to_send = date("d.m.Y", strtotime($model->appearance_date_to_send));
                                ?>
                                <?= $form->field($model, 'appearance_date_to_send')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'commission_chairman')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'commission_members')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'head_of_dep')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_nuroniy')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_kamolot')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_maxalla')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative1')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative2')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'senior_doctor')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } else { ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $form->field($model, 'intended_for_vs')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'suitable_for_military_service')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'suitable_for_military_service_vdv')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'unsuitable_in_peace_time')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'unsuitable_with_exception')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'send_for_treatment')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'provide_reprieve')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?php if (isset($model->enddate_of_reprieve))
                                    $model->enddate_of_reprieve = date("d.m.Y", strtotime($model->enddate_of_reprieve));
                                ?>
                                <?= $form->field($model, 'enddate_of_reprieve')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ], 'disabled' => true
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php if (isset($model->appearance_date_to_send))
                                    $model->appearance_date_to_send = date("d.m.Y", strtotime($model->appearance_date_to_send));
                                ?>
                                <?= $form->field($model, 'appearance_date_to_send')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ], 'disabled' => true
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'commission_chairman')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'commission_members')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'head_of_dep')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_nuroniy')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_kamolot')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative_maxalla')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative1')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'representative2')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'senior_doctor')->textInput(['maxlength' => true, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </section>
    </div>
</div>
