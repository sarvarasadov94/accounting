<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocPreparationForArmedForces */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Preparation For Armed Forces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-preparation-for-armed-forces-view">

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
            'receipt_of_basic_military',
            'professional_fitness_conclusion',
            'educational_establishment',
            'specialty_received',
            'study_date',
            'startdate',
            'study_period',
            'enddate',
            'conscript_id',
            'bloodgroup_id',
            'rhfactor_id',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
