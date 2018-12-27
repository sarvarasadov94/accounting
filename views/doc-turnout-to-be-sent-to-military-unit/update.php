<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocTurnoutToBeSentToMilitaryUnit */

$this->title = Yii::t('main', 'Update Doc Turnout To Be Sent To Military Unit: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Turnout To Be Sent To Military Units'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-turnout-to-be-sent-to-military-unit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
