<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntMilitaryUnit */

$this->title = Yii::t('main', 'Create Ent Military Unit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Military Units'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-military-unit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
