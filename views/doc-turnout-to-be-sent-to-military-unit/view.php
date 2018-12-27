<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocTurnoutToBeSentToMilitaryUnit */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Turnout To Be Sent To Military Units'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-turnout-to-be-sent-to-military-unit-view">

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
            'departure_date',
            'military_team_number',
            'military_unit_id',
            'disappear_reason',
            'return_reason',
            'passed_passport_seria',
            'passed_passport_number',
            'passed_passport_date',
            'passed_certificate_seria',
            'passed_certificate_number',
            'passed_certificate_date',
            'returned_passport_seria',
            'returned_passport_number',
            'returned_passport_date',
            'returned_certificate_of_conscript_sector_seria',
            'conscript_id',
            'returned_certificate_of_conscript_sector_number',
            'returned_certificate_of_conscript_sector_date',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
