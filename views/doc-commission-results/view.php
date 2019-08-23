<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\Helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Commission Results'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-commission-results-view">

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
            'registered_ond_reason',
            'suitable_for_military_service',
            'suitable_for_military_service_vdv',
            'intended_for_vs',
            'unsuitable_in_peace_time',
            'unsuitable_with_exception',
            'send_for_treatment',
            'provide_reprieve',
            'enddate_of_reprieve',
            'appearance_date_to_send',
            'commission_chairman',
            'commission_members',
            'head_of_dep',
            'representative_nuroniy',
            'representative_kamolot',
            'representative_maxalla',
            'representative1',
            'representative2',
            'senior_doctor',
        ],
    ]) ?>
    <div class="col-md-12" style="margin-bottom: 60px !important;">
        <?= Html::a(Yii::t('main', 'Back'), ['doc-conscript/view', 'id' => $model->conscript_id], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
