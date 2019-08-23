<?php

namespace app\controllers;

use app\models\DocConscript;
use app\models\EntOdo;
use mdm\admin\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use mdm\admin\models\form\Signup;
use yii\web\UploadedFile;
use mdm\admin\models\form\ChangePassword;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $date = date('Y-m-d', strtotime(date("Y-m-d") . ' - 27 year'));
        $list = DocConscript::find()->where(['deletion_mark' => null])->orWhere(['deletion_mark' => '0'])->andWhere(['not', ['region_id' => null]])->andWhere(['<=', 'birth_date', $date])->all();

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    public function actionSignup()
    {
        $this->layout = 'login';
        $model = new Signup();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if ($user = $model->signup()) {
                return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/login']);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionProfile($id)
    {
        $model = User::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if (!is_null($model->photo)) {
                $pathForFolder = 'uploads/profile/' . Yii::$app->user->identity->getId() . DIRECTORY_SEPARATOR;
                FileHelper::createDirectory($pathForFolder, $mode = 0775, $recursive = true);
                $model->photo_name = $model->photo->baseName . '.' . $model->photo->extension;
                $model->photo_path = $pathForFolder . $model->photo_name;
//                if (file_exists($model->photo_path)) {
//                    unlink($model->photo_path);
//                }
                $model->photo->saveAs($model->photo_path);
            }
            $model->first_name = $_POST['User']['first_name'];
            $model->second_name = $_POST['User']['second_name'];
            $model->patronymic = $_POST['User']['patronymic'];
            $model->email = $_POST['User']['email'];
            $model->position = $_POST['User']['position'];
            $model->udo_id = $_POST['User']['udo_id'];
            $model->odo_id = $_POST['User']['odo_id'] ? $_POST['User']['odo_id'] : null;
            $model->save(false);
            return $this->redirect(['site/index']);
        } else {
            return $this->render('profile', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
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

    public function actionChangePassword()
    {
        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->goHome();
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }
}
