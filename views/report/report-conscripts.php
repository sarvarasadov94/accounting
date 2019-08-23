<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 14.02.2019
 * Time: 16:32
 */
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocConscriptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_search', array('model'=>$searchModel));

?>
<div class="report-conscripts">

    <br>
    <br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
            'last_name',
            'first_name',
            'patronymic',
            'passport_seria',
            'passport_number',
            'address',
            'committee',
            [
                'attribute' => 'region_id',
                'value' => function ($model) {
                    return $model->region ? $model->region->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRegion::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'district_id',
                'value' => function ($model) {
                    return $model->district ? $model->district->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntDistrict::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
//            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        'pjax' => true, // pjax is set to always true for this demo
        // set your toolbar
        'toolbar' => [
            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        // set export properties
        'export' => [
            'fontAwesome' => true
        ],
        // parameters from the demo form
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => false,
        'hover' => true,
        'showPageSummary' => false,
        'panel' =>
            [
                'type' => GridView::TYPE_PRIMARY,
                'heading' => null,
                'before' => '<p class="panel-title" style="color: black; text-align: left"><i class="glyphicon glyphicon-list"></i>  ' . Yii::t('main', 'Conscripts List who are up to 27') . '</p>',
//            'after' => Html::a('<i class="glyphicon glyphicon-repeat"></i>' . Yii::t('main', 'Reset'), ['index'], ['class' => 'btn btn-info']),
            ],
        'persistResize' => false,
        'toggleDataOptions' => ['minCount' => 20],
        'exportConfig' => [
            GridView::CSV => ['label' => 'CSV'],
            GridView::TEXT => ['label' => 'TEXT'],
            GridView::EXCEL => ['label' => 'EXCEL'],
//            GridView::PDF => ['label' => 'PDF'],
        ],
        'itemLabelSingle' => 'Призывник',
        'itemLabelPlural' => 'Призывников'
    ]); ?>
</div>
