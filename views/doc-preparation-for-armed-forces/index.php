<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocPreparationForArmedForcesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Preparation For Armed Forces');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-preparation-for-armed-forces-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('main', 'Create Doc Preparation For Armed Forces'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'receipt_of_basic_military',
            'professional_fitness_conclusion',
            'educational_establishment',
            'specialty_received',
            //'study_date',
            //'startdate',
            //'study_period',
            //'enddate',
            //'conscript_id',
            //'bloodgroup_id',
            //'rhfactor_id',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
