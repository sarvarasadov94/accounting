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
                    <div class="doc-conscript-form">
                        <?php $form = ActiveForm::begin(); ?>

                        <section>
                            <?php if (isset($model->photo_name) && isset($model->photo_path)) { ?>
                                <div class="col-md-2" style="margin: 0px 0px 10px 10px;">
                                    <img id="img"
                                         src="<?= DIRECTORY_SEPARATOR . $model->photo_path . $model->photo_name ?>"
                                         style="width: 100px;">
                                </div>
                            <?php } else { ?>
                                <div class="col-md-2" style="margin: 0px 0px 10px 10px;">
                                    <img id="img" src="/public/Images/avatar.png" style="width: 100px;">
                                </div>
                            <?php } ?>
                            <div class="col-md-8">
                                <h2 class="page_name"><?= Yii::t('main', 'NewConscript'); ?></h2>
                            </div>
                            <div class="clearfix"></div>


                            <div class="col-md-2" style="margin: 12px 0px 0px 5px;">
                                <?= $form->field($model, 'photo')->fileInput(['multiple' => false, 'accept' => 'image/* '])->label(false) ?>
                            </div>
                            <div class="col-md-2 pull-right">
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
                                        $model->passport_given_date = date("Y.m.d", strtotime($model->passport_given_date));
                                    ?>
                                    <?= $form->field($model, 'passport_given_date')->widget(kartik\date\DatePicker::classname(), [
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'yyyy.mm.dd',
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


                            <div class="col-md-3">
                                <div class="form-group">
                                    <?php if (isset($model->birth_date))
                                        $model->birth_date = date("Y.m.d", strtotime($model->birth_date));
                                    ?>
                                    <?= $form->field($model, 'birth_date')->widget(kartik\date\DatePicker::classname(), [
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'format' => 'yyyy.mm.dd',
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


                            <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('site/odo?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docconscript-odo_id" ).html( data );
                                    });']) ?>
                                </div>

                                <div class="col-md-6">
                                    <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-conscript/city?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docconscript-city_id" ).html( data );
                                    });'
                                    ]) ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-conscript/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docconscript-district_id" ).html( data );
                                    });']) ?>
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
                        <br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right']) ?>
                            </div>
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

    var pinfl = $("#docconscript-pinfl").val();
    var passSeria = $("#docconscript-passport_seria").val();
    var passNumber = $("#docconscript-passport_number").val();
    var passport = passSeria + passNumber;
    $.ajax({
        url: "/doc-conscript/person",
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
            $("#docconscript-first_name").val(data.name_latin);
            $("#docconscript-last_name").val(data.surname_latin);
            $("#docconscript-patronymic").val(data.patronym_latin);
            $("#docconscript-passport_given_date").val(data.date_begin_document);
            //$("#docinsuranceform-passvaliditydate").val(data.date_end_document);
            $("#docconscript-passport_issued_by").val(data.doc_give_place);
            //$("#docinsuranceform-genderid").val(data.sex);
            $("#docconscript-birth_date").val(data.birth_date);
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

    <style>
        input[type=file] {
            width: 113px;
            text-align: center;
            cursor: pointer;
        }
    </style>

<?php
$script = <<< JS
    $(function(){
        $('#docconscript-photo').change(function(){
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
            else
            {
                $('#img').attr('src', '/public/Images/avatar.png');
            }
        });

    });
JS;
$this->registerJs($script);
?>