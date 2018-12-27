<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = Yii::t('main', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorizatio_box">
    <div class="pos">
        <div class="main_pos">
            <div class="images__link">
                <!--                <img src="/public/Images/authorization_logo.png" alt="">-->
                <div class="no_name_title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <br>
                    <p><?= Yii::t('main', 'FillFieldsForSignup'); ?></p>
                </div>
            </div>
            <div class="box">
                <?= Html::errorSummary($model) ?>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <!--                $form->field($model, 'first_name') ?>-->
                <!--                $form->field($model, 'second_name') ?>-->
                <!--                $form->field($model, 'patronymic') ?>-->
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'military_unit_id') ?>
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
        <div class="contact_box">
            <div class="col-md-5"><a href="/docs/Инструкция_пользователя_ИС_Проверки.docx" class="instuction">Инструкция
                    пользователя</a></div>
            <div class="col-md-2 center_block">
                <div><img src="/public/Images/phone_icon.png"></div>
                Служба технической поддержки:
                <span>+998 71 202 04 77</span>
            </div>
            <div class="col-md-5"><a href="#" class="feedback">Обратная связь</a></div>
            <div class="clearfix"></div>
        </div>
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
</style>