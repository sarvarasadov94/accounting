<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Conscript'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-conscript-view">
    <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="<?= $tab == 1 ? 'active' : '' ?>">
                <a href="#tab1" aria-controls="claimer" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'AboutConscript') ?></a>
            </li>
            <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki') || Yii::$app->user->can('Xirurg') || Yii::$app->user->can('Psixiatr') || Yii::$app->user->can('Terapevt')) { ?>
                <li role="presentation" class="<?= $tab == 2 ? 'active' : '' ?>">
                    <a href="#tab2" aria-controls="owner" role="tab"
                       data-toggle="tab"><?= Yii::t('main', 'AboutEducation') ?></a>
                </li>
                <li role="presentation" class="<?= $tab == 3 ? 'active' : '' ?>">
                    <a href="#tab3" aria-controls="vehicle" role="tab"
                       data-toggle="tab"><?= Yii::t('main', 'AboutFamilyMembers') ?></a>
                </li>
            <?php } ?>
            <li role="presentation" class="<?= $tab == 4 ? 'active' : '' ?>">
                <a href="#tab4" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PassingMedComission') ?></a>
            </li>
            <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                <li role="presentation" class="<?= $tab == 5 ? 'active' : '' ?>">
                    <a href="#tab5" aria-controls="vehicle" role="tab"
                       data-toggle="tab"><?= Yii::t('main', 'PreparationForArmedForces') ?></a>
                </li>
            <?php } ?>
            <li role="presentation" class="<?= $tab == 6 ? 'active' : '' ?>">
                <a href="#tab6" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'CommissionResults') ?></a>
            </li>
            <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                <li role="presentation" class="<?= $tab == 7 ? 'active' : '' ?>">
                    <a href="#tab7" aria-controls="vehicle" role="tab"
                       data-toggle="tab"><?= Yii::t('main', 'TurnoutToBeSentToMilitaryUnit') ?></a>
                </li>
                <li role="presentation" class="<?= $tab == 8 ? 'active' : '' ?>">
                    <a href="#tab8" aria-controls="vehicle" role="tab"
                       data-toggle="tab"><?= Yii::t('main', 'MilitaryRegistration') ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane <?= $tab == 1 ? 'active' : '' ?>" id="tab1">
            <div class="col-md-12">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'doc_number',
                        'last_name',
                        'first_name',
                        'patronymic',
                        'passport_seria',
                        'passport_number',
                        'passport_given_date',
                        'passport_issued_by',
                        'birth_date',
                        'birth_place',
                        [
                            'label' => Yii::t('main', 'Nationality ID'),
                            'value' => $model->nationality ? $model->nationality->name : "",
                        ],
                        'address',
                        'phone_number',
                        [
                            'label' => Yii::t('main', 'Native Lang ID'),
                            'value' => $model->nativeLang ? $model->nativeLang->name : "",
                        ],
                        'state_lang',
                        [
                            'label' => Yii::t('main', 'Foreign Lang ID'),
                            'value' => $model->foreignLang ? $model->foreignLang->name : "",
                        ],
                        'work_place',
                        'civilian_profession',
                        'committee',
                        [
                            'label' => Yii::t('main', 'Social Positionid'),
                            'value' => $model->socialPosition ? $model->socialPosition->name : "",
                        ],
                        'study_place',
                        'sport_type',
                        'criminal_record',
                        'criminal_record_relatives',
                        [
                            'label' => Yii::t('main', 'Family Statusid'),
                            'value' => $model->familyStatus ? $model->familyStatus->name : "",
                        ],
                        'family_residence',
                        'sports_category',
                        'relatives_connect',
                        [
                            'label' => Yii::t('main', 'Fitness Degree'),
                            'value' => $model->fitnessDegree ? $model->fitnessDegree->name : "",
                        ],
                        [
                            'label' => Yii::t('main', 'Health Condition ID'),
                            'value' => $model->healthCondition ? $model->healthCondition->name : "",
                        ],
                        'postponement',
                        'comment'
                    ],
                ]) ?>
            </div>
            <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                <div class="col-md-12" style="margin-bottom: 20px !important;">
                    <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-danger pull-right']) ?>
                </div>
            <?php } ?>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 2 ? 'active' : '' ?>" id="tab2">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator')|| Yii::$app->user->can('Operator_Prizivniki')) { ?>
                    <?= Html::a('<i class="fa fa-plus"></i>', ['doc-education/create', 'conscriptId' => $model->id], [
                        'data-toggle' => 'tooltip',
                        'class' => 'btn btn-success pull-right',
                        'title' => Yii::t('main', 'Add')
                    ]) ?>
                <?php } ?>
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
                                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                                    <?= Html::a('<i class="fa fa-pencil"></i>',
                                        Url::to(['doc-education/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Update')
                                        ]
                                    ) ?>
                                    <?= Html::a('<i class="fa fa-trash"></i>',
                                        Url::to(['doc-education/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data' => [
                                                'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 3 ? 'active' : '' ?>" id="tab3">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                    <?= Html::a('<i class="fa fa-plus"></i>', ['doc-family-members/create', 'conscriptId' => $model->id], [
                        'data-toggle' => 'tooltip',
                        'class' => 'btn btn-success pull-right',
                        'title' => Yii::t('main', 'Add')
                    ]) ?>
                <?php } ?>

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
                                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                                    <?= Html::a('<i class="fa fa-pencil"></i>',
                                        Url::to(['doc-family-members/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Update')
                                        ]
                                    ) ?>
                                    <?= Html::a('<i class="fa fa-trash"></i>',
                                        Url::to(['doc-family-members/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data' => [
                                                'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 4 ? 'active' : '' ?>" id="tab4">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?php if (!Yii::$app->user->can('Guest')) { ?>
                    <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-med-commission/create', 'conscriptId' => $model->id], [
                        'data-toggle' => 'tooltip',
                        'class' => 'btn btn-success pull-right',
                        'title' => Yii::t('main', 'Add')
                    ]) ?>
                <?php } ?>
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Protocol Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Protocol Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Height') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Weight') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Chest Volume') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Spirometry') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Restriction Degree ID') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($passingMed as $item): ?>
                        <tr>
                            <td><?= $item['protocol_number'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['protocol_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['height']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['weight']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['chest_volume']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['spirometry']) ?></td>
                            <td class="text-center"><?= $item['restrictionDegree'] ? $item['restrictionDegree']['name'] : "" ?></td>
                            <td style="width: 62px">
                                <?php if (Yii::$app->user->can('Guest')) { ?>
                                    <?= Html::a('<i class="fa fa-eye"></i>',
                                        Url::to(['doc-passing-med-commission/view', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'View')
                                        ]
                                    ) ?>
                                <?php } else { ?>
                                    <?= Html::a('<i class="fa fa-pencil"></i>',
                                        Url::to(['doc-passing-med-commission/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Update')
                                        ]
                                    ) ?>
                                    <?= Html::a('<i class="fa fa-print"></i>',
                                        Url::to(['doc-passing-med-commission/print', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Print')
                                        ]
                                    ) ?>
                                <?php } ?>
                                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                                    <?= Html::a('<i class="fa fa-trash"></i>',
                                        Url::to(['doc-passing-med-commission/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data' => [
                                                'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 5 ? 'active' : '' ?>" id="tab5">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-preparation-for-armed-forces/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Educational Establishment') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Specialty Received') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Study Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Study Period') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Bloodgroup ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Rhfactor ID') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($preparation as $item): ?>
                        <tr>
                            <td><?= $item['educational_establishment'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['specialty_received']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['study_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['study_period']) ?></td>
                            <td class="text-center"><?= $item['bloodgroup'] ? $item['bloodgroup']['name'] : "" ?></td>
                            <td class="text-center"><?= $item['rhfactor'] ? $item['rhfactor']['name'] : "" ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-preparation-for-armed-forces/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-preparation-for-armed-forces/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
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
                <?php if (!Yii::$app->user->can('Guest')) { ?>
                    <?= Html::a('<i class="fa fa-plus"></i>', ['doc-commission-results/create', 'conscriptId' => $model->id], [
                        'data-toggle' => 'tooltip',
                        'class' => 'btn btn-success pull-right',
                        'title' => Yii::t('main', 'Add')
                    ]) ?>
                <?php } ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Protocol Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Protocol Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Height') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Weight') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Chest Volume') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Spirometry') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Restriction Degree ID') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($commissionResults as $item): ?>
                        <tr>
                            <td><?= $item['protocol_number'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['protocol_date']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['height']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['weight']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['chest_volume']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['spirometry']) ?></td>
                            <td class="text-center"><?= $item['restrictionDegree'] ? $item['restrictionDegree']['name'] : "" ?></td>
                            <td style="width: 62px">
                                <?php if (Yii::$app->user->can('Guest')) { ?>
                                    <?= Html::a('<i class="fa fa-eye"></i>',
                                        Url::to(['doc-commission-results/view', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'View')
                                        ]
                                    ) ?>
                                <?php } else { ?>
                                    <?= Html::a('<i class="fa fa-pencil"></i>',
                                        Url::to(['doc-commission-results/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Update')
                                        ]
                                    ) ?>
                                    <?= Html::a('<i class="fa fa-print"></i>',
                                        Url::to(['doc-commission-results/print', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data-toggle' => 'tooltip',
                                            'title' => Yii::t('main', 'Print')
                                        ]
                                    ) ?>
                                <?php } ?>
                                <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
                                    <?= Html::a('<i class="fa fa-trash"></i>',
                                        Url::to(['doc-commission-results/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                            'data' => [
                                                'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 7 ? 'active' : '' ?>" id="tab7">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-turnout-to-be-sent-to-military-unit/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Military Team Number') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Departure Date') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Military Unit ID') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Disappear Reason') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($turnout as $item): ?>
                        <tr>
                            <td><?= $item['military_team_number'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['disappear_reason']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['return_reason']) ?></td>
                            <td class="text-center"><?= $item['militaryUnit'] ? $item['militaryUnit']['name'] : "" ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-turnout-to-be-sent-to-military-unit/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-turnout-to-be-sent-to-military-unit/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
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

        <div role="tabpanel" class="tab-pane <?= $tab == 8 ? 'active' : '' ?>" id="tab8">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-military-registration/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Admitted') ?></th>
                        <th><?= Yii::t('main', 'Removed') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($militaryRegistration as $item): ?>
                        <tr>
                            <td><?= Yii::$app->formatter->asText($item['admitted']) ?></td>
                            <td><?= Yii::$app->formatter->asText($item['removed']) ?></td>
                            <td style="width: 42px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-military-registration/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>',
                                    Url::to(['doc-military-registration/delete', 'id' => $item['id'], 'conscriptId' => $model->id]), [
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
