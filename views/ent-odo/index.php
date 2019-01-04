<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EntOdoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'EntOdo');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-odo-index">

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
            'name',
            [
                'attribute' => 'udo_id',
                'value' => function ($model) {
                    return $model->udo ? $model->udo->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntUdo::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
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
            ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:65px;']],
        ],
    ]); ?>
</div>
