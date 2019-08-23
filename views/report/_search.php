<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kak\widgets\fieldset\FieldSet;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscriptSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<br>
<br>
<?php FieldSet::begin([
    'legend' => Yii::t('main', 'Filters'),
    'active' => true // false - hide content, default true
]); ?>
<div class="report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['report-conscripts'],
        'method' => 'get',
    ]); ?>

    <div class="col-md-4">
        <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(app\models\EntRegion::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
            'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('report/city?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docconscriptsearch-city_id" ).html( data );
                                    });'
        ]) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(app\models\EntCity::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose'),
            'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('report/district?id=') . '"+$(this).val(), function( data ) {
                                      $( "select#docconscriptsearch-district_id" ).html( data );
                                    });']) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(app\models\EntDistrict::find()->all(), 'id', 'name'), ['prompt' => Yii::t('main', 'Choose')]); ?>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12">
        <div class="form-group  pull-right">
            <?= Html::submitButton(Yii::t('main', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('main', 'Reset'), ['report/report-conscripts'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<br>
<?php FieldSet::end(); ?>

