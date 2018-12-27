<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Military Service Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-military-service-card-view">

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
            'first_name',
            'last_name',
            'patronymic',
            'personal_number',
            'birth_date',
            'birth_place',
            'nationality_id',
            'citizenship_id',
            'military_special',
            'foreign_lang_id',
            'family_status_id',
            'participation_in_battles',
            'photo_name',
            'photo_path',
            'drafted_to_armed_forces',
            'continuation_of_service',
            'med_comission_result',
            'rank_id',
            'reserve_id',
            'category',
            'intended',
            'work_place',
            'address',
            'region_id',
            'city_id',
            'district_id',
            'is_registered_odo',
            'ld_number',
            'is_registered_date',
            'conscript_id',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
