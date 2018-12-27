<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntValidityDegree */

$this->title = Yii::t('app', 'Create Ent Validity Degree');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Validity Degrees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-validity-degree-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
