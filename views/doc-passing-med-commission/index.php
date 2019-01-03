<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocPassingMedCommissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Passing Med Commissions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-med-commission-index">

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
            'protocol_number',
            'protocol_date',
            'height',
            'weight',
            //'chest_volume',
            //'spirometry',
            //'restriction_degree_id',
            //'registered_on_d',
            //'registered_on_d_reason',
            //'suitable_for_military_service',
            //'suitable_restriction_degree_id',
            //'suitable_for_military_service_vdv',
            //'suitable_vdv_restriction_degree_id',
            //'unsuitable_for_military_service',
            //'delay_in_treatment',
            //'unsuitable_in_peace_time',
            //'unsuitable_with_exception',
            //'needs_deferment',
            //'intended',
            //'conscript_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
