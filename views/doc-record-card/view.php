<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Record Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-record-card-view">

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
            'pinfl',
            'passport_seria',
            'passport_number',
            'photo_name',
            'photo_path',
            'first_name',
            'last_name',
            'patronymic',
            'birth_date',
            'birth_place',
            'vus_number',
            'vus_code',
            'nationality_id',
            'education_type_id',
            'civilian_profession',
            'work_place',
            'phone_number',
            'address',
            'region_id',
            'city_id',
            'district_id',
            'family_status_id',
            'family_residence',
            'odo_id',
            'udo_id',
            'military_unit_id',
            'vocation_date',
            'certificate_seria',
            'certificate_number',
            'validity_degree_id',
            'rank_id',
            'category',
            'accounting_group',
            'composition',
            'rank_name_and_vus',
            'team_number',
            'by_vus',
            'position',
            'statewide_rank_id',
            'route_number',
            'days_and_hours',
            'point',
            'prescription_issued',
            'access_number',
            'based_date',
            'based_comment',
            'secondment_conclusion',
            'head_of_dep_conclusion',
            'height',
            'head_circumference',
            'uniform_size',
            'shoe_size',
            'participation_in_battles',
            'military_oath_taken_date',
            'military_oath_taken_comment',
            'awards',
            'wounds',
            'special_marks',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
