<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRank */

$this->title = Yii::t('main', 'Create Ent Rank');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Ranks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-rank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
