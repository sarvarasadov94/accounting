<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\DocConscript */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('main', 'Doc Conscripts'), 'url' => ['index']];
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
                   data-toggle="tab"><?= Yii::t('main', 'PassingMedComission') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 5 ? 'active' : '' ?>">
                <a href="#tab5" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'PreparationForArmedForces') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 6 ? 'active' : '' ?>">
                <a href="#tab6" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'CommissionResults') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 7 ? 'active' : '' ?>">
                <a href="#tab7" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'TurnoutToBeSentToMilitaryUnit') ?></a>
            </li>
            <li role="presentation" class="<?= $tab == 8 ? 'active' : '' ?>">
                <a href="#tab7" aria-controls="vehicle" role="tab"
                   data-toggle="tab"><?= Yii::t('main', 'MilitaryRegistration') ?></a>
            </li>
        </ul>
    </div>
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane <?= $tab == 1 ? 'active' : '' ?>" id="tab1">
            <div class="col-md-12">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'first_name',
                        'last_name',
                        'patronymic',
                        'passport_seria',
                        'passport_number',
                        'passport_given_date',
                        'passport_issued_by',
                        'birth_date',
                        'birth_place',
                        'nationality_id',
                        'pinfl',
                        'address',
                        'phone_number',
                        'native_lang_id',
                        'state_lang',
                        'foreign_lang_id',
                        'work_place',
                        'civilian_profession',
                        'committee',
                        'social_positionid',
                        'study_place',
                        'sport_type',
                        'criminal_record',
                        'criminal_record_relatives',
                        'doc_number',
                        'family_statusid',
                        'family_residence',
                        'sports_category',
                        'relatives_connect',
                        'fitness_degree',
                        'health_condition_id',
                        'postponement',
                        'comment',
                        'city_id',
                        'district_id',
                        'street_id',
                        'region_id'
                    ],
                ]) ?>
                <p>
                    <?= Html::a(Yii::t('main', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a(Yii::t('main', 'Delete'), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => Yii::t('main', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 2 ? 'active' : '' ?>" id="tab2">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-education/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Education Type') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Educational Institution') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Specialty') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($education as $item): ?>
                        <tr>
                            <td><?= $item['education_type_id'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asInteger($item['educational_institution_id']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['specialty']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-education/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 3 ? 'active' : '' ?>" id="tab3">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-family-members/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Relative Type') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($familyMembers as $item): ?>
                        <tr>
                            <td><?= $item['relative_type_id'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['first_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['last_name']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-family-members/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 4 ? 'active' : '' ?>" id="tab4">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-med-commission/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Passing med commission') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($familyMembers as $item): ?>
                        <tr>
                            <td><?= $item['relative_type_id'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['first_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['last_name']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-med-commission/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
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
                        <th><?= Yii::t('main', 'Passing med commission') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($preparation as $item): ?>
                        <tr>
                            <td><?= $item['receipt_of_basic_military'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['professional_fitness_conclusion']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['educational_establishment']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-preparation-for-armed-forces/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 6 ? 'active' : '' ?>" id="tab6">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-med-commission/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Passing med commission') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($familyMembers as $item): ?>
                        <tr>
                            <td><?= $item['relative_type_id'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['first_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['last_name']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-med-commission/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
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
                        <th><?= Yii::t('main', 'Passing med commission') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($turnout as $item): ?>
                        <tr>
                            <td><?= $item['military_team_number'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['disappear_reason']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['return_reason']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-turnout-to-be-sent-to-military-unit/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane <?= $tab == 8 ? 'active' : '' ?>" id="tab8">
            <div class="col-md-12" style="margin: 10px 0 0 0">
                <?= Html::a('<i class="fa fa-plus"></i>', ['doc-passing-med-commission/create', 'conscriptId' => $model->id], [
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-success pull-right',
                    'title' => Yii::t('main', 'Add')
                ]) ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= Yii::t('main', 'Passing med commission') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'First Name') ?></th>
                        <th class="text-center"><?= Yii::t('main', 'Last Name') ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($familyMembers as $item): ?>
                        <tr>
                            <td><?= $item['relative_type_id'] ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['first_name']) ?></td>
                            <td class="text-center"><?= Yii::$app->formatter->asText($item['last_name']) ?></td>
                            <td style="width: 10px">
                                <?= Html::a('<i class="fa fa-pencil"></i>',
                                    Url::to(['doc-passing-med-commission/update', 'id' => $item['id'], 'conscriptId' => $model->id]), [
                                        'data-toggle' => 'tooltip',
                                        'title' => Yii::t('main', 'Update')
                                    ]
                                ) ?>
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
