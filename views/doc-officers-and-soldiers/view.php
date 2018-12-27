<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Officers And Soldiers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-officers-and-soldiers-view">

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
            'military_ticket_seria',
            'military_ticket_number',
            'issue_date',
            'issued_by',
            'birth_date',
            'birth_place',
            'nationality_id',
            'address',
            'region_id',
            'city_id',
            'district_id',
            'phone_number',
            'committee',
            'education_type_id',
            'civilian_profession',
            'work_place',
            'family_status_id',
            'sport',
            'criminal_record',
            'military_service_type',
            'validity_degree_id',
            'rank_id',
            'accounting_category',
            'accounting_group',
            'vus',
            'military_unit_id',
            'start_date',
            'end_date',
            'reserver_date',
            'reserver_comment',
            'oath_date',
            'intended_to_command',
            'intended_vus',
            'enrollment_to_reservre',
            'registration_date',
            'date_of_deregistration',
            'height',
            'head_circumference',
            'uniform_size',
            'shoe_size',
            'comment',
            'gas_mask_size',
            'special_number',
            'soldier_type_id',
            'conscript_id',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
