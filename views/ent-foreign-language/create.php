<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntForeignLanguage */

$this->title = Yii::t('app', 'Create Ent Foreign Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Foreign Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-foreign-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
