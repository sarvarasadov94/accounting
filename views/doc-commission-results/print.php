<?php

use yii\helpers\Html;
use yii2assets\printthis\PrintThis;
use yii2assets\printthis\PrintThisAsset;

/* @var $this yii\web\View */
/* @var $model app\models\DocCommissionResults */

PrintThisAsset::register($this);
?>
<div class="doc-commission-results-print">
    <div class="col-md-12">
        <?= PrintThis::widget([
            'htmlOptions' => [
                'id' => 'PrintThis',
                'btnClass' => 'btn btn-info pull-right',
                'btnId' => 'btnPrintThis',
                'btnText' => Yii::t('main', 'Print'),
                'btnIcon' => 'fa fa-print',
            ],
            'options' => [
                'debug' => false,
                'importCSS' => true,
                'importStyle' => false,
                'pageTitle' => '&nbsp',
                'removeInline' => false,
                'printDelay' => 333,
                'header' => null,
                'formValues' => true,
            ]
        ]);
        ?>
        <?= Html::a(Yii::t('main', 'Back'), ['doc-conscript/view', 'id' => $model->conscript_id, 'tab' => 6], ['class' => 'btn btn-danger']) ?>
    </div>

    <div id="PrintThis">
        <table>
            <thead>
            <tr>
                <th class="centering" colspan="6" style="padding: 0 0 0 0 !important;">
                    <h4>РЕЗУЛЬТАТЫ ПРОХОЖДЕНИЯ ПРИЗЫВНОЙ КОМИССИИ</h4>
                </th>
            </tr>
            <tr>
                <th class="centering" colspan="6">
                    <h5>
                        <?php echo $conscript['last_name'] . ' ' . $conscript['first_name'] . ' ' . $conscript['patronymic'] . ' / ' . $conscript['birth_date'] ?>
                    </h5>
                </th>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2" class="padded">Прохождение <br/>призывной комиссии</td>
                <td colspan="2" class="padded">Прохождение <br/>призывной комиссии</td>
            </tr>
            <tr>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="padded" colspan="2">Протокол № <br/>Дата протокола</td>
                <td colspan="4" class="centering"><?= $model->protocol_number ?>
                    <br><?= date("d.m.Y", strtotime($model->protocol_date)); ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="6">А. Антропометрические данные</td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Рост (см)</td>
                <td colspan="4" class="centering"><?= $model->height ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Вес (кг)</td>
                <td colspan="4" class="centering"><?= $model->weight ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Обьем груди (см)</td>
                <td colspan="4" class="centering"><?= $model->chest_volume ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Спирометрия</td>
                <td colspan="4" style="text-align: center"><?= $model->spirometry ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Степень ограничения</td>
                <td colspan="4"
                    class="centering"><?= $model->restrictionDegree ? $model->restrictionDegree->name : "" ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="6">Б. Заключение врачей- специалистов.</td>
            </tr>
            <tr>
                <td class="padded" colspan="2">Состоит на Д-учете.</td>
                <td colspan="2" style="text-align: center"><?= $model->registered_ond ? 'Да' : 'Нет' ?></td>
                <td colspan="2"><?= $model->registered_ond_reason ?></td>
            </tr>
            <tr>
                <td class="padded" colspan="2"></td>
                <td class="padded" colspan="2">Прохождение <br/>призывной комисссии</td>
                <td class="padded" colspan="2">Прохождение <br/>призывной комисссии</td>
            </tr>
            <tr>
                <td class="padded" colspan="2"></td>
                <td class="padded" colspan="2">Степень <br/>годности</td>
                <td class="padded" colspan="2">Степень <br/>годности</td>
            </tr>
            <tr>
                <td colspan="2">Хирурга</td>
                <td colspan="2"><?= ($model->dermatologValidityDegree ? $model->dermatologValidityDegree->name . '<br>' : "") . $model->dermatolog_validity_comment ?></td>
                <td class="centering"
                    colspan="2"><?= ($model->dermatologRestrictionDegree ? $model->dermatologRestrictionDegree->name . '<br>' : "") . $model->dermatolog_restriction_comment ?></td>
            </tr>
            <tr>
                <td style="width: 320px" colspan="2">Терапевта</td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->terapevtValidityDegree ? $model->terapevtValidityDegree->name . '<br>' : "") . $model->terapevt_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->terapevtRestrictionDegree ? $model->terapevtRestrictionDegree->name . '<br>' : "") . $model->terapevt_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Данные флюрографии</td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->flyuroValidityDegree ? $model->flyuroValidityDegree->name . '<br>' : "") . $model->flyuro_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width:149px"><?= ($model->flyuroRestrictionDegree ? $model->flyuroRestrictionDegree->name . '<br>' : "") . $model->flyuro_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Неврапотолога</td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->nevroValidityDegree ? $model->nevroValidityDegree->name . '<br>' : "") . $model->nevro_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->nevroRestrictionDegree ? $model->nevroRestrictionDegree->name . '<br>' : "") . $model->nevro_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Психиатра</td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->psixValidityDegree ? $model->psixValidityDegree->name . '<br>' : "") . $model->psix_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->psixRestrictionDegree ? $model->psixRestrictionDegree->name . '<br>' : "") . $model->psix_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Окулиста<br>
                    острота зрения:<br>
                    цветоощущения
                </td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->okulistValidityDegree ? $model->okulistValidityDegree->name . '<br>' : "") . $model->okulist_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->okulistRestrictionDegree ? $model->okulistRestrictionDegree->name . '<br>' : "") . $model->okulist_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Отоларинголога<br>
                    Шепотная речь:
                </td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->otoValidityDegree ? $model->otoValidityDegree->name . '<br>' : "") . $model->oto_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->otoRestrictionDegree ? $model->otoRestrictionDegree->name . '<br>' : "") . $model->oto_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="2">Стоматолога</td>
                <td colspan="2"
                    style="width: 149px"><?= ($model->stomValidityDegree ? $model->stomValidityDegree->name . '<br>' : "") . $model->stom_validity_comment ?></td>
                <td colspan="2" class="centering"
                    style="width: 149px"><?= ($model->stomRestrictionDegree ? $model->stomRestrictionDegree->name . '<br>' : "") . $model->stom_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td class="centering">Решение призывной <br>комиссии</td>
                <td class="centering">Решение призывной <br>комиссии</td>
            </tr>
            <tr>
                <td colspan="4">Годен к военной службе</td>
                <td colspan="2"><?= $model->suitable_for_military_service ?></td>
            </tr>
            <tr>
                <td colspan="4">Годен к военной службе, в ВДВ, погранвойска - негоден</td>
                <td colspan="2"><?= $model->suitable_for_military_service_vdv ?></td>
            </tr>
            <tr>
                <td colspan="4">Предназначен для службы в Вооруженных Силах <br>(вид ВС, род войск)</td>
                <td colspan="2"><?= $model->intended_for_vs ?></td>
            </tr>
            <tr>
                <td colspan="4">Негоден к военной службе в мирное время, годен к нестроевой <br>службе в военное время
                    по статье
                </td>
                <td colspan="2"><?= $model->unsuitable_in_peace_time ?></td>
            </tr>
            <tr>
                <td colspan="4">Негоден к военной службе с исключением с воинского учета по <br>статье</td>
                <td colspan="2"><?= $model->unsuitable_with_exception ?></td>
            </tr>
            <tr>
                <td colspan="4">Направить на обследование ( лечение)</td>
                <td colspan="2"><?= $model->send_for_treatment ?></td>
            </tr>
            <tr>
                <td colspan="4">Предоставить отсрочку ( основание и вид отсрочки). по статье</td>
                <td colspan="2"><?= $model->provide_reprieve ?></td>
            </tr>
            <tr>
                <td colspan="4">До какого времени предоставлена отсрочка</td>
                <td colspan="2"
                    class="centering"><?= $model->enddate_of_reprieve ? date("d.m.Y", strtotime($model->enddate_of_reprieve)) : ""; ?></td>
            </tr>
            <tr>
                <td colspan="4">Дата явки для отправки в воинскую часть</td>
                <td colspan="2"
                    class="centering"><?= $model->appearance_date_to_send ? date("d.m.Y", strtotime($model->appearance_date_to_send)) : ""; ?></td>
            </tr>
            <tr>
                <td colspan="4">Председатель призывной комиссии</td>
                <td colspan="2"><?= $model->commission_chairman ?></td>
            </tr>
            <tr>
                <td colspan="4">Члены призывной комиссии: <br>Заместитель председателя- начальник РОДО
                </td>
                <td colspan="2"><?= $model->commission_members ?></td>
            </tr>
            <tr>
                <td colspan="4">Начальник или заместитель начальника управления (отдела) <br>внутренних дел</td>
                <td colspan="2"><?= $model->head_of_dep ?></td>
            </tr>
            <tr>
                <td colspan="4">Представитель ОМД «Нураний»</td>
                <td colspan="2"><?= $model->representative_nuroniy ?></td>
            </tr>
            <tr>
                <td colspan="4">Представитель фонда «Камолот»</td>
                <td colspan="2"><?= $model->representative_kamolot ?></td>
            </tr>
            <tr>
                <td colspan="4">Представитель фонда «Махалля»</td>
                <td colspan="2"><?= $model->representative_maxalla ?></td>
            </tr>
            <tr>
                <td colspan="4">Представитель</td>
                <td colspan="2"><?= $model->representative1 ?></td>
            </tr>
            <tr>
                <td colspan="4">Представитель</td>
                <td colspan="2"><?= $model->representative2 ?></td>
            </tr>
            <tr>
                <td colspan="4">Старший врач</td>
                <td colspan="2"><?= $model->senior_doctor ?></td>
            </tr>
            </tbody>
        </table>
        <style type="text/css">
            table {
                font-size: 10px;
                font-family: Arial, Helvetica, sans-serif;
            }

            th {
                padding: 6px;
                margin: 3px;
            }

            td {
                padding: 0 0 0 5px;
                border: 1px solid #000000;
            }

            .padded {
                text-align: center;
                padding: 2px 35px 2px 35px;
                margin: 3px;
            }

            .centering {
                text-align: center;
            }
        </style>
    </div>
</div>



