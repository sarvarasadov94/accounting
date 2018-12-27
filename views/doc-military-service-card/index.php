<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocMilitaryServiceCardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Military Service Cards');
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
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            'last_name',
            'patronymic',
            'personal_number',
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
            //'rank_id',
            //'reserve_id',
            //'category',
            //'intended',
            //'work_place',
            //'address',
            //'region_id',
            //'city_id',
            //'district_id',
            //'is_registered_odo',
            //'ld_number',
            //'is_registered_date',
            //'conscript_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
