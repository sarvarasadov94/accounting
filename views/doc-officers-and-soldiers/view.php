<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'OfficersAndSoldiers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-officers-and-soldiers-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'special_number',
            [
                'label' => Yii::t('main', 'Soldier Type ID'),
                'value' => $model->soldierType ? $model->soldierType->name : "",
            ],
            'last_name',
            'first_name',
            'patronymic',
            'military_ticket_seria',
            'military_ticket_number',
            'issue_date',
            'issued_by',
            'birth_date',
            'birth_place',
            [
                'label' => Yii::t('main', 'Nationality ID'),
                'value' => $model->nationality ? $model->nationality->name : "",
            ],
            'address',
            [
                'label' => Yii::t('main', 'Region ID'),
                'value' => $model->region ? $model->region->name : "",
            ],
            [
                'label' => Yii::t('main', 'City ID'),
                'value' => $model->city ? $model->city->name : "",
            ],
            [
                'label' => Yii::t('main', 'District ID'),
                'value' => $model->district ? $model->district->name : "",
            ],
            'phone_number',
            'committee',
            [
                'label' => Yii::t('main', 'Education Type ID'),
                'value' => $model->educationType ? $model->educationType->name : "",
            ],
            'civilian_profession',
            'work_place',
            [
                'label' => Yii::t('main', 'Family Status ID'),
                'value' => $model->familyStatus ? $model->familyStatus->name : "",
            ],
            'sport',
            'criminal_record',
            'military_service_type',
            [
                'label' => Yii::t('main', 'Validity Degree ID'),
                'value' => $model->validityDegree ? $model->validityDegree->name : "",
            ],
            [
                'label' => Yii::t('main', 'Rank ID'),
                'value' => $model->rank ? $model->rank->name : "",
            ],
            'accounting_category',
            'accounting_group',
            [
                'label' => Yii::t('main', 'Vus'),
                'value' => $model->vusNumber ? $model->vusNumber->name : "",
            ],
            [
                'label' => Yii::t('main', 'Intended odo id'),
                'value' => $model->intendedOdo ? $model->intendedOdo->name : "",
            ],
            'intended_odo_date',
            [
                'label' => Yii::t('main', 'Military Unit ID'),
                'value' => $model->militaryUnit ? $model->militaryUnit->name : "",
            ],
            'start_date',
            'end_date',
            'reserver_date',
            'oath_date',
            'reserver_comment',
            'order_number',
            'order_date',
            'intended_to_command',
            [
                'label' => Yii::t('main', 'Intended Vus'),
                'value' => $model->intendedVus ? $model->intendedVus->name : "",
            ],
            'enrollment_to_reservre',
            'registration_date',
            'date_of_deregistration',
            'height',
            'head_circumference',
            'gas_mask_size',
            'uniform_size',
            'shoe_size',
            'comment',
        ],
    ]) ?>

    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Ofitser_Soldat')) { ?>
        <div class="col-md-12" style="margin-bottom: 60px !important;">
            <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-danger pull-right']) ?>
        </div>
    <?php } ?>
</div>
