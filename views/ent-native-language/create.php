<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntNativeLanguage */

$this->title = Yii::t('app', 'Create Ent Native Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ent Native Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-native-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>