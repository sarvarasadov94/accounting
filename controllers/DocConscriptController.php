<?php

namespace app\controllers;

use app\models\DocEducation;
use app\models\DocFamilyMembers;
use app\models\DocPreparationForArmedForces;
use app\models\DocTurnoutToBeSentToMilitaryUnit;
use Yii;
use app\models\DocConscript;
use app\models\DocConscriptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocConscriptController implements the CRUD actions for DocConscript model.
 */
class DocConscriptController extends Controller
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
     * Lists all DocConscript models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocConscriptSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocConscript model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id,$tab = 1)
    {
//        $conscript = DocConscript::find()->with([
//            'docEducations',
//            'docFamilyMembers'
//        ])->one();

        $education = DocEducation::find()->where(['conscript_id' => $id])->with(['educationalInstitution', 'educationType'])->asArray()->all();
        $familyMembers = DocFamilyMembers::find()->where(['conscript_id' => $id])->with(['relativeGroup', 'relativeType'])->asArray()->all();
        $preparation = DocPreparationForArmedForces::find()->where(['conscript_id' => $id])->with(['bloodgroup', 'rhfactor'])->asArray()->all();
        $turnout = DocTurnoutToBeSentToMilitaryUnit::find()->where(['conscript_id' => $id])->with(['militaryUnit'])->asArray()->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'education' => $education,
            'familyMembers' => $familyMembers,
            'preparation' => $preparation,
            'turnout' => $turnout,
            'tab' => $tab,
        ]);
    }

    /**
     * Creates a new DocConscript model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DocConscript();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            //return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocConscript model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            //return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocConscript model.
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
     * Finds the DocConscript model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocConscript the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocConscript::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
