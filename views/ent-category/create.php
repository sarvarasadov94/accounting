<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntCategory */

$this->title = Yii::t('app', 'Create Ent Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
