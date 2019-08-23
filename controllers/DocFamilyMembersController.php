<?php

namespace app\controllers;

use Yii;
use app\models\DocFamilyMembers;
use app\models\DocFamilyMembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocFamilyMembersController implements the CRUD actions for DocFamilyMembers model.
 */
class DocFamilyMembersController extends Controller
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
     * Lists all DocFamilyMembers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocFamilyMembersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocFamilyMembers model.
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
     * Creates a new DocFamilyMembers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($conscriptId = null, $military_service_card_id = null)
    {
        $model = new DocFamilyMembers();

        if ($conscriptId) {
            $model->conscript_id = $conscriptId;
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 3]);
            }
        }
        if ($military_service_card_id) {
            $model->military_service_card_id = $military_service_card_id;
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 3]);
            }
        }

        return $this->render('create', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocFamilyMembers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $conscriptId = null, $military_service_card_id = null)
    {
        $model = $this->findModel($id);

        if ($conscriptId) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 3]);
            }
        }

        if ($military_service_card_id) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 3]);
            }
        }

        return $this->render('update', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocFamilyMembers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $conscriptId = null, $military_service_card_id = null)
    {
        $this->findModel($id)->delete();
        if ($conscriptId) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 3]);
        } else if ($military_service_card_id) {
            return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 3]);
        } else {
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the DocFamilyMembers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocFamilyMembers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocFamilyMembers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
