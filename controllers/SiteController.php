<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Post;
use yii\web\UploadedFile;
use yii\base\Model;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Fetch posts from the database, you can add conditions or limit if needed
        $posts = Post::find()->all();

        return $this->render('index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
{
    if (!Yii::$app->user->isGuest) {
        // If the user is already logged in, redirect them to post/index
        return $this->redirect(['post/index']);
    }

    $model = new LoginForm();

    if ($model->load(Yii::$app->request->post()) && $model->login()) {
        // Redirect to the post/index page after a successful login
        return $this->redirect(['post/index']);
    }

    // Clear the password after a failed login attempt
    $model->password = '';

    return $this->render('login', [
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

        return $this->goHome();
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }




    public function actionSignUp()
{
    $model = new User();

    if ($model->load(Yii::$app->request->post())) {
        // Handle file upload for 'profile_picture'
        $model->profile_picture = UploadedFile::getInstance($model, 'profile_picture');

        if ($model->validate()) {
            // Hash the password before saving
            $model->password = Yii::$app->security->generatePasswordHash($model->password);

            // If the user uploads a profile picture, save it
            if ($model->profile_picture) {
                // Define the file path
                $filePath = Yii::getAlias('@webroot/uploads/') . $model->profile_picture->baseName . '.' . $model->profile_picture->extension;

                // Save the file to the server
                if ($model->profile_picture->saveAs($filePath)) {
                    $model->profile_picture = $filePath; // Save the file path to the profile_picture column
                } else {
                    Yii::$app->session->setFlash('error', 'Failed to save profile picture.');
                }
            }

            // Check and save user model to the database
            if ($model->save()) {
                return $this->redirect(['login']);
            } else {
                // Log validation errors
                Yii::info($model->getErrors(), 'User Model Errors'); // Log errors for debugging
                Yii::$app->session->setFlash('error', 'Failed to save user data.');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Validation failed.');
        }
    }

    return $this->render('sign-up', [
        'model' => $model,
    ]);
}

    

    public function actionCreateUser(){
        $model = new User();

        if ($model->load($model ->post())) {

            $model->save(false);
            Yii::$app->session->setFlash('success','Successfully added data');
            return $this->refresh();
        }
        return $this->render('post',['data' => $model]);

     }
   
}
