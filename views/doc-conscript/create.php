<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */

$this->title = Yii::t('main', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Conscript'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-conscript-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
