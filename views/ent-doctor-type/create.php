<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntDoctorType */

$this->title = Yii::t('main', 'Create Ent Doctor Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Doctor Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-doctor-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
