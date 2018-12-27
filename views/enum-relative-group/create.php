<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnumRelativeGroup */

$this->title = Yii::t('app', 'Create Enum Relative Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Enum Relative Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enum-relative-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
