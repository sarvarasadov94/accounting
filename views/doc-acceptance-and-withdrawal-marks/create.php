<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcceptanceAndWithdrawalMarks */

$this->title = Yii::t('main', 'Create Doc Acceptance And Withdrawal Marks');
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Acceptance And Withdrawal Marks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-acceptance-and-withdrawal-marks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
