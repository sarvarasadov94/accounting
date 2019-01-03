<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntVoenkomat */

$this->title = Yii::t('main', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'EntVoenkomat'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voenkomat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
