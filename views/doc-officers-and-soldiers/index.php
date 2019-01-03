<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocOfficersAndSoldiersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Officers And Soldiers');
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
            ['class' => 'yii\grid\SerialColumn','contentOptions' => ['style' => 'width:65px;']],

            //'id',
            'first_name',
            'last_name',
            'patronymic',
            'military_ticket_seria',
            //'military_ticket_number',
            //'issue_date',
            //'issued_by',
            //'birth_date',
            //'birth_place',
            //'nationality_id',
            //'address',
            //'region_id',
            //'city_id',
            //'district_id',
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

            ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
