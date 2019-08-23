<?php

namespace app\controllers;

use app\models\DocConscript;
use Yii;
use app\models\DocPassingMedCommission;
use app\models\DocPassingMedCommissionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\DynamicModel;
use yii\base\Model;

/**
 * DocPassingMedCommissionController implements the CRUD actions for DocPassingMedCommission model.
 */
class DocPassingMedCommissionController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * Lists all DocPassingMedCommission models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocPassingMedCommissionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocPassingMedCommission model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DocPassingMedCommission model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($conscriptId = null)
    {
        $model = new DocPassingMedCommission();

        $conscript = DocConscript::findOne($conscriptId);

        if ($conscriptId) {
            $model->conscript_id = $conscriptId;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 4]);
        }

        return $this->render('create', [
            'conscriptId' => $conscriptId,
            'model' => $model,
            'conscript' => $conscript,
        ]);
    }

    /**
     * Updates an existing DocPassingMedCommission model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $conscriptId = null)
    {
        $model = $this->findModel($id);
        $conscript = DocConscript::findOne($conscriptId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 4]);
        }

        return $this->render('update', [
            'conscriptId' => $conscriptId,
            'model' => $model,
            'conscript' => $conscript,
        ]);
    }

    /**
     * Deletes an existing DocPassingMedCommission model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $conscriptId = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 4]);
    }

    /**
     * Finds the DocPassingMedCommission model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocPassingMedCommission the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocPassingMedCommission::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function saveMedicalOpinion($model, &$doctors, $arr)
    {
        $output = [
            'hasErrors' => false,
            'data' => []
        ];

        if (empty($doctors)) {
            return false;
        }
        foreach ($doctors as $key => $doctor) {
            $doctors[$key]->conscript_id = $model->conscript_id;
            $doctors[$key]->passing_med_commission_id = $model->id;
            $doctors[$key]->doctor_type_id = $arr['doctor_type_id'][$key];
            $doctors[$key]->validity_degree_id = $arr['validity_degree_id'][$key];
            $doctors[$key]->validity_comment = $arr['validity_comment'][$key];
            $doctors[$key]->restriction_degree_id = $arr['restriction_degree_id'][$key];
            $doctors[$key]->restriction_comment = $arr['restriction_comment'][$key];
        }

        $db = \Yii::$app->db->beginTransaction();
        $isValid = true;
        try {
            foreach ($doctors as $key => $doctor) {
                if (!$doctors[$key]->save()) {
                    $isValid = false;
                } else {
                    $isValid = true;
                }
            }
        } catch (\Exception $e) {
            \Yii::error($e->getMessage());
            $isValid = false;
        }

        if ($isValid) {
            $db->commit();
            $output['data'] = $doctors;
            return $output;
        } else {
            $db->rollBack();
            $output['hasErrors'] = true;
            return false;
        }
    }

    public function actionPrint($id, $conscriptId)
    {
        $model = $this->findModel($id);
        $conscript = DocConscript::findOne($conscriptId);

        return $this->render('print', [
            'model' => $model,
            'conscript' => $conscript,
        ]);
    }

}
