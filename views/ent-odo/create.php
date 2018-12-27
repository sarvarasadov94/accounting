<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntOdo */

$this->title = Yii::t('app', 'Create Ent Odo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Odos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-odo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
