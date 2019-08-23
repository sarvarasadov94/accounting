<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="row">
        <div class="col-ms-12">
            <section class="panel">
                <div class="panel-body">
                    <div class="doc-military-service-card-form">

                        <?php $form = ActiveForm::begin(); ?>
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
                            <h2 class="page_name"><?= Yii::t('main', 'MilitaryServiceCard'); ?></h2>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-2" style="margin: 12px 0px 0px 5px;">
                            <?= $form->field($model, 'photo')->fileInput(['multiple' => false, 'accept' => 'image/* '])->label(false) ?>
                        </div>
                        <div class="col-md-2 pull-right">
                            <div class="form-group">
                                <?= $form->field($model, 'personal_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

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
                                <?= $form->field($model, 'citizenship_id')->dropDownList(ArrayHelper::map(app\models\EntCitizenship::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'military_special')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'foreign_lang_id')->dropDownList(ArrayHelper::map(app\models\EntForeignLanguage::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'family_status_id')->dropDownList(ArrayHelper::map(app\models\EnumFamilyStatus::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'participation_in_battles')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'drafted_to_armed_forces')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'continuation_of_service')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'med_comission_result')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'rank_id')->dropDownList(ArrayHelper::map(app\models\EntRank::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'reserve_id')->dropDownList(ArrayHelper::map(app\models\EntReserve::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'intended')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-military-service-card/city?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docmilitaryservicecard-city_id" ).html( data );
                                    });'
                                ]) ?>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-military-service-card/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docmilitaryservicecard-district_id" ).html( data );
                                    });']) ?>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>

                        <div class="col-md-3">
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


                        <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('site/odo?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docmilitaryservicecard-odo_id" ).html( data );
                                    });']) ?>                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php if (isset($model->is_registered_date))
                                    $model->is_registered_date = date("d.m.Y", strtotime($model->is_registered_date));
                                ?>
                                <?= $form->field($model, 'is_registered_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'ld_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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

    var pinfl = $("#docmilitaryservicecard-pinfl").val();
    var passSeria = $("#docmilitaryservicecard-passport_seria").val();
    var passNumber = $("#docmilitaryservicecard-passport_number").val();
    var passport = passSeria + passNumber;
    $.ajax({
        url: "/doc-military-service-card/person",
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
            $("#docmilitaryservicecard-first_name").val(data.name_latin);
            $("#docmilitaryservicecard-last_name").val(data.surname_latin);
            $("#docmilitaryservicecard-patronymic").val(data.patronym_latin);
            $("#docmilitaryservicecard-passport_given_date").val(data.date_begin_document);
            //$("#docinsuranceform-passvaliditydate").val(data.date_end_document);
            $("#docmilitaryservicecard-passport_issued_by").val(data.doc_give_place);
            //$("#docinsuranceform-genderid").val(data.sex);
            $("#docmilitaryservicecard-birth_date").val(data.birth_date);
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
        $('#docmilitaryservicecard-photo').change(function(){
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
