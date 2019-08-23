<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocFamilyMembers */

//$this->title = Yii::t('main', 'Create Doc Family Members');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Family Members'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-family-members-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
