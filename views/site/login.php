<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Логин';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorizatio_box">
    <div class="pos">
        <div class="main_pos">
            <div class="images__link">
                <img src="/public/Images/emblem_2.png" alt="" style="width: 160px; height: 160px">
                <div class="no_name_title">
                    <span>ЭЛЕКТРОННАЯ СИСТЕМА ВОИНСКОГО УЧЕТА</span>
                </div>
            </div>
            <div class="box">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username',
                    ['template' => "<img class='account_img' src='/public/Images/account.png'>\n{input}\n{hint}"
                    ])->textInput(['class' => 'form-control has_img', 'autofocus' => true, 'aria-required' => true, 'aria-invalid' => true, 'placeholder' => 'Введите логин']) ?>

                <?= $form->field($model, 'password',
                    ['template' => "<img class='account_img' src='/public/Images/block_img.png'>\n{input}\n{hint}"
                    ])->passwordInput(['class' => 'form-control has_img', 'autofocus' => true, 'aria-required' => true, 'aria-invalid' => true, 'placeholder' => 'Введите пароль']) ?>


                <div class="form-group field-loginform-rememberme">
                    <div class="checkbox">
                        <label for="loginform-rememberme">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </label>
                        <p class="help-block help-block-error"></p>
                    </div>
                </div>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('main', 'EnterLogin'), ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
                </div>
                <label><?= Html::a(Yii::t('main', 'Signup'), ['site/signup']) ?></label>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
<!--        <div class="contact_box">-->
<!--            <div class="col-md-5"><a href="#" class="instuction">Инструкция-->
<!--                    пользователя</a></div>-->
<!--            <div class="col-md-2 center_block">-->
<!--                <div><img src="/public/Images/phone_icon.png"></div>-->
<!--                Служба технической поддержки:-->
<!--                <span>+998 71 --- -- --</span>-->
<!--            </div>-->
<!--            <div class="col-md-5"><a href="#" class="feedback">Обратная связь</a></div>-->
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
    </div>
</div>


<style>
    .checkbox label, .radio label {
        padding-left: 8px;
    }
</style>