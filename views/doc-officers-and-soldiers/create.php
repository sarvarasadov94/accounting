<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */

$this->title = Yii::t('main', 'Create Doc Officers And Soldiers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Officers And Soldiers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-officers-and-soldiers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
