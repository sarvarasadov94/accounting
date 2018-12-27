<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntNationality */

$this->title = Yii::t('main', 'Create Ent Nationality');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Nationalities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-nationality-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
