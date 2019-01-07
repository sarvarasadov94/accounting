<?php

namespace app\controllers;

use Yii;
use app\models\DocTurnoutToBeSentToMilitaryUnit;
use app\models\DocTurnoutToBeSentToMilitaryUnitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocTurnoutToBeSentToMilitaryUnitController implements the CRUD actions for DocTurnoutToBeSentToMilitaryUnit model.
 */
class DocTurnoutToBeSentToMilitaryUnitController extends Controller
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
     * Lists all DocTurnoutToBeSentToMilitaryUnit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocTurnoutToBeSentToMilitaryUnitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocTurnoutToBeSentToMilitaryUnit model.
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
     * Creates a new DocTurnoutToBeSentToMilitaryUnit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($conscriptId = null)
    {
        $model = new DocTurnoutToBeSentToMilitaryUnit();

        if ($conscriptId) {
            $model->conscript_id = $conscriptId;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 7]);
        }

        return $this->render('create', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocTurnoutToBeSentToMilitaryUnit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $conscriptId = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-conscript/view', 'id' => $conscriptId, 'tab' => 7]);
        }

        return $this->render('update', [
            'conscriptId' => $conscriptId,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocTurnoutToBeSentToMilitaryUnit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DocTurnoutToBeSentToMilitaryUnit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocTurnoutToBeSentToMilitaryUnit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocTurnoutToBeSentToMilitaryUnit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
