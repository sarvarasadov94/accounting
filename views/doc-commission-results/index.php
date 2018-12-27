<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocCommissionResultsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Commission Results');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-commission-results-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('main', 'Create Doc Commission Results'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'protocol_number',
            'protocol_date',
            'height',
            'weight',
            //'chest_volume',
            //'spirometry',
            //'restriction_degree_id',
            //'registered_ond',
            //'registered_ond_reason',
            //'suitable_for_military_service',
            //'suitable_for_military_service_vdv',
            //'intended_for_vs',
            //'unsuitable_in_peace_time',
            //'unsuitable_with_exception',
            //'send_for_treatment',
            //'provide_reprieve',
            //'enddate_of_reprieve',
            //'appearance_date_to_send',
            //'commission_chairman',
            //'commission_members',
            //'head_of_dep',
            //'representative_nuroniy',
            //'representative_kamolot',
            //'representative_maxalla',
            //'representative1',
            //'representative2',
            //'senior_doctor',
            //'conscript_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
