<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\DocMilitaryServiceCard */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'MilitaryServiceCard'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-conscript-view">
    <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="<?= $tab == 1 ? 'active' : '' ?>">
                <a href="#tab1" aria-controls="claimer" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AboutMilitaryServiceCard') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 2 ? 'active' : '' ?>">
                <a href="#tab2" aria-controls="owner" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AboutEducation') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 3 ? 'active' : '' ?>">
                <a href="#tab3" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AboutFamilyMembers') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 4 ? 'active' : '' ?>">
                <a href="#tab4" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'MilitaryRanks') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 5 ? 'active' : '' ?>">
                <a href="#tab5" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'ContinuationOfService') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 6 ? 'active' : '' ?>">
                <a href="#tab6" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PassingMilitaryTraining') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 7 ? 'active' : '' ?>">
                <a href="#tab7" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PassingCommanderTraining') ?></a>
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
                        'personal_number',
                        'birth_date',
                        'birth_place',
                        [
                            'label' => Yii::t('main', 'Nationality ID'),
                            'value' => $model->nationality ? $model->nationality->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Citizenship ID'),
                            'value' => $model->citizenship ? $model->citizenship->name : "",
                        ],
                        'military_special',
                        [
                            'label' => Yii::t('main', 'Foreign Lang ID'),
                            'value' => $model->foreignLang ? $model->foreignLang->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Family Statusid'),
                            'value' => $model->familyStatus ? $model->familyStatus->name : "",
                        ],
                        'participation_in_battles',
                        'drafted_to_armed_forces',
                        'continuation_of_service',
                        'med_comission_result',
                        [
                            'label' => Yii::t('main', 'Rank ID'),
                            'value' => $model->rank ? $model->rank->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Reserve ID'),
                            'value' => $model->reserve ? $model->reserve->name : "",
                        ],
                        'category',
                        'intended',
                        'work_place',
                        'address',
                        [
                            'label' => Yii::t('main', 'Udo'),
                            'value' => $model->udo ? $model->udo->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Is Registered Odo'),
                            'value' => $model->isRegisteredOdo ? $model->isRegisteredOdo->name : "",
                        ],
                        'ld_number',
                        'is_registered_date',
                    ],
                ]) ?>
            </div>
            <div class="col-md-12" style="margin-bottom: 20px !important;">
                <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-danger pull-right']) ?>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 2 ? 'active' : '' ?>" id="tab2">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-education/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Education Type ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Educational Institution ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Study Place') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Study Period') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Enddate') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Course Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Specialty') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($education as $item): ?>
                        <tr>
                            <td><?= $item['educationType'] ? $item['educationType']['name'] : "" ?></td>
                            <td class="text-center"><?= $item['educationalInstitution'] ? $item['educationalInstitution']['name'] : "" ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['study_place']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['study_period']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['enddate']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['course_number']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['specialty']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-education/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-education/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-family-members/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Relative Group ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Relative Type ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Patronymic') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Year Of Birth') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Address') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Work Place') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($familyMembers as $item): ?>
                        <tr>
                            <td><?= $item['relativeGroup'] ? $item['relativeGroup']['name'] : "" ?></td>
                            <td class="text-center"><?= $item['relativeType'] ? $item['relativeType']['name'] : "" ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['last_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['first_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['patronymic']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['year_of_birth']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['address']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['work_place']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-family-members/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-family-members/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-military-ranks/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Rank ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Whose Order') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Order Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Order Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Comment') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($militaryRanks as $item): ?>
                        <tr>
                            <td><?= $item['rank'] ? $item['rank']['name'] : "" ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['whose_order']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['order_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['order_number']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['comment']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-military-ranks/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-military-ranks/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-continuation-of-service/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Position') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Military Unit ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Military Union') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Whose Order') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Order Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Order Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($continuationOfService as $item): ?>
                        <tr>
                            <td><?= $item['position'] ?></td>
                            <td class="text-center"><?= $item['militaryUnit'] ? $item['militaryUnit']['name'] : "" ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['military_union']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['whose_order']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['order_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['order_number']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-continuation-of-service/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-continuation-of-service/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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

        <div role="tabpanel" class="tab-pane <?= $tab == 6 ? 'active' : '' ?>" id="tab6">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-military-training/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Training Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Training Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($passingMilitaryTraining as $item): ?>
                        <tr>
                            <td><?= $item['training_name'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['training_date']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-military-training/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-passing-military-training/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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

        <div role="tabpanel" class="tab-pane <?= $tab == 7 ? 'active' : '' ?>" id="tab7">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-commander-training/create', 'military_service_card_id' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Training Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Training Date') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($passingCommanderTraining as $item): ?>
                        <tr>
                            <td><?= $item['training_name'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['training_date']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-commander-training/update', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-passing-commander-training/delete', 'id' => $item['id'], 'military_service_card_id' => $model->id]), [
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
