<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnumEducationType */

$this->title = Yii::t('main', 'Create Enum Education Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Enum Education Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enum-education-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
