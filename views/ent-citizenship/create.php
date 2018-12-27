<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntCitizenship */

$this->title = Yii::t('app', 'Create Ent Citizenship');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Citizenships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-citizenship-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>