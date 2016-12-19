<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Postnew;
use app\models\Product;
use app\models\ProductSearch;
use app\models\SignupForm;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
    //     return [
    //     'access' => [
    //     'class' => AccessControl::className(),
    //     'only' => ['logout'],
    //     'rules' => [
    //     [
    //     'actions' => ['logout'],
    //     'allow' => true,
    //     'roles' => ['@'],
    //     ],
    //     ],
    //     ],
    //     'verbs' => [
    //     'class' => VerbFilter::className(),
    //     'actions' => [
    //     'logout' => ['post'],
    //     ],
    //     ],
    //     ];
    // }

    /**
     * @inheritdoc
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
     * Displays homepage.
     *
     * @return string
     */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }
    public function actionIndex()
    {
        $model = new Product();
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
            // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            ]);
    }


    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
            ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */


    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) 
            {
                if(Yii::$app->getUser()->login($user))
                    return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    public function actionPostnew()
    {
        $model = new Postnew();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->ProductName;
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->image->saveAs('uploads/' . $imageName . '.' . $model->image->extension);
            $model->ImageURL = 'uploads/' . $imageName . '.' . $model->image->extension;
            $model->save();
            return $this->redirect(['product/view', 'id' => $model->ID]);
        } else {
            return $this->render('postnew', [
                'model' => $model,
            ]);
        }
    }
    /*public function actionPostnew()
    {
        $model = new Postnew();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFil::getInstance($model, 'file');
            $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
            $model->ImageURL = $model->file->baseName . '.' . $model->file->extension;
            if($user = $model->postnew())
                return $this->goBack();
        }

        return $this->render('postnew', [
            'model' => $model,
        ]);
    }*/
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    //Search
    public function actionSearch($keyword = '')
    {   
        $sql = "SELECT * FROM product WHERE product_name LIKE '%".$keyword."%'";
        $command = Yii::$app->db->createCommand($sql);
        $results = $command->queryAll();

        return $this->render('search', [
            'keyword' => $keyword,
            'results' => $results
            ]);
    }
}
