<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kak\widgets\fieldset\FieldSet;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-ms-12">
        <section class="panel">
            <div class="panel-body">
                <div class="doc-record-card-form">

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
                            <h2 class="page_name"><?= Yii::t('main', 'NewRecordCard'); ?></h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-2" style="margin: 12px 0px 0px 5px;">
                            <?= $form->field($model, 'photo')->fileInput(['multiple' => false, 'accept' => 'image/* '])->label(false) ?>
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
                        <div class="col-md-9">
                            <div class="form-group">
                                <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'vus_group')->dropDownList(ArrayHelper::map(app\models\EntGroupVus::find()->all(), 'id', 'group_mark'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'vus_number')->dropDownList(ArrayHelper::map(app\models\EntSoldierVus::find()->all(), 'id', 'code'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'vus_code')->dropDownList(ArrayHelper::map(app\models\EntSoldierVusCode::find()->all(), 'id', 'code'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'nationality_id')->dropDownList(ArrayHelper::map(app\models\EntNationality::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'education_type_id')->dropDownList(ArrayHelper::map(app\models\EnumEducationType::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'civilian_profession')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-record-card/city?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docrecordcard-city_id" ).html( data );
                                    });'
                                ]) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                    'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-record-card/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docrecordcard-district_id" ).html( data );
                                    });']) ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'family_status_id')->dropDownList(ArrayHelper::map(app\models\EnumFamilyStatus::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'family_residence')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php FieldSet::end(); ?>
                    </section>

                    <section>
                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutMilitaryService'),
                            'active' => false // false - hide content, default true
                        ]); ?>



                        <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                                        'onchange' => '
                                    $.post( "' . Yii::$app->urlManager->createUrl('doc-record-card/odo?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docrecordcard-odo_id" ).html( data );
                                    });'
                                    ]) ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'military_unit_id')->dropDownList(ArrayHelper::map(app\models\EntMilitaryUnit::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php if (isset($model->vocation_date))
                                    $model->vocation_date = date("d.m.Y", strtotime($model->vocation_date));
                                ?>
                                <?= $form->field($model, 'vocation_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'certificate_seria')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'certificate_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'validity_degree_id')->dropDownList(ArrayHelper::map(app\models\EntValidityDegree::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'rank_id')->dropDownList(ArrayHelper::map(app\models\EntRank::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'accounting_group')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'composition')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'rank_name_and_vus')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'team_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'by_vus')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'statewide_rank_id')->dropDownList(ArrayHelper::map(app\models\EntRank::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'route_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'days_and_hours')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'point')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'prescription_issued')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $form->field($model, 'access_number')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php if (isset($model->based_date))
                                    $model->based_date = date("d.m.Y", strtotime($model->based_date));
                                ?>
                                <?= $form->field($model, 'based_date')->widget(kartik\date\DatePicker::classname(), [
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
                                <?= $form->field($model, 'based_comment')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'secondment_conclusion')->textarea(['rows' => '3']) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'head_of_dep_conclusion')->textarea(['rows' => '3']) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'head_circumference')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'uniform_size')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'shoe_size')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php FieldSet::end(); ?>
                    </section>

                    <section>
                        <?php FieldSet::begin([
                            'legend' => Yii::t('main', 'AboutAwards'),
                            'active' => false // false - hide content, default true
                        ]); ?>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'participation_in_battles')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php if (isset($model->military_oath_taken_date))
                                    $model->military_oath_taken_date = date("d.m.Y", strtotime($model->military_oath_taken_date));
                                ?>
                                <?= $form->field($model, 'military_oath_taken_date')->widget(kartik\date\DatePicker::classname(), [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd.mm.yyyy',
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <!--                            <div class="col-md-4">-->
                        <!--                                <div class="form-group">-->
                        <!--                                    <? //= $form->field($model, 'military_oath_taken_comment')->textInput(['maxlength' => true])?> -->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'awards')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'wounds')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <!--                            <div class="col-md-4">-->
                        <!--                                <div class="form-group">-->
                        <!--                                    <? //= $form->field($model, 'special_marks')->textInput(['maxlength' => true]) ?>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
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
<?php
$js = <<<OEF
//get passport details of the person who giving claim
$("#get-data-button").on('click', function () {
    getPassportData();
});
function getPassportData() {

    var pinfl = $("#docrecordcard-pinfl").val();
    var passSeria = $("#docrecordcard-passport_seria").val();
    var passNumber = $("#docrecordcard-passport_number").val();
    var passport = passSeria + passNumber;
    $.ajax({
        url: "/doc-record-card/person",
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
            $("#docrecordcard-first_name").val(data.name_latin);
            $("#docrecordcard-last_name").val(data.surname_latin);
            $("#docrecordcard-patronymic").val(data.patronym_latin);
            $("#docrecordcard-passport_given_date").val(data.date_begin_document);
            //$("#docinsuranceform-passvaliditydate").val(data.date_end_document);
            $("#docrecordcard-passport_issued_by").val(data.doc_give_place);
            //$("#docinsuranceform-genderid").val(data.sex);
            $("#docrecordcard-birth_date").val(data.birth_date);
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
        $('#docrecordcard-photo').change(function(){
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
