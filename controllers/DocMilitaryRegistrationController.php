<?php

namespace app\controllers;

use Yii;
use app\models\DocMilitaryRegistration;
use app\models\DocMilitaryRegistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocMilitaryRegistrationController implements the CRUD actions for DocMilitaryRegistration model.
 */
class DocMilitaryRegistrationController extends Controller
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
     * Lists all DocMilitaryRegistration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocMilitaryRegistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocMilitaryRegistration model.
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
     * Creates a new DocMilitaryRegistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($conscriptId = null)
    {
        $model = new DocMilitaryRegistration();

        if ($conscriptId) {
            $model->conscript_id = $conscriptId;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 8]);
        }

        return $this->render('create', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocMilitaryRegistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $conscriptId = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 8]);
        }

        return $this->render('update', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocMilitaryRegistration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $conscriptId = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 8]);
    }

    /**
     * Finds the DocMilitaryRegistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocMilitaryRegistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocMilitaryRegistration::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
