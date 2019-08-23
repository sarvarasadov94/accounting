<?php

namespace app\controllers;

use app\models\DocConscript;
use Yii;
use app\models\DocCommissionResults;
use app\models\DocCommissionResultsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocCommissionResultsController implements the CRUD actions for DocCommissionResults model.
 */
class DocCommissionResultsController extends Controller
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
     * Lists all DocCommissionResults models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocCommissionResultsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocCommissionResults model.
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
     * Creates a new DocCommissionResults model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($conscriptId = null)
    {
        $model = new DocCommissionResults();
        $conscript = DocConscript::findOne($conscriptId);

        if ($conscriptId) {
            $model->conscript_id = $conscriptId;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 6]);
        }

        return $this->render('create', [
            'conscriptId' => $conscriptId,
            'model' => $model,
            'conscript' => $conscript,
        ]);
    }

    /**
     * Updates an existing DocCommissionResults model.
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
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 6]);
        }

        return $this->render('update', [
            'conscriptId' => $conscriptId,
            'model' => $model,
            'conscript' => $conscript,
        ]);
    }

    /**
     * Deletes an existing DocCommissionResults model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $conscriptId = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 6]);
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

    /**
     * Finds the DocCommissionResults model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocCommissionResults the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocCommissionResults::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
