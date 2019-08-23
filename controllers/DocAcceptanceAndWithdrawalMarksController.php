<?php

namespace app\controllers;

use Yii;
use app\models\DocAcceptanceAndWithdrawalMarks;
use app\models\DocAcceptanceAndWithdrawalMarksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocAcceptanceAndWithdrawalMarksController implements the CRUD actions for DocAcceptanceAndWithdrawalMarks model.
 */
class DocAcceptanceAndWithdrawalMarksController extends Controller
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
     * Lists all DocAcceptanceAndWithdrawalMarks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocAcceptanceAndWithdrawalMarksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocAcceptanceAndWithdrawalMarks model.
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
     * Creates a new DocAcceptanceAndWithdrawalMarks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($record_card_id = null)
    {
        $model = new DocAcceptanceAndWithdrawalMarks();
        if ($record_card_id) {
            $model->record_card_id = $record_card_id;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 5]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocAcceptanceAndWithdrawalMarks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $record_card_id = null)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 5]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocAcceptanceAndWithdrawalMarks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $record_card_id = null)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['doc-record-card/view', 'id' => $record_card_id, 'tab' => 5]);
    }

    /**
     * Finds the DocAcceptanceAndWithdrawalMarks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocAcceptanceAndWithdrawalMarks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocAcceptanceAndWithdrawalMarks::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionDistrict($id)
    {
        $types = \app\models\EntDistrict::find()->where(['region_id' => $id])->all();

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
