<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnumRhFactor */

$this->title = Yii::t('main', 'Create Enum Rh Factor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Enum Rh Factors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enum-rh-factor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
