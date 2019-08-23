<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 14.02.2019
 * Time: 16:05
 */

namespace app\controllers;

use Yii;
use app\models\DocConscript;
use app\models\DocConscriptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use app\models\EntCity;
use app\models\EntDistrict;

class ReportController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionReportConscripts()
    {
//        $sql = 'select cc.first_name,cc.last_name,cc.patronymic,cc.region_id,r.name as region_name,cc.district_id,d.name as district_name,birth_date from doc_conscript cc join ent_region r on cc.region_id = r.id join ent_district d on cc.district_id = d.id where (cc.deletion_mark is null or cc.deletion_mark = cast(0 as bit)) and cc.birth_date <= now() - \'18 years 9 mons 25 days\'::interval';
//        $sqlCount = 'select count(id) from doc_conscript where (deletion_mark is null or deletion_mark = cast(0 as bit)) and birth_date <= now() - \'18 years 9 mons 25 days\'::interval and region_id is not null';
//        $count = Yii::$app->db->createCommand($sqlCount)->queryScalar();
//
//        $dataProvider = new SqlDataProvider([
//            'sql' => $sql,
//            'totalCount' => $count,
//            'pagination' => [
//                'pageSize' => 10,
//            ],
//
//        ]);
//        $searchModel = new DocConscriptSearch();

        $searchModel = new DocConscriptSearch();
        $dataProvider = $searchModel->searchReportConscripts(Yii::$app->request->queryParams);

        return $this->render('report-conscripts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCity($id)
    {
        $types = EntCity::find()->where(['region_id' => $id])->all();

        if (!empty($types)) {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
            foreach ($types as $type) {
                echo "<option value='" . $type->id . "'>" . $type->name . "</option>";
            }
        } else {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
        }
    }
    public function actionDistrict($id)
    {
        $types = EntDistrict::find()->where(['city_id' => $id])->all();

        if (!empty($types)) {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
            foreach ($types as $type) {
                echo "<option value='" . $type->id . "'>" . $type->name . "</option>";
            }
        } else {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
        }
    }

}
