<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Conscripts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-conscript-view">

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
            'passport_seria',
            'passport_number',
            'passport_given_date',
            'passport_issued_by',
            'birth_date',
            'birth_place',
            'nationality_id',
            'pinfl',
            'address',
            'phone_number',
            'native_lang_id',
            'state_lang',
            'foreign_lang_id',
            'work_place',
            'civilian_profession',
            'committee',
            'social_positionid',
            'study_place',
            'sport_type',
            'criminal_record',
            'criminal_record_relatives',
            'doc_number',
            'family_statusid',
            'family_residence',
            'sports_category',
            'relatives_connect',
            'fitness_degree',
            'health_condition_id',
            'postponement',
            'comment',
            'city_id',
            'district_id',
            'street_id',
            'region_id',
            'photo_name',
            'photo_path',
            'creator',
            'created_at',
            'modifier',
            'modified_at',
        ],
    ]) ?>

</div>
