<?php

use yii\helpers\Html;
use yii2assets\printthis\PrintThis;
use yii2assets\printthis\PrintThisAsset;

/* @var $this yii\web\View */
/* @var $model app\models\DocPassingMedCommission */

PrintThisAsset::register($this);
?>
<div class="doc-passing-med-commission-print">
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
//                            'loadCSS' => "path/to/my.css",
                'pageTitle' => '&nbsp',
                'removeInline' => false,
                'printDelay' => 333,
                'header' => null,
                'formValues' => true,
            ]
        ]);
        ?>
        <?= Html::a(Yii::t('main', 'Back'), ['doc-conscript/view', 'id' => $model->conscript_id, 'tab' => 4], ['class' => 'btn btn-danger']) ?>
    </div>

    <div id="PrintThis">
        <br>
        <table>
            <thead>
            <tr>
                <th class="centering" colspan="5">
                    <h4>РЕЗУЛЬТАТЫ ПРИПИСКИ К ПРИЗЫВНОМУ УЧАСТКУ</h4>
                </th>
            </tr>
            <tr>
                <th class="centering" colspan="5">
                    <h5>
                        <?php echo $conscript['last_name'] . ' ' . $conscript['first_name'] . ' ' . $conscript['patronymic'] . ' / ' . $conscript['birth_date'] ?>
                    </h5>
                </th>

            </tr>
            <tr>
                <th><br></th>
            </tr>
            <tr>
                <th colspan="3"><p>Протокол №&nbsp <u>&nbsp&nbsp<?= $model->protocol_number ?>&nbsp&nbsp</u></p>
                </th>
                <th colspan="2" style="text-align: right"><u>
                        <p>&nbsp&nbsp<?= date("d.m.Y", strtotime($model->protocol_date)); ?> г&nbsp</p></u></th>
            </tr>
            <tr>
                <td class="padded">Рост</td>
                <td class="padded">Вес(кг)</td>
                <td class="padded">Обьем груди</td>
                <td class="padded">Спирометрия</td>
                <td class="padded">Степень<br/>ограничения</td>
            </tr>
            <tr>
                <td class="centering"><?= $model->height ?></td>
                <td class="centering"><?= $model->weight ?></td>
                <td class="centering"><?= $model->chest_volume ?></td>
                <td class="centering"><?= $model->spirometry ?></td>
                <td class="centering"><?= $model->restrictionDegree ? $model->restrictionDegree->name : "" ?></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="centering" style="border: 0px;" colspan="5"><br>
                    Заключение врачей специалистов.
                </td>
            </tr>
            <tr>
                <td colspan="3">Состоит на Д - учете</td>
                <td style="width: 149px; text-align: center"><?= $model->registered_on_d ? 'Да' : 'Нет' ?></td>
                <td style="width: 149px"><?= $model->registered_on_d_reason ?></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td class="centering">Степень<br>
                    годности
                </td>
                <td class="centering">Степень<br>
                    ограничения
                </td>
            </tr>
            <tr>
                <td colspan="3">Хирурга</td>
                <td><?= ($model->dermatologValidityDegree ? $model->dermatologValidityDegree->name . '<br>' : "") . $model->dermatolog_validity_comment ?></td>
                <td class="centering"><?= ($model->dermatologRestrictionDegree ? $model->dermatologRestrictionDegree->name . '<br>' : "") . $model->dermatolog_restriction_comment ?></td>
            </tr>
            <tr>
                <td style="width: 400px" colspan="3">Терапевта</td>
                <td style="width: 149px"><?= ($model->terapevtValidityDegree ? $model->terapevtValidityDegree->name . '<br>' : "") . $model->terapevt_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->terapevtRestrictionDegree ? $model->terapevtRestrictionDegree->name . '<br>' : "") . $model->terapevt_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Данные флюрографии</td>
                <td style="width: 149px"><?= ($model->flyuroValidityDegree ? $model->flyuroValidityDegree->name . '<br>' : "") . $model->flyuro_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->flyuroRestrictionDegree ? $model->flyuroRestrictionDegree->name . '<br>' : "") . $model->flyuro_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Неврапотолога</td>
                <td style="width: 149px"><?= ($model->nevroValidityDegree ? $model->nevroValidityDegree->name . '<br>' : "") . $model->nevro_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->nevroRestrictionDegree ? $model->nevroRestrictionDegree->name . '<br>' : "") . $model->nevro_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Психиатра</td>
                <td style="width: 149px"><?= ($model->psixValidityDegree ? $model->psixValidityDegree->name . '<br>' : "") . $model->psix_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->psixRestrictionDegree ? $model->psixRestrictionDegree->name . '<br>' : "") . $model->psix_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Окулиста<br>
                    острота зрения:<br>
                    цветоощущения
                </td>
                <td style="width: 149px"><?= ($model->okulistValidityDegree ? $model->okulistValidityDegree->name . '<br>' : "") . $model->okulist_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->okulistRestrictionDegree ? $model->okulistRestrictionDegree->name . '<br>' : "") . $model->okulist_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Отоларинголога<br>
                    Шепотная речь:
                </td>
                <td style="width: 149px"><?= ($model->otoValidityDegree ? $model->otoValidityDegree->name . '<br>' : "") . $model->oto_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->otoRestrictionDegree ? $model->otoRestrictionDegree->name . '<br>' : "") . $model->oto_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Стоматолога</td>
                <td style="width: 149px"><?= ($model->stomValidityDegree ? $model->stomValidityDegree->name . '<br>' : "") . $model->stom_validity_comment ?></td>
                <td class="centering"
                    style="width: 149px"><?= ($model->stomRestrictionDegree ? $model->stomRestrictionDegree->name . '<br>' : "") . $model->stom_restriction_comment ?></td>
            </tr>
            <tr>
                <td colspan="3">Годен к военной службе</td>
                <td style="width: 149px"><?= $model->suitable_for_military_service ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Степень ограничения</td>
                <td></td>
                <td class="centering"
                    style="width: 149px"><?= $model->suitableRestrictionDegree ? $model->suitableRestrictionDegree->name : "" ?></td>
            </tr>
            <tr>
                <td colspan="3">Годен к военной службе, в ВДВ и <br>погранвойсках - негоден. Степень ограничения.
                </td>
                <td style="width: 149px"><?= $model->suitable_for_military_service_vdv ?></td>
                <td class="centering"
                    style="width: 149px"><?= $model->suitableVdvRestrictionDegree ? $model->suitableVdvRestrictionDegree->name : "" ?></td>
            </tr>
            <tr>
                <td colspan="3">Негоден к военной службе. По статье.</td>
                <td style="width: 149px"><?= $model->unsuitable_for_military_service ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Отсрочка на лечение (временно негоден к <br>военной службе). По статье.</td>
                <td style="width: 149px"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Негоден к военной службе в мирное <br>время, годен к строевой службе в военное <br>время.
                    По статье
                </td>
                <td style="width: 149px"><?= $model->unsuitable_in_peace_time ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Негоден к военной службе с исключением <br>с воинского учета. По статье.</td>
                <td style="width: 149px"><?= $model->unsuitable_with_exception ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Нуждается в отсрочке (основание, вид)</td>
                <td style="width: 149px"><?= $model->needs_deferment ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Предназначен</td>
                <td style="width: 149px"><?= $model->intended ?></td>
                <td></td>
            </tr>
            <tr>
                <th><br></th>
            </tr>
            <tr>
                <th><br></th>
                <td class="centering" style="border: 0px;" colspan="5"><br>
                    НАЧАЛЬНИК ОТДЕЛА ПО ДЕЛАМ ОБОРОНЫ
                </td>
            </tr>
            <tr>
                <th></th>
                <td class="centering" style="border: 0px;" colspan="5"><br>
                    _____ ___________________ ___________
                </td>
            </tr>
            <tr>
                <th></th>
                <td class="centering" style="border: 0px;" colspan="5"><br>
                    (воинское звание, подпись, фамилия и инициалы)
                </td>
            </tr>
            <tr>
                <th></th>
                <td class="centering" style="border: 0px;" colspan="5"><br>
                    _____ ____________20__ г
                </td>
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



