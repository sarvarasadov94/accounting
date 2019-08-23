<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = Yii::t('main', 'ChangePassword');
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-signup">
        <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
        <br>
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
                <div class="col-md-4">
                    <?= $form->field($model, 'oldPassword')->passwordInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'newPassword')->passwordInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'retypePassword')->passwordInput() ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('main', 'Save'), ['class' => 'btn btn-success pull-right', 'name' => 'change-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
<?php $this->registerJsFile(Yii::$app->request->baseUrl . '/public/bs3/js/bootstrap.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>