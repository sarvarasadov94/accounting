<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kak\widgets\fieldset\FieldSet;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="row">
        <div class="col-ms-12">
            <section class="panel">
                <div class="panel-body">
                    <br>
                    <h2 class="page_name"><?= Yii::t('main', 'OfficersAndSoldiers'); ?></h2>
                    <div class="doc-officers-and-soldiers-form">

                        <?php $form = ActiveForm::begin(); ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'soldier_type_id')->dropDownList(ArrayHelper::map(app\models\EntSoldierType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-2 pull-right">
                            <div class="form-group">
                                <?= $form->field($model, 'special_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutPersonInfo'),
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
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'passport_issued_by')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-top: 22px !important">
                            <button type="button" id="get-data-button"
                                    class="cutom-button btn btn-primary form-control">
                                <?= Yii::t('main', 'Get data') ?>
                            </button>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'military_ticket_seria')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'military_ticket_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->issue_date))
                                    $model->issue_date = date("d.m.Y", strtotime($model->issue_date));
                                ?>
                                <?= $form->field($model, 'issue_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'issued_by')->textInput(['maxlength' => true]) ?>
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
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'nationality_id')->dropDownList(ArrayHelper::map(app\models\EntNationality::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-officers-and-soldiers/city?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docofficersandsoldiers-city_id" ).html( data );
                                    });'
                                ]) ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-officers-and-soldiers/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docofficersandsoldiers-district_id" ).html( data );
                                    });']) ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'committee')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'education_type_id')->dropDownList(ArrayHelper::map(app\models\EnumEducationType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'family_status_id')->dropDownList(ArrayHelper::map(app\models\EnumFamilyStatus::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'sport')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'criminal_record')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php FieldSet::end(); ?>


                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutMilitaryService'),
                            'active' => false // false - hide content, default true
                        ]); ?>

                        <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('site/odo?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docmilitaryservicecard-odo_id" ).html( data );
                                    });']) ?>                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        <?php } ?>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'military_service_type')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'rank_id')->dropDownList(ArrayHelper::map(app\models\EntRank::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'accounting_category')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'accounting_group')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'vus')->dropDownList(ArrayHelper::map(app\models\EntOfficerVus::find()->all(), 'id', 'number'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'intended_odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->intended_odo_date))
                                    $model->intended_odo_date = date("d.m.Y", strtotime($model->intended_odo_date));
                                ?>
                                <?= $form->field($model, 'intended_odo_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'military_unit_id')->dropDownList(ArrayHelper::map(app\models\EntMilitaryUnit::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
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
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php if (isset($model->reserver_date))
                                    $model->reserver_date = date("d.m.Y", strtotime($model->reserver_date));
                                ?>
                                <?= $form->field($model, 'reserver_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?php if (isset($model->oath_date))
                                    $model->oath_date = date("d.m.Y", strtotime($model->oath_date));
                                ?>
                                <?= $form->field($model, 'oath_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'reserver_comment')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                <?= $form->field($model, 'intended_to_command')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'intended_vus')->dropDownList(ArrayHelper::map(app\models\EntOfficerVus::find()->all(), 'id', 'number'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'enrollment_to_reservre')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->registration_date))
                                    $model->registration_date = date("d.m.Y", strtotime($model->registration_date));
                                ?>
                                <?= $form->field($model, 'registration_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?php if (isset($model->date_of_deregistration))
                                    $model->date_of_deregistration = date("d.m.Y", strtotime($model->date_of_deregistration));
                                ?>
                                <?= $form->field($model, 'date_of_deregistration')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'head_circumference')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'gas_mask_size')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'uniform_size')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'shoe_size')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::end(); ?>

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
$js = <<<OEF
//get passport details of the person who giving claim
$("#get-data-button").on('click', function () {
    getPassportData();
});
function getPassportData() {

    var pinfl = $("#docofficersandsoldiers-pinfl").val();
    var passSeria = $("#docofficersandsoldiers-passport_seria").val();
    var passNumber = $("#docofficersandsoldiers-passport_number").val();
    var passport = passSeria + passNumber;
    $.ajax({
        url: "/doc-officers-and-soldiers/person",
        data: {
        "pinfl": pinfl,
            "passport": passport
        },
        dataType: "json",
        type: "GET",
        timeout: 10000,
        //beforeSend: function (xhr) {
        // xhr.setRequestHeader('Authorization', 'Bearer ' + access_token);
        //$('.loader').fadeIn();

    //},
        success: function (data) {
        //$('.loader').fadeOut();
        if (data != "") {
            $("#docofficersandsoldiers-first_name").val(data.name_latin);
            $("#docofficersandsoldiers-last_name").val(data.surname_latin);
            $("#docofficersandsoldiers-patronymic").val(data.patronym_latin);
            $("#docofficersandsoldiers-passport_given_date").val(data.date_begin_document);
            //$("#docinsuranceform-passvaliditydate").val(data.date_end_document);
            $("#docofficersandsoldiers-passport_issued_by").val(data.doc_give_place);
            //$("#docinsuranceform-genderid").val(data.sex);
            $("#docofficersandsoldiers-birth_date").val(data.birth_date);
            //alert('Данные успешно получены');
        } else {
            alert('Произошла ошибка при получении данных. Проверьте данные!');
        }
    },
        error: function () {
        //$('.loader').fadeOut();
        alert('Произошла ошибка при получении данных. Проверьте данные!');
    }
    });
}
OEF;
$this->registerJs($js)
?>