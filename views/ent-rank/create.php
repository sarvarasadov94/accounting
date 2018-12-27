<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRank */

$this->title = Yii::t('app', 'Create Ent Rank');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Ranks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-rank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
