<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntOfficerVus */

$this->title = Yii::t('app', 'Create Ent Officer Vus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Officer Vuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-officer-vus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
