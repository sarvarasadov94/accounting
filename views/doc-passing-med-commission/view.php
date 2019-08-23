<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\Helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Med Commissions'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-passing-med-commission-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'protocol_number',
            'protocol_date',
            'height',
            'weight',
            'chest_volume',
            'spirometry',
            [
                'attribute' => 'restriction_degree_id',
                'value' => function ($model) {
                    return $model->restrictionDegree ? $model->restrictionDegree->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRestrictionDegree::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            'registered_on_d_reason',
            'suitable_for_military_service',
            [
                'attribute' => 'suitable_restriction_degree_id',
                'value' => function ($model) {
                    return $model->suitableRestrictionDegree ? $model->suitableRestrictionDegree->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRestrictionDegree::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            'suitable_for_military_service_vdv',
            [
                'attribute' => 'suitable_vdv_restriction_degree_id',
                'value' => function ($model) {
                    return $model->suitableVdvRestrictionDegree ? $model->suitableVdvRestrictionDegree->name : "";
                },
                'filter' => ArrayHelper::map(\app\models\EntRestrictionDegree::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            ],
            'unsuitable_for_military_service',
            'delay_in_treatment',
            'unsuitable_in_peace_time',
            'unsuitable_with_exception',
            'needs_deferment',
            'intended',
        ],
    ]) ?>

    <div class="col-md-12" style="margin-bottom: 60px !important;">
        <?= Html::a(Yii::t('main', 'Back'), ['doc-conscript/view', 'id' => $model->conscript_id], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
