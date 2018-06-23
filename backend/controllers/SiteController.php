<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'error','profiluser'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        //Запишем в куке основные параметры пользователя и переменные входва в систему
        if($namepeople = \app\models\People::findOne(['id_user' => Yii::$app->user->id] ))
        {

            $session = Yii::$app->session; //Переменная сессии
            $session->open(); //Открыть сессию

            $fio = $namepeople -> surname . " " . $namepeople -> name . " " . $namepeople -> middle_name;
            $io = $namepeople -> name . " " . $namepeople -> middle_name;
            $name = $namepeople -> surname . " " .mb_substr($namepeople->name,0,1,'UTF-8').".".mb_substr($namepeople->middle_name,0,1,'UTF-8').".";

            $session->set('userpeopleid', $namepeople -> id_user);
            $session->set('fio', $fio);
            $session->set('io', $io);
            $session->set('name', $name);
            $session->set('username', Yii::$app->user->identity->username);
            $session->set('userid', Yii::$app->user->id);

            $session->close();

         }
        else
            {
                $session = Yii::$app->session; //Переменная сессии
                $session->open(); //Открыть сессию

                 $session->set('userpeopleid', '0');
                $session->set('fio', Yii::$app->user->identity->username);
                $session->set('io', Yii::$app->user->identity->username);
                $session->set('username', Yii::$app->user->identity->username);
                $session->set('name', Yii::$app->user->identity->username);
                $session->set('userid', Yii::$app->user->id);

                $session->close();

            }

        return $this->render('index');
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
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        //Удаляем куки
        Yii::$app->response->cookies->remove('fio');
        Yii::$app->user->logout();


        return $this->goHome();
    }
}
