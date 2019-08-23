<?php

namespace app\controllers;

use Yii;
use app\models\DocPassingMilitaryService;
use app\models\DocPassingMilitaryServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocPassingMilitaryServiceController implements the CRUD actions for DocPassingMilitaryService model.
 */
class DocPassingMilitaryServiceController extends Controller
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
     * Lists all DocPassingMilitaryService models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocPassingMilitaryServiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocPassingMilitaryService model.
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
     * Creates a new DocPassingMilitaryService model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($record_card_id = null)
    {
        $model = new DocPassingMilitaryService();

        if ($record_card_id) {
            $model->record_card_id = $record_card_id;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 2]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocPassingMilitaryService model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $record_card_id = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocPassingMilitaryService model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $record_card_id = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 2]);
    }

    /**
     * Finds the DocPassingMilitaryService model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocPassingMilitaryService the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocPassingMilitaryService::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
