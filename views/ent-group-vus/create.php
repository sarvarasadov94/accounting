<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntGroupVus */

$this->title = Yii::t('app', 'Create Ent Group Vus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Group Vuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-group-vus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
