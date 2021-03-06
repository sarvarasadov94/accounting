<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 29.03.2018
 * Time: 12:25
 */
use yii\helpers\Html;

?>
<ul class="list-unstyled components">
    <li>
        <?= Html::a('<img src="/public/Images/home-2-24.png">' . Yii::t('main', 'Home'), ['site/index'], ['class' => 'active']) ?>
    </li>
    <!--    --><?php //if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Operator_Prizivniki')) { ?>
    <li>
        <?= Html::a('<img src="/public/Images/target-audience-24.png">' . Yii::t('main', 'Conscript'), ['doc-conscript/index'], ['class' => 'active']) ?>
    </li>
    <!--    --><?php //} ?>
    <?php if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Operator_Poslujnaya_Karta')) { ?>
        <li>
            <?= Html::a('<img src="/public/Images/arrow-32-24.png">' . Yii::t('main', 'MilitaryServiceCard'), ['doc-military-service-card/index'], ['class' => 'active']) ?>
        </li>
    <?php } ?>
    <?php if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Operator_Uchetnaya_Karta')) { ?>
        <li>
            <?= Html::a('<img src="/public/Images/buick-24.png">' . Yii::t('main', 'RecordCard'), ['doc-record-card/index'], ['class' => 'active']) ?>
        </li>
    <?php } ?>
    <?php if (Yii::$app->user->can('Admin') || Yii::$app->user->can('Operator') || Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Operator_Ofitser_Soldat')) { ?>
        <li>
            <?= Html::a('<img src="/public/Images/star-7-24.png">' . Yii::t('main', 'OfficersAndSoldiers'), ['doc-officers-and-soldiers/index'], ['class' => 'active']) ?>
        </li>
    <?php } ?>
    <li>
        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
            <img src="/public/Images/book-16-24.png"><?= Yii::t('main', 'Entities') ?></a>
        <ul class="collapse out list-unstyled" id="pageSubmenu1">
            <li>
                <?= Html::a(Yii::t('main', 'EntRegion'), ['ent-region/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntCity'), ['ent-city/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntDistrict'), ['ent-district/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntMilitaryUnit'), ['ent-military-unit/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntUdo'), ['ent-udo/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntOdo'), ['ent-odo/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntCitizenship'), ['ent-citizenship/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntEducationalInstitution'), ['ent-educational-institution/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntForeignLanguage'), ['ent-foreign-language/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntHealthCondition'), ['ent-health-condition/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntNationality'), ['ent-nationality/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntNativeLanguage'), ['ent-native-language/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntSocialPosition'), ['ent-social-position/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntRank'), ['ent-rank/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntReserve'), ['ent-reserve/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntDoctorType'), ['ent-doctor-type/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntRestrictionDegree'), ['ent-restriction-degree/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntValidityDegree'), ['ent-validity-degree/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntOfficerVus'), ['ent-officer-vus/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntGroupVus'), ['ent-group-vus/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntSoldierVus'), ['ent-soldier-vus/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EntSoldierVusCode'), ['ent-soldier-vus-code/index']) ?>
            </li>
        </ul>
    </li>
    <li>
        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">
            <img src="/public/Images/view-details-24.png"><?= Yii::t('main', 'Enums') ?></a>
        <ul class="collapse out list-unstyled" id="pageSubmenu2">
            <li>
                <?= Html::a(Yii::t('main', 'EnumBloodGroup'), ['enum-blood-group/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumEducationType'), ['enum-education-type/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumFamilyStatus'), ['enum-family-status/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumRelativeGroup'), ['enum-relative-group/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumRelativeType'), ['enum-relative-type/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumRankType'), ['enum-rank-type/index']) ?>
            </li>
            <li>
                <?= Html::a(Yii::t('main', 'EnumRhFactor'), ['enum-rh-factor/index']) ?>
            </li>
        </ul>
    </li>
    <?php if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) { ?>
        <li>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                <img src="/public/Images/view-details-24.png"><?= Yii::t('main', 'Reports') ?></a>
            <ul class="collapse out list-unstyled" id="pageSubmenu3">
                <li>
                    <?= Html::a(Yii::t('main', 'ReportConscripts'), ['report/report-conscripts']) ?>
                </li>
                <li>
                    <?= Html::a(Yii::t('main', 'ExcelUpload'), ['importer/index']) ?>
                </li>
            </ul>
        </li>
        <li>
            <?= Html::a('<img src="/public/Images/1608752-24.png">' . Yii::t('main', 'Lang Translations'), ['lang-translations/index']) ?>
        </li>
    <?php } ?>
</ul>

