<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocEducation */

//$this->title = Yii::t('main', 'Update Doc Education: {name}', [
//    'name' => $model->id,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Educations'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('main', 'Update');
?>
<div class="doc-education-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
