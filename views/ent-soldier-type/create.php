<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntSoldierType */

$this->title = Yii::t('app', 'Create Ent Soldier Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Soldier Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-soldier-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
