<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocOfficersAndSoldiersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'OfficersAndSoldiers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-officers-and-soldiers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('main', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'contentOptions' => ['style' => 'width:65px;']],

            //'id',
            'last_name',
            'first_name',
            'patronymic',
            'military_ticket_seria',
            'military_ticket_number',
            //'issue_date',
            //'issued_by',
            //'birth_date',
            //'birth_place',
            //'nationality_id',
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
            //'phone_number',
            //'committee',
            //'education_type_id',
            //'civilian_profession',
            //'work_place',
            //'family_status_id',
            //'sport',
            //'criminal_record',
            //'military_service_type',
            //'validity_degree_id',
            //'rank_id',
            //'accounting_category',
            //'accounting_group',
            //'vus',
            //'military_unit_id',
            //'start_date',
            //'end_date',
            //'reserver_date',
            //'reserver_comment',
            //'oath_date',
            //'intended_to_command',
            //'intended_vus',
            //'enrollment_to_reservre',
            //'registration_date',
            //'date_of_deregistration',
            //'height',
            //'head_circumference',
            //'uniform_size',
            //'shoe_size',
            //'comment',
            //'gas_mask_size',
            //'special_number',
            //'soldier_type_id',
            //'conscript_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn', 'contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
