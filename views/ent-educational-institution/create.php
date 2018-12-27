<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntEducationalInstitution */

$this->title = Yii::t('main', 'Create Ent Educational Institution');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Ent Educational Institutions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-educational-institution-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
