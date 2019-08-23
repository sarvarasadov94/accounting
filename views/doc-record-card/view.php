<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\DocRecordCard */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'RecordCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-record-card-view">
    <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="<?= $tab == 1 ? 'active' : '' ?>">
                <a href="#tab1" aria-controls="claimer" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AboutConscript') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 2 ? 'active' : '' ?>">
                <a href="#tab2" aria-controls="owner" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PassingMilitaryService') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 3 ? 'active' : '' ?>">
                <a href="#tab3" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PassingTrainingFees') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 4 ? 'active' : '' ?>">
                <a href="#tab4" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'InfoAboutMedExaminations') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 5 ? 'active' : '' ?>">
                <a href="#tab5" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AcceptanceAndWithdrawalMarks') ?></a>
            </li>
        </ul>
    </div>
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane <?= $tab == 1 ? 'active' : '' ?>" id="tab1">
            <div class="col-md-12">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'last_name',
                        'first_name',
                        'patronymic',
                        'birth_date',
                        'birth_place',
                        [
                            'label' => Yii::t('main', 'Vus Group'),
                            'value' => $model->vusGroup ? $model->vusGroup->group_mark : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Vus Number'),
                            'value' => $model->vusNumber ? $model->vusNumber->code : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Vus Code'),
                            'value' => $model->vusCode ? $model->vusCode->code : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Nationality ID'),
                            'value' => $model->nationality ? $model->nationality->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Education Type ID'),
                            'value' => $model->educationType ? $model->educationType->name : "",
                        ],
                        'civilian_profession',
                        'work_place',
                        'phone_number',
                        'address',
                        [
                            'label' => Yii::t('main', 'Region ID'),
                            'value' => $model->region ? $model->region->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'City ID'),
                            'value' => $model->city ? $model->city->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'District ID'),
                            'value' => $model->district ? $model->district->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Family Status ID'),
                            'value' => $model->familyStatus ? $model->familyStatus->name : "",
                        ],
                        'family_residence',
                        [
                            'label' => Yii::t('main', 'Udo ID'),
                            'value' => $model->udo ? $model->udo->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Odo ID'),
                            'value' => $model->odo ? $model->odo->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Military Unit ID'),
                            'value' => $model->militaryUnit ? $model->militaryUnit->name : "",
                        ],
                        'vocation_date',
                        'certificate_seria',
                        'certificate_number',
                        [
                            'label' => Yii::t('main', 'Validity Degree ID'),
                            'value' => $model->validityDegree ? $model->validityDegree->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Rank ID'),
                            'value' => $model->rank ? $model->rank->name : "",
                        ],
                        'category',
                        'accounting_group',
                        'composition',
                        'rank_name_and_vus',
                        'team_number',
                        'by_vus',
                        'position',
                        [
                            'label' => Yii::t('main', 'Statewide Rank ID'),
                            'value' => $model->statewideRank ? $model->statewideRank->name : "",
                        ],
                        'route_number',
                        'days_and_hours',
                        'point',
                        'prescription_issued',
                        'access_number',
                        'based_date',
                        'based_comment',
                        'secondment_conclusion',
                        'head_of_dep_conclusion',
                        'height',
                        'head_circumference',
                        'uniform_size',
                        'shoe_size',
                        'participation_in_battles',
                        'military_oath_taken_date',
                        'military_oath_taken_comment',
                        'awards',
                        'wounds',
                        'special_marks',
                    ],
                ]) ?>

            </div>
            <div class="col-md-12" style="margin-bottom: 20px !important;">
                <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-danger pull-right']) ?>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 2 ? 'active' : '' ?>" id="tab2">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-military-service/create', 'record_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Military Unit ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Position') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Vus Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Start Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'End Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($passingMilitaryService as $item): ?>
                        <tr>
                            <td><?= $item['militaryUnit'] ? $item['militaryUnit']['name'] : "" ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['position']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['vus_number']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['start_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['end_date']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-military-service/update', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-passing-military-service/delete', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data' => [
                                            'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 3 ? 'active' : '' ?>" id="tab3">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-training-fees/create', 'record_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Military Unit Or Orgname') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Year') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Days') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Position') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Vus Number') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($passingTrainingFees as $item): ?>
                        <tr>
                            <td><?= Yii::$app->formatter->asText($item['military_unit_or_orgname']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['year']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['days']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['position']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['vus_number']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-training-fees/update', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-passing-training-fees/delete', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data' => [
                                            'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 4 ? 'active' : '' ?>" id="tab4">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-info-about-med-examinations/create', 'record_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Tore Examination') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Tore Examination Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Pass Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Comission Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Comission Comment') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Comission Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($infoAboutMedExaminations as $item): ?>
                        <tr>
                            <td><?= $item['tore_examination'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['tore_examination_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['pass_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['comission_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['comission_comment']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['comission_date']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-info-about-med-examinations/update', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-info-about-med-examinations/delete', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data' => [
                                            'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 5 ? 'active' : '' ?>" id="tab5">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-acceptance-and-withdrawal-marks/create', 'record_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Arrived') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Accepted Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Departed') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Filmed Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($acceptanceAndWithdrawalMarks as $item): ?>
                        <tr>
                            <td><?= $item['arrived'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['accepted_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['departed']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['filmed_date']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-acceptance-and-withdrawal-marks/update', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-acceptance-and-withdrawal-marks/delete', 'id' => $item['id'], 'record_card_id' => $model->id]), [
                                        'data' => [
                                            'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
