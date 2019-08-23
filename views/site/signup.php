<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = Yii::t('main', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorizatio_box">
    <div class="pos">
        <br>
        <div class="main_pos">
            <div class="no_name_title">
                <h5 style="text-align: center"><strong><?= Yii::t('main', 'FillFieldsForSignup'); ?></strong></h5>
            </div>
            <div class="box">
                <?= Html::errorSummary($model) ?>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <!--                $form->field($model, 'first_name') ?>-->
                <!--                $form->field($model, 'second_name') ?>-->
                <!--                $form->field($model, 'patronymic') ?>-->
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'udo_id')->dropDownList(ArrayHelper::map(app\models\EntUdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>

<!--                ,-->
                <!--                'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('site/odo?id=') . '"+$(this).val(), function( data ) {-->
                <!--                $( "select#signup-odo_id" ).html( data );-->
                <!--                });']-->

                <?= $form->field($model, 'odo_id')->dropDownList(ArrayHelper::map(app\models\EntOdo::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
                <?= $form->field($model, 'position') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'retypePassword')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('main', 'SignupButton'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                <label><?= Html::a(Yii::t('main', 'LoginWithExisting'), ['site/login']) ?></label>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
<!--        <div class="contact_box">-->
<!--            <div class="col-md-5"><a href="/docs/Инструкция_пользователя_ИС_Проверки.docx" class="instuction">Инструкция-->
<!--                    пользователя</a></div>-->
<!--            <div class="col-md-2 center_block">-->
<!--                <div><img src="/public/Images/phone_icon.png"></div>-->
<!--                Служба технической поддержки:-->
<!--                <span>+998 71 202 04 77</span>-->
<!--            </div>-->
<!--            <div class="col-md-5"><a href="#" class="feedback">Обратная связь</a></div>-->
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
    </div>
</div>
<style>
    .box {
        text-align: center !important;
        font-weight: bold;
        font-size: 14px;
        padding: 20px 20px;
        color: #4d8ae6;
    }

    .form-group {
        margin-bottom: 3px !important;
    }
</style>
