<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocConscriptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Conscripts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-conscript-index">

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
            'first_name',
            'last_name',
            'patronymic',
            'passport_seria',
            //'passport_number',
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
            //'district_id',
            //'street_id',
            //'region_id',
            //'photo_name',
            //'photo_path',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
