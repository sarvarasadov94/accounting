<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Passing Med Commissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-passing-med-commission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('main', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'protocol_number',
            'protocol_date',
            'height',
            'weight',
            'chest_volume',
            'spirometry',
            'restriction_degree_id',
            'registered_on_d',
            'registered_on_d_reason',
            'suitable_for_military_service',
            'suitable_restriction_degree_id',
            'suitable_for_military_service_vdv',
            'suitable_vdv_restriction_degree_id',
            'unsuitable_for_military_service',
            'delay_in_treatment',
            'unsuitable_in_peace_time',
            'unsuitable_with_exception',
            'needs_deferment',
            'intended',
            'conscript_id',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
