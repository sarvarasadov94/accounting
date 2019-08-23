<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DocMilitaryServiceCardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'MilitaryServiceCard');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-military-service-card-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('main', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','contentOptions' => ['style' => 'width:65px;']],

            //'id',
            'personal_number',
            'last_name',
            'first_name',
            'patronymic',
            //'birth_date',
            //'birth_place',
            //'nationality_id',
            //'citizenship_id',
            //'military_special',
            //'foreign_lang_id',
            //'family_status_id',
            //'participation_in_battles',
            //'photo_name',
            //'photo_path',
            //'drafted_to_armed_forces',
            //'continuation_of_service',
            //'med_comission_result',
            [
                'attribute' => 'rank_id',
                'value' => function ($model) {
                    return $model->rank ? $model->rank->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRank::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            //'reserve_id',
            //'category',
            //'intended',
            //'work_place',
            //'address',
            [
                'attribute' => 'region_id',
                'value' => function ($model) {
                    return $model->region ? $model->region->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRegion::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'city_id',
                'value' => function ($model) {
                    return $model->city ? $model->city->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntCity::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'district_id',
                'value' => function ($model) {
                    return $model->district ? $model->district->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntDistrict::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            //'is_registered_odo',
            //'ld_number',
            //'is_registered_date',
            //'conscript_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
