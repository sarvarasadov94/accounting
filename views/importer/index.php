<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 22.04.2019
 * Time: 12:52
 */
use yii\helpers\Html;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;

kartik\file\FileInputAsset::register($this);
?>
<hr>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Сообщение</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(); ?>
<br>
<div class="col-md-12">
    <!-- 2 => 'Послужная карта', 3 => 'Учетная карточка',-->
    <?= $form->field($model, 'type')->radioList(array(1 => 'Призывники', 4 => 'Офицеры и солдаты',), array('labelOptions'=>array('style'=>'display:inline'), 'separator'=>'&nbsp;&nbsp;&nbsp;</br>',))->label(false); ?>
</div>
<div class="clearfix"></div>
<br>
<div class="col-md-6">
    <label class="control-label">Выбрать файл</label>
</div>
<div class="clearfix"></div>
<div class="col-md-12" style="padding: 0 0 0 0 !important;">
    <div class="col-md-6">
        <?= $form->field($model, 'file')->widget(FileInput::className(), [
            'options' => [
                'multiple' => false,
                'accept' => 'file/*',
            ],
            'pluginOptions' => [
                'showPreview' => false,
                'showUpload' => false,
                'showCancel' => false,
            ]
        ])->label(false) ?>
    </div>
    <div class="col-md-6">
        <?= Html::submitButton(Yii::t('main', 'Upload'), ['class' => 'btn btn-danger']) ?>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
