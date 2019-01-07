<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kak\widgets\fieldset\FieldSet;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                <h2 class="page_name"><?= Yii::t('main', 'NewConscript'); ?></h2>
                <div class="doc-conscript-form">
                    <?php $form = ActiveForm::begin(); ?>

                    <section>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutPerson'),
                            'active' => true // false - hide content, default true
                        ]); ?>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'pinfl')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <?= $form->field($model, 'passport_seria')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->passport_given_date))
                                    $model->passport_given_date = date("d.m.Y", strtotime($model->passport_given_date));
                                ?>
                                <?= $form->field($model, 'passport_given_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'mm.dd.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'passport_issued_by')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->birth_date))
                                    $model->birth_date = date("d.m.Y", strtotime($model->birth_date));
                                ?>
                                <?= $form->field($model, 'birth_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'mm.dd.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'nationality_id')->dropDownList(ArrayHelper::map(app\models\EntNationality::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'native_lang_id')->dropDownList(ArrayHelper::map(app\models\EntNativeLanguage::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'state_lang')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::end(); ?>
                    </section>

                    <section>
                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutPersonOther'),
                            'active' => false // false - hide content, default true
                            // 'speed'  => 500, // animation speed default value 300
                            // 'dataUp' => "<i class='glyphicon glyphicon-collapse-up'></i> ",     // template content icon
                            // 'dataDown'  => "<i class='glyphicon glyphicon-collapse-down'></i> ",   // template content icon
                        ]); ?>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'foreign_lang_id')->dropDownList(ArrayHelper::map(app\models\EntForeignLanguage::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'study_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'committee')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'social_positionid')->dropDownList(ArrayHelper::map(app\models\EntSocialPosition::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'sport_type')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'sports_category')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <?php FieldSet::end(); ?>
                    </section>

                    <section>
                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutPersonCrime'),
                            'active' => false // false - hide content, default true
                            // 'speed'  => 500, // animation speed default value 300
                            // 'dataUp' => "<i class='glyphicon glyphicon-collapse-up'></i> ",     // template content icon
                            // 'dataDown'  => "<i class='glyphicon glyphicon-collapse-down'></i> ",   // template content icon
                        ]); ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'criminal_record')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'criminal_record_relatives')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'postponement')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'family_statusid')->dropDownList(ArrayHelper::map(app\models\EnumFamilyStatus::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'family_residence')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'relatives_connect')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'fitness_degree')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'health_condition_id')->dropDownList(ArrayHelper::map(app\models\EntHealthCondition::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::end(); ?>
                    </section>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </section>
    </div>
</div>