<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocPassingMilitaryServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Passing Military Services');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-passing-military-service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('main', 'Create Doc Passing Military Service'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'military_unit_id',
            'position',
            'vus_number',
            'start_date',
            //'end_date',
            //'record_card_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
