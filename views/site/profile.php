<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \mdm\admin\models\User */


$this->title = Yii::t('main', 'Profile');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-profile-form">
    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
    <br>
    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-2" style="padding:  0px 0px 0px 30px !important;">
        <?php if (isset($model->photo_name) && isset($model->photo_path)) { ?>
            <div class="col-md-12" style="margin-bottom: 10px">
                <img id="img" src="<?= DIRECTORY_SEPARATOR . $model->photo_path ?>"
                     style="width: 100px;">
            </div>
        <?php } else { ?>
            <div class="col-md-12" style="margin-bottom: 10px">
                <img id="img" src="/public/Images/avatar.png" style="width: 100px;">
            </div>
        <?php } ?>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <?= $form->field($model, 'photo')->fileInput(['multiple' => false, 'accept' => 'image/* '])->label(false) ?>
        </div>
    </div>
    <div class="col-md-10" style="padding:  0px !important;">
        <div class="col-md-4">
            <?= $form->field($model, 'first_name') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'second_name') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'patronymic') ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <?= $form->field($model, 'email') ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'position') ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
        <div class="col-md-6">
            <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
                'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('site/odo?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#user-odo_id" ).html( data );
                                    });']) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
        </div>
    <?php } ?>

    <div class="col-md-12">
        <div class="form-group pull-right">
            <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>


<?php
$script = <<< JS
    $(function(){
        $('#user-photo').change(function(){
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


<style>
    input[type=file] {
        width: 113px;
        text-align: center;
        cursor: pointer;
    }
</style>