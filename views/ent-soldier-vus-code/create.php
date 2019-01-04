<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntSoldierVusCode */

$this->title = Yii::t('app', 'Create Ent Soldier Vus Code');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Soldier Vus Codes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-soldier-vus-code-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
