<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnumFamilyStatus */

$this->title = Yii::t('app', 'Create Enum Family Status');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Enum Family Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enum-family-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
