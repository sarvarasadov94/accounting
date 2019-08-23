<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocOfficersAndSoldiers */

$this->title = Yii::t('main', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'OfficersAndSoldiers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-officers-and-soldiers-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
