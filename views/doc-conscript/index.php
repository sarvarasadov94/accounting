<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocConscriptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Conscript');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-conscript-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
        <p>
            <?= Html::a(Yii::t('main', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?php if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki') || Yii::$app->user->can('Superadmin')) { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn', 'contentOptions' => ['style' => 'width:65px;']],

                //'id',
                'last_name',
                'first_name',
                'patronymic',
                'passport_seria',
                'passport_number',
                //'passport_given_date',
                //'passport_issued_by',
                //'birth_date',
                //'birth_place',
                //'nationality_id',
                //'pinfl',
                //'address',
                //'phone_number',
                //'native_lang_id',
                //'state_lang',
                //'foreign_lang_id',
                //'work_place',
                //'civilian_profession',
                //'committee',
                //'social_positionid',
                //'study_place',
                //'sport_type',
                //'criminal_record',
                //'criminal_record_relatives',
                //'doc_number',
                //'family_statusid',
                //'family_residence',
                //'sports_category',
                //'relatives_connect',
                //'fitness_degree',
                //'health_condition_id',
                //'postponement',
                //'comment',
                //'city_id',
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
                //'street_id',
                //'photo_name',
                //'photo_path',
                //'creator',
                //'created_at',
                //'modifier',
                //'modified_at',

                ['class' => 'yii\grid\ActionColumn', 'contentOptions' => ['style' => 'width:65px;']],
            ],
        ]); ?>
    <?php } else if (Yii::$app->user->can('Guest')) { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn', 'contentOptions' => ['style' => 'width:65px;']],
                'last_name',
                'first_name',
                'patronymic',
                ['class' => 'yii\grid\ActionColumn', 'template' => '{view}', 'contentOptions' => ['style' => 'width:20px;']],
            ],
        ]); ?>
    <?php } else { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn', 'contentOptions' => ['style' => 'width:65px;']],
                'last_name',
                'first_name',
                'patronymic',
                'passport_seria',
                'passport_number',
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
                ['class' => 'yii\grid\ActionColumn', 'template' => '{view}', 'contentOptions' => ['style' => 'width:20px;']],
            ],
        ]); ?>
    <?php } ?>
</div>
