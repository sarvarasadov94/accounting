<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRelativeGroup */

$this->title = Yii::t('main', 'Create Ent Relative Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Relative Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-relative-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
