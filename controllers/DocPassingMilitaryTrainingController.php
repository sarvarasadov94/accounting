<?php

namespace app\controllers;

use Yii;
use app\models\DocPassingMilitaryTraining;
use app\models\DocPassingMilitaryTrainingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocPassingMilitaryTrainingController implements the CRUD actions for DocPassingMilitaryTraining model.
 */
class DocPassingMilitaryTrainingController extends Controller
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
     * Lists all DocPassingMilitaryTraining models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocPassingMilitaryTrainingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocPassingMilitaryTraining model.
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
     * Creates a new DocPassingMilitaryTraining model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($military_service_card_id = null)
    {
        $model = new DocPassingMilitaryTraining();

        if ($military_service_card_id) {
            $model->military_service_card_id = $military_service_card_id;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 6]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocPassingMilitaryTraining model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $military_service_card_id = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 6]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocPassingMilitaryTraining model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $military_service_card_id = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-military-service-card/view', 'id' => $military_service_card_id, 'tab' => 6]);
    }

    /**
     * Finds the DocPassingMilitaryTraining model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocPassingMilitaryTraining the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocPassingMilitaryTraining::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
