<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocTurnoutToBeSentToMilitaryUnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Doc Turnout To Be Sent To Military Units');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-turnout-to-be-sent-to-military-unit-index">

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
            'departure_date',
            'military_team_number',
            'military_unit_id',
            'disappear_reason',
            //'return_reason',
            //'passed_passport_seria',
            //'passed_passport_number',
            //'passed_passport_date',
            //'passed_certificate_seria',
            //'passed_certificate_number',
            //'passed_certificate_date',
            //'returned_passport_seria',
            //'returned_passport_number',
            //'returned_passport_date',
            //'returned_certificate_of_conscript_sector_seria',
            //'conscript_id',
            //'returned_certificate_of_conscript_sector_number',
            //'returned_certificate_of_conscript_sector_date',
            //'creator',
            //'created_at',
            //'modifier',
            //'modified_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
