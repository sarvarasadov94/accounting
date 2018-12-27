<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntSocialPosition */

$this->title = Yii::t('app', 'Create Ent Social Position');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Social Positions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-social-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
