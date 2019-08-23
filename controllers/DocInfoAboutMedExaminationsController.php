<?php

namespace app\controllers;

use Yii;
use app\models\DocInfoAboutMedExaminations;
use app\models\DocInfoAboutMedExaminationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocInfoAboutMedExaminationsController implements the CRUD actions for DocInfoAboutMedExaminations model.
 */
class DocInfoAboutMedExaminationsController extends Controller
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
     * Lists all DocInfoAboutMedExaminations models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocInfoAboutMedExaminationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocInfoAboutMedExaminations model.
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
     * Creates a new DocInfoAboutMedExaminations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($record_card_id = null)
    {
        $model = new DocInfoAboutMedExaminations();
        if ($record_card_id) {
            $model->record_card_id = $record_card_id;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 4]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocInfoAboutMedExaminations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $record_card_id = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 4]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocInfoAboutMedExaminations model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $record_card_id = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 4]);
    }

    /**
     * Finds the DocInfoAboutMedExaminations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocInfoAboutMedExaminations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocInfoAboutMedExaminations::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
