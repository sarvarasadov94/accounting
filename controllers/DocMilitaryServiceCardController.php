<?php

namespace app\controllers;

use app\components\PassportService;
use app\models\DocContinuationOfService;
use app\models\DocMilitaryRanks;
use app\models\DocPassingCommanderTraining;
use app\models\DocPassingMilitaryTraining;
use app\models\DocFamilyMembers;
use app\models\DocEducation;
use app\models\EntOdo;
use app\models\EntUdo;
use mdm\admin\models\User;
use Yii;
use app\models\DocMilitaryServiceCard;
use app\models\DocMilitaryServiceCardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\EntCity;
use app\models\EntDistrict;

/**
 * DocMilitaryServiceCardController implements the CRUD actions for DocMilitaryServiceCard model.
 */
class DocMilitaryServiceCardController extends Controller
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
     * Lists all DocMilitaryServiceCard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocMilitaryServiceCardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocMilitaryServiceCard model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $tab = 1)
    {
        $education = DocEducation::find()->where(['military_service_card_id' => $id])->with(['educationalInstitution', 'educationType'])->asArray()->all();
        $familyMembers = DocFamilyMembers::find()->where(['military_service_card_id' => $id])->with(['relativeGroup', 'relativeType'])->asArray()->all();
        $militaryRanks = DocMilitaryRanks::find()->where(['military_service_card_id' => $id])->with(['rank'])->asArray()->all();
        $continuationOfService = DocContinuationOfService::find()->where(['military_service_card_id' => $id])->with(['militaryUnit'])->asArray()->all();
        $passingMilitaryTraining = DocPassingMilitaryTraining::find()->where(['military_service_card_id' => $id])->asArray()->all();
        $passingCommanderTraining = DocPassingCommanderTraining::find()->where(['military_service_card_id' => $id])->asArray()->all();

        if (self::checkPermission($this->findModel($id))) {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'militaryRanks' => $militaryRanks,
                'continuationOfService' => $continuationOfService,
                'passingMilitaryTraining' => $passingMilitaryTraining,
                'passingCommanderTraining' => $passingCommanderTraining,
                'education' => $education,
                'familyMembers' => $familyMembers,
                'tab' => $tab,
            ]);
        } else {
            return $this->redirect(['index']);
        }
    }

    /**
     * Creates a new DocMilitaryServiceCard model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DocMilitaryServiceCard();

        $model->udo_id = User::findOne(Yii::$app->user->getId())->udo_id ? User::findOne(Yii::$app->user->getId())->udo_id : null;
        $model->odo_id = User::findOne(Yii::$app->user->getId())->odo_id ? User::findOne(Yii::$app->user->getId())->odo_id : null;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->upload();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DocMilitaryServiceCard model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (self::checkPermission($model)) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $model->upload();
                return $this->redirect(['view', 'id' => $model->id]);
                //return $this->redirect(['index']);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            return $this->redirect(['index']);
        }
    }

    /**
     * Deletes an existing DocMilitaryServiceCard model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);//->delete();
        if (self::checkPermission($model)) {
            $model->deletion_mark = true;
            $model->save(false);
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the DocMilitaryServiceCard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocMilitaryServiceCard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocMilitaryServiceCard::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionPerson()
    {
        $pinfl = Yii::$app->request->getQueryParam('pinfl');
        $passport = Yii::$app->request->getQueryParam('passport');
        $data = PassportService::getData($pinfl, $passport);
        //$address = AddressService::getAddressByPinfl($pinfl);
        //$data['address'] = $address;

        $data['surname_latin'] = \app\components\PassportService::transliterate(null, ucfirst(strtolower($data['surname_latin'])));
        $data['name_latin'] = \app\components\PassportService::transliterate(null, ucfirst(strtolower($data['name_latin'])));
        $data['patronym_latin'] = str_replace(' уг‘ли', 'ович', \app\components\PassportService::transliterate(null, ucfirst(strtolower($data['patronym_latin']))));

        return json_encode($data);
    }

    public function actionCity($id)
    {
        $types = EntCity::find()->where(['region_id' => $id])->all();

        if (!empty($types)) {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
            foreach ($types as $type) {
                echo "<option value='" . $type->id . "'>" . $type->name . "</option>";
            }
        } else {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
        }
    }

    public function actionDistrict($id)
    {
        $types = EntDistrict::find()->where(['city_id' => $id])->all();

        if (!empty($types)) {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
            foreach ($types as $type) {
                echo "<option value='" . $type->id . "'>" . $type->name . "</option>";
            }
        } else {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
        }
    }

    public function actionOdo($id)
    {
        $types = EntOdo::find()->where(['udo_id' => $id])->all();

        if (!empty($types)) {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
            foreach ($types as $type) {
                echo "<option value='" . $type->id . "'>" . $type->name . "</option>";
            }
        } else {
            echo "<option>" . Yii::t('main', 'Choose') . "</option>";
        }
    }

    public static function checkPermission($model)
    {
        if (Yii::$app->user->can('Superadmin') || Yii::$app->user->can('Admin')) {
            return true;
        } else if ((Yii::$app->user->can('Operator') ||Yii::$app->user->can('Operator_Poslujnaya_Karta') ||  Yii::$app->user->can('Dermatolog') || Yii::$app->user->can('Xirurg') || Yii::$app->user->can('Nevropatolog') || Yii::$app->user->can('Psixiatr') ||
                Yii::$app->user->can('Oftalmolog') || Yii::$app->user->can('Otolaringolog') || Yii::$app->user->can('Stomatolog') || Yii::$app->user->can('Protokolist') || Yii::$app->user->can('Antropometrik') ||
                Yii::$app->user->can('Guest') || Yii::$app->user->can('Flyurograf') || Yii::$app->user->can('Terapevt'))
            && (isset($model->udo_id) && isset(User::findOne(Yii::$app->user->getId())->udo_id) && isset($model->odo_id) && isset(User::findOne(Yii::$app->user->getId())->odo_id))
            && ($model->udo_id == User::findOne(Yii::$app->user->getId())->udo_id && $model->odo_id == User::findOne(Yii::$app->user->getId())->odo_id)
        ) {
            return true;
        } else if ((Yii::$app->user->can('Operator') ||Yii::$app->user->can('Operator_Poslujnaya_Karta') ||  Yii::$app->user->can('Dermatolog') || Yii::$app->user->can('Xirurg') || Yii::$app->user->can('Nevropatolog') || Yii::$app->user->can('Psixiatr') ||
                Yii::$app->user->can('Oftalmolog') || Yii::$app->user->can('Otolaringolog') || Yii::$app->user->can('Stomatolog') || Yii::$app->user->can('Protokolist') || Yii::$app->user->can('Antropometrik') ||
                Yii::$app->user->can('Guest') || Yii::$app->user->can('Flyurograf') || Yii::$app->user->can('Terapevt'))
            && (isset($model->udo_id) && isset(User::findOne(Yii::$app->user->getId())->udo_id) && !isset(User::findOne(Yii::$app->user->getId())->odo_id))
            && ($model->udo_id == User::findOne(Yii::$app->user->getId())->udo_id)
        ) {
            return true;
        }
        return false;
    }
}
