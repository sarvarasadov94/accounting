<?php

namespace app\controllers;

use app\models\DocFamilyMembers;
use app\models\DocOfficersAndSoldiers;
use app\models\EntDistrict;
use app\models\EntHealthCondition;
use app\models\EntMilitaryUnit;
use app\models\EntOdo;
use app\models\EntOfficerVus;
use app\models\EntSocialPosition;
use app\models\EntSoldierVus;
use app\models\EntUdo;
use app\models\EntValidityDegree;
use app\models\EnumFamilyStatus;
use app\models\Import;
use Yii;
use yii\web\Controller;
use app\models\DocConscript;
use app\models\EntNationality;
use app\models\DocEducation;
use app\models\EnumEducationType;
use app\models\EntRank;
use app\models\DocMilitaryServiceCard;
use yii\web\UploadedFile;

class ImporterController extends Controller
{
    public function actionIndex()
    {
        $model = new Import();
        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            switch ($model->type) {
                case 1:
                    if ($this->UploadConscripts($model->file)) {
                        Yii::$app->session->setFlash('success', "Файл успешно загружен.");
                    } else {
                        Yii::$app->session->setFlash('error', "Файл загружен с ошибками...");
                    }
                    break;
                case 2:
                    //$this->UploadOfficersAndSoldiers($model->file);
                    break;
                case 3:
                    //$this->UploadOfficersAndSoldiers($model->file);
                    break;
                case 4:
                    if ($this->UploadOfficersAndSoldiers($model->file)) {
                        Yii::$app->session->setFlash('success', "Файл успешно загружен.");
                    } else {
                        Yii::$app->session->setFlash('error', "Файл загружен с ошибками...");
                    }
                    break;
            }
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function UploadOfficersAndSoldiers($file)
    {
        $flag = true;
        $PHPReader = \PHPExcel_IOFactory::load($file->tempName);
        $data = $PHPReader->getActiveSheet()->toArray(null, true, true, true);
        $counter = 0;
        foreach ($data as $row) {
            if ($counter++ < 2) {
                continue;
            }
            if (($row['B'] != null || $row['B'] != '') && ($row['C'] != null || $row['C'] != '') && ($row['D'] != null || $row['D'] != '')) {
                $model = new DocOfficersAndSoldiers();
                $model->last_name = $row['B'];
                $model->first_name = $row['C'];
                $model->patronymic = $row['D'];
                if ($this->isDate($row['E'])) {
                    $row['E'] = date('Y-m-d', strtotime($row['E']));
                } else {
                    $row['E'] = date('1978-01-01');
                }
                $model->birth_date = $row['E'];
                $model->birth_place = $row['F'];

                $natID = EntNationality::find()->where(['like', 'name', $row['G'] . '%', false])->one();;
                if ($natID != NULL) {
                    $model->nationality_id = $natID['id'];
                }
                $UdoID = EntUdo::find()->where(['like', 'name', $row['H'] . '%', false])->one();;
                if ($UdoID != NULL) {
                    $model->udo_id = $UdoID['id'];
                }
                $OdoID = EntOdo::find()->where(['like', 'name', $row['I'] . '%', false])->one();;
                if ($OdoID != NULL) {
                    $model->odo_id = $OdoID['id'];
                }
                $DistrictID = EntDistrict::find()->where(['like', 'name', $row['J'] . '%', false])->one();;
                if ($DistrictID != NULL) {
                    $model->district_id = $DistrictID['id'];
                }

                $model->address = $row['K'];
                $model->phone_number = $row['L'];
                $model->committee = $row['M'];

                $EducationTypeD = EnumEducationType::find()->where(['like', 'name', $row['N'] . '%', false])->one();;
                if ($EducationTypeD != NULL) {
                    $model->education_type_id = $EducationTypeD['id'];
                }

                $model->passport_seria = $row['O'];
                $model->passport_number = $row['P'];

                if ($this->isDate($row['Q'])) {
                    $row['Q'] = date('Y-m-d', strtotime($row['Q']));
                } else {
                    $row['Q'] = date('1978-01-01');
                }
                $model->passport_given_date = $row['Q'];

                $model->passport_issued_by = $row['R'];
                $model->military_ticket_seria = $row['S'];
                $model->military_ticket_number = $row['T'];

                if ($this->isDate($row['U'])) {
                    $row['U'] = date('Y-m-d', strtotime($row['U']));
                } else {
                    $row['U'] = date('1978-01-01');
                }
                $model->issue_date = $row['U'];
                $model->issued_by = $row['V'];
                $model->civilian_profession = $row['W'];
                $model->work_place = $row['X'];

                $FamilyStatusID = EnumFamilyStatus::find()->where(['like', 'name', $row['Y'] . '%', false])->one();;
                if ($FamilyStatusID != NULL) {
                    $model->family_status_id = $FamilyStatusID['id'];
                }

                $model->sport = $row['Z'];
                $model->criminal_record = $row['AA'];
                $model->military_service_type = $row['AB'];

                $IntendedOdoID = EntOdo::find()->where(['like', 'name', $row['AC'] . '%', false])->one();;
                if ($IntendedOdoID != NULL) {
                    $model->intended_odo_id = $IntendedOdoID['id'];
                }

                if ($this->isDate($row['AD'])) {
                    $row['AD'] = date('Y-m-d', strtotime($row['AD']));
                } else {
                    $row['AD'] = date('1978-01-01');
                }
                $model->intended_odo_date = $row['AD'];

                $ValidityDegreeID = EntValidityDegree::find()->where(['like', 'name', $row['AE'] . '%', false])->one();;
                if ($ValidityDegreeID != NULL) {
                    $model->validity_degree_id = $ValidityDegreeID['id'];
                }

                $RankID = EntRank::find()->where(['like', 'name', $row['AF'] . '%', false])->one();;
                if ($RankID != NULL) {
                    $model->rank_id = $RankID['id'];
                }
                $model->accounting_category = $row['AG'];
                $model->accounting_group = $row['AH'];

                $OfficerVusID = EntOfficerVus::find()->where(['like', 'number', $row['AI'] . '%', false])->one();;
                if ($OfficerVusID != NULL) {
                    $model->vus = $OfficerVusID['id'];
                }
                $MilitaryUnitID = EntMilitaryUnit::find()->where(['like', 'name', $row['AJ'] . '%', false])->one();;
                if ($MilitaryUnitID != NULL) {
                    $model->military_unit_id = $MilitaryUnitID['id'];
                }

                if ($this->isDate($row['AK'])) {
                    $row['AK'] = date('Y-m-d', strtotime($row['AK']));
                } else {
                    $row['AK'] = date('1978-01-01');
                }
                $model->start_date = $row['AK'];

                if ($this->isDate($row['AL'])) {
                    $row['AL'] = date('Y-m-d', strtotime($row['AL']));
                } else {
                    $row['AL'] = date('1978-01-01');
                }
                $model->end_date = $row['AL'];

                if ($this->isDate($row['AM'])) {
                    $row['AM'] = date('Y-m-d', strtotime($row['AM']));
                } else {
                    $row['AM'] = date('1978-01-01');
                }
                $model->reserver_date = $row['AM'];

                $model->reserver_comment = $row['AN'];
                $model->order_number = $row['AO'];

                if ($this->isDate($row['AP'])) {
                    $row['AP'] = date('Y-m-d', strtotime($row['AP']));
                } else {
                    $row['AP'] = date('1978-01-01');
                }
                $model->order_date = $row['AP'];

                if ($this->isDate($row['AQ'])) {
                    $row['AQ'] = date('Y-m-d', strtotime($row['AQ']));
                } else {
                    $row['AQ'] = date('1978-01-01');
                }
                $model->oath_date = $row['AQ'];
                $model->special_number = $row['AR'];
                $model->intended_to_command = $row['AS'];

                $IntendedVusID = EntOfficerVus::find()->where(['like', 'number', $row['AT'] . '%', false])->one();;
                if ($IntendedVusID != NULL) {
                    $model->intended_vus = $IntendedVusID['id'];
                }

                $model->enrollment_to_reservre = $row['AU'];

                if ($this->isDate($row['AV'])) {
                    $row['AV'] = date('Y-m-d', strtotime($row['AV']));
                } else {
                    $row['AV'] = date('1978-01-01');
                }
                $model->registration_date = $row['AV'];

                if (!$model->save(false)) {
                    $flag = false;
                }
            }
        }
        return $flag;
    }

    public function UploadConscripts($file)
    {
        $flag = true;
        $PHPReader = \PHPExcel_IOFactory::load($file->tempName);
        $data = $PHPReader->getActiveSheet()->toArray(null, true, true, true);
        $counter = 0;
        foreach ($data as $row) {
            if ($counter++ < 2) {
                continue;
            }
            if (($row['E'] != null || $row['E'] != '') && ($row['C'] != null || $row['C'] != '') && ($row['D'] != null || $row['D'] != '')) {
                $model = new DocConscript();
                $model->doc_number = $row['B'];
                $model->last_name = $row['C'];
                $model->first_name = $row['D'];
                $model->patronymic = $row['E'];
                $model->passport_seria = $row['F'];
                $model->passport_number = $row['G'];
                if ($this->isDate($row['H'])) {
                    $row['H'] = date('Y-m-d', strtotime($row['H']));
                } else {
                    $row['H'] = date('1978-01-01');
                }
                $model->passport_given_date = $row['H'];
                $model->passport_issued_by = $row['I'];
                if ($this->isDate($row['J'])) {
                    $row['J'] = date('Y-m-d', strtotime($row['J']));
                } else {
                    $row['J'] = date('1978-01-01');
                }
                $model->birth_date = $row['J'];
                $natID = EntNationality::find()->where(['like', 'name', $row['K'] . '%', false])->one();;
                if ($natID != NULL) {
                    $model->nationality_id = $natID['id'];
                }
                $UdoID = EntUdo::find()->where(['like', 'name', $row['L'] . '%', false])->one();;
                if ($UdoID != NULL) {
                    $model->udo_id = $UdoID['id'];
                }
                $OdoID = EntOdo::find()->where(['like', 'name', $row['M'] . '%', false])->one();;
                if ($OdoID != NULL) {
                    $model->odo_id = $OdoID['id'];
                }
                $DistrictID = EntDistrict::find()->where(['like', 'name', $row['N'] . '%', false])->one();;
                if ($DistrictID != NULL) {
                    $model->district_id = $DistrictID['id'];
                }
                $model->address = $row['O'];
                $model->phone_number = $row['P'];
                $model->committee = $row['Q'];
                $SocialPositionID = EntSocialPosition::find()->where(['like', 'name', $row['R'] . '%', false])->one();;
                if ($SocialPositionID != NULL) {
                    $model->social_positionid = $SocialPositionID['id'];
                }
                $model->study_place = $row['S'];

                $model->work_place = $row['V'];
                $model->civilian_profession = $row['W'];
                $model->sport_type = $row['X'];
                $model->criminal_record = $row['Y'];
                $model->criminal_record_relatives = $row['Z'];

                $ValidityDegreeID = EntValidityDegree::find()->where(['like', 'name', $row['AM'] . '%', false])->one();;
                if ($ValidityDegreeID != NULL) {
                    $model->fitness_degree = $ValidityDegreeID['id'];
                }
                $HealthConditionID = EntHealthCondition::find()->where(['like', 'name', $row['AN'] . '%', false])->one();;
                if ($HealthConditionID != NULL) {
                    $model->health_condition_id = $HealthConditionID['id'];
                }
                $model->postponement = $row['AO'];
                $model->comment = $row['AP'];

                if (!$model->save(false)) {
                    $flag = false;
                }

                if (isset($model->id)) {

                    ///education

                    $education = new DocEducation();
                    $education->conscript_id = $model->id;
                    $education->study_place = $row['S'];
                    $EducationTypeID = EnumEducationType::find()->where(['like', 'name', $row['T'] . '%', false])->one();;
                    if ($EducationTypeID != NULL) {
                        $education->education_type_id = $EducationTypeID['id'];
                    }
                    if ($this->isDate($row['U'])) {
                        $row['U'] = date('Y-m-d', strtotime($row['U']));
                    } else {
                        $row['U'] = date('1978-01-01');
                    }
                    $education->enddate = $row['U'];
                    $education->study_period = $row['U'];

                    if (!$education->save()) {
                        $flag = false;
                    }
                    ///family

                    $familyFather = new DocFamilyMembers();
                    $familyFather->conscript_id = $model->id;
                    $familyFather->relative_type_id = 1;
                    $familyFather->relative_group_id = 2;
                    $familyFather->last_name = $row['AA'];
                    $familyFather->first_name = $row['AB'];
                    $familyFather->patronymic = $row['AC'];
                    $familyFather->year_of_birth = $row['AD'];
                    $familyFather->address = $row['AE'];
                    $familyFather->work_place = $row['AF'];
                    $familyFather->save();


                    if (!$familyFather->save()) {
                        $flag = false;
                    }

                    $familyMother = new DocFamilyMembers();
                    $familyMother->conscript_id = $model->id;
                    $familyMother->relative_type_id = 3;
                    $familyMother->relative_group_id = 2;
                    $familyMother->last_name = $row['AG'];
                    $familyMother->first_name = $row['AH'];
                    $familyMother->patronymic = $row['AI'];
                    $familyMother->year_of_birth = $row['AJ'];
                    $familyMother->address = $row['AK'];
                    $familyMother->work_place = $row['AL'];
                    $familyMother->save();

                    if (!$familyMother->save()) {
                        $flag = false;
                    }
                }
            } else {
                $flag = false;
            }
        }
        return $flag;
    }

    public function actionOffi()
    {
        $PHPReader = \PHPExcel_IOFactory::load('/var/www/accounting/web/2.xls');
        $data = $PHPReader->getActiveSheet()->toArray(null, true, true, true);
        $cnt = 0;
        foreach ($data as $key => $val) {
            if ($cnt++ < 6) {
                continue;
            }
            //print_r($val);
            $model = new DocMilitaryServiceCard();

            $model->first_name = $this->mb_ucfirst($val['D']);
            $model->patronymic = $this->mb_ucfirst($val['E']);
            $model->last_name = $this->mb_ucfirst($val['C']);
            //$model->military_ticket_seria = $val['F'];
            //$model->military_ticket_number = $val['G'];
            if ($this->isDate($val['H'])) {
                $val['H'] = date('Y-m-d', strtotime($val['H']));
            } else {
                $val['H'] = date('1978-01-01');
            }
            //$model->issue_date = $val['H'];
            //$model->issued_by = $val['I'];
            if ($this->isDate($val['J'])) {
                $val['J'] = date('Y-m-d', strtotime($val['H']));
            } else {
                $val['J'] = date('1978-01-01');
            }
            $model->birth_date = $val['J'];
            $model->birth_place = $val['K'];
            $model->address = $val['M'];

            //получаю айди нации
            $natModel = new EntNationality();
            $natID = EntNationality::find()->where(['like', 'name', $val['L'] . '%', false])->one();
            if ($natID != NULL) {
                $model->nationality_id = $natID['id'];
            }
            //$model->phone_number = $val['N'];
            // $model->committee = $val['O'];

            $education = new DocEducation();

            $eduType = new EnumEducationType();
            $eduType = EnumEducationType::find()->where(['like', 'name', $val['P'] . '%', false])->one();
            if ($eduType) {
                $education->education_type_id = $eduType['id'];
            }

            //$model->civilian_profession = $val['Q'];
            $model->work_place = $val['R'];
            $model->family_status_id = 12;

            //$model->sport = $val['T'];
            //$model->criminal_record = $val['U'];
            // $model->military_service_type = $val['V'];
            //$model->validity_degree_id = 7;

            $rank = new EntRank();
            $rankID = EntRank::find()->where(['like', 'name', $val['X'] . '%', false])->one();
            if ($rankID != NULL) {
                $model->rank_id = $rankID['id'];
            } else {
                $model->rank_id = 25;
            }

            //$model->committee = $val['Y'];
            //$model->accounting_group = $val['Z'];

            // $model->vus = $val['AA'];
            //$model->reserver_comment = $val['AE'];

            //$model->intended_to_command = $val['AH'];
            //$model->enrollment_to_reservre = $val['AJ'];
            if ($this->isDate($val['AK'])) {
                $val['AK'] = date('Y-m-d', strtotime($val['AK']));
                //print_r($val['AK']);

            } else {
                $val['AK'] = date('1978-01-01');
                // print_r($val['AK']);
            }
            if ($this->isDate($val['AL'])) {
                $val['AL'] = date('Y-m-d', strtotime($val['AL']));
                //print_r($val['AK']);

            } else {
                $val['AL'] = date('1978-01-01');
                // print_r($val['AK']);
            }
            //$model->registration_date = $val['AK'];
            //$model->date_of_deregistration = $val['AL'];
            //$model->height = $val['AM'];
            //$model->head_circumference = $val['AN'];
            //$model->gas_mask_size = $val['AO'];
            //$model->uniform_size = $val['AP'];
            //$model->shoe_size = $val['AQ'];
            //$model->comment = $val['AR'];

            if ($model->save(false)) {
                var_dump($model->errors);
            }
            //}
        }

    }

    private function validateDate($date, $format = 'd.m.y')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    private function mb_ucfirst($str)
    {
        return mb_substr(mb_strtoupper($str, 'utf-8'), 0, 1, 'utf-8') . mb_strtolower(mb_substr($str, 1, mb_strlen($str, 'utf-8'), 'utf-8'), 'utf-8');
    }

    private function isDate($value)
    {
        if (!$value) {
            return false;
        }

        try {
            new \DateTime($value);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


//    public function actionLoad()
//    {
////        $PHPReader = \PHPExcel_IOFactory::load('/var/www/accounting/web/ВУС_офицеры.xlsx');
////        $PHPReader = \PHPExcel_IOFactory::load('/var/www/accounting/web/ВУС_ВПК_сержанты_солдаты.xlsx');
//        $PHPReader = \PHPExcel_IOFactory::load('/var/www/accounting/web/ВУС_сержанты_рядовые.xlsx');
//        $data = $PHPReader->getActiveSheet()->toArray(null, true, true, true);
//        foreach ($data as $key => $val) {
//            $model = new EntSoldierVus();
//            $model->code = $this->mb_ucfirst($val['C']);
//            if ($model->save(false)) {
//                var_dump($model->errors);
//            }
//        }
//
//    }


}