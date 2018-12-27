<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRestrictionDegree */

$this->title = Yii::t('main', 'Create Ent Restriction Degree');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Restriction Degrees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-restriction-degree-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
