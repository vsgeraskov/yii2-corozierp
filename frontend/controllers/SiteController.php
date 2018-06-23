<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\AccountActivation; //Модель активации аккаунта

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
                /*'only' => ['logout', 'signup'],*/ //Старая версия, но не работает signup
                'only' => ['logout'],
                'rules' => [
                    /*[
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],*/
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /* Раздел меню промышленная очистка*/
    public function actionPromcleaner()
    {
        return $this->render('promcleaner');
    }

    /* Раздел меню антикоррозионная защита*/
    public function actionAnticor()
    {
        return $this->render('anticor');
    }

    /* Раздел меню огнезащита строительных конструкций*/
    public function actionFireprotection()
    {
        return $this->render('fireprotection');
    }

    /* Раздел меню ремонт и восстановление бетона*/
    public function actionBeton()
    {
        return $this->render('beton');
    }

    /* Раздел меню проекты компании */
    public function actionObject()
    {
        return $this->render('object');
    }

    /* Раздел меню вакансии */
    public function actionJob()
    {
        return $this->render('job');
    }

    /*  Сообщение после регистрации нового пользователя */
    public function actionAfterregister()
    {
        return $this->render('afterregister'); //перенаправление на страницу с указанием
    }

    /*  Сообщение об ошибке после регистрации нового пользователя */
    public function actionErrorafterregister()
    {
        return $this->render('errorafterregister'); //перенаправление на страницу с указанием
    }

    /*  Сообщение после подтверждения e-mail */
    public function actionAfterregistermail()
    {
        return $this->render('afterregistermail'); //перенаправление на страницу с указанием
    }

    /*  Сообщение после подтверждения e-mail */
    public function actionErrorafterregistermail()
    {
        return $this->render('errorafterregistermail'); //перенаправление на страницу с указанием
    }

    /*  Сообщение после запроса на восстановление пароля */
    public function actionMassageresetpassword()
    {
        return $this->render('massageresetpassword'); //перенаправление на страницу с указанием
    }

    /*  Форма обратной связи */
    public function actionContactform()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()))
        {
            if (!$model->sendEmail())
            {
               return $this->render('sendemailok');
            }
            else
            {
                Yii ::$app -> session -> setFlash('success', 'Хуйня муйня какая-то');
                return $this -> render('contactform', ['model' => $model]);
            }
        }

        return $this->render('contactform', [
            'model' => $model,
        ]);//перенаправление на страницу с формой
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();  //Базовая версия
            //return $this->render('anticor');
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout(); //Разлогивание
        Yii::$app->session->destroy(); //Уничтожаем сессии

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                //Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                //Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionSendemailok()
    {
        return $this->render('sendemailok');
    }

    /**
     * Выводит мнформацию о ресурсах компании
     *
     * @return mixed
     */
    public function actionResources()
    {
        return $this->render('resources');
    }

    /**
     * Страничка с отзывами
     *
     * @return mixed
     */
    public function actionReview()
    {
        return $this->render('review');
    }

    /**
     * Страничка с данными СУОТ
     *
     * @return mixed
     */
    public function actionSuot()
    {
        return $this->render('suot');
    }

    /**
     * Страничка с данными СУОТ
     *
     * @return mixed
     */
    public function actionOurteam()
    {
        return $this->render('ourteam');
    }

    /**
     * Страничка аккредитация
     *
     * @return mixed
     */
    public function actionAkkredit()
    {
        return $this->render('akkredit');
    }

    /**
     * Signs user up.
     * Регистрация нового пользователя
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm(); //Объект модели

        if ($model->load(Yii::$app->request->post())) //Если пользователь прошел регистрацию перенаправим на Шаг №2
        {
            if ($user = $model->signup()) //Если пользователь ввел данные
            {
                //if (Yii::$app->getUser()->login($user)) { //Даннй пользователь уже зареген!
                 //return $this->goHome(); //Старый вариант
                 //   return $this->render('afterregister'); //Если все удачно перенаправим пользователя на страницу ШАГ №2

                if(!$model->sendActivationEmail($user)) //Если отправка удалась переходим на шаг №2
                    return $this->render('afterregister');
                else
                    return $this->render('errorafterregister'); //Если провал переводим на ошибку отправки сообщения!

                //}
            }
        }
        //Иначе передадим объект модели в представление
        return $this->render('signup', ['model' => $model,]);
    }

    /* Активация нового аккаунта */
    public function actionActivateAccount($key){
        try {
            $user = new AccountActivation($key);
        }
        catch(InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if($user->activateAccount()){ //Если нам удалось активировать аккаунт, перенаправим его на ШАГ №3
            return $this->render('afterregistermail');
        } else {
            return $this->render('errorafterregistermail');
        }

    }

    /**
     * Форма сброса пароля.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                //Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->render('massageresetpassword');
            } else {
                //Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Сброс пароля.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            //Yii::$app->session->setFlash('success', 'Новый пароль сохранен. Вы можете войти в систему использовать ');
            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
