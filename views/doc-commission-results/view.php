<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Commission Results'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-commission-results-view">

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
            'registered_ond',
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
            'conscript_id',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
