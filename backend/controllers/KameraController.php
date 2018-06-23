<?php

namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Kamera;


class KameraController extends \yii\web\Controller
{
    public $defaultAction = 'index';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view', 'create', 'update', 'flagrealization', 'flagpayment', 'flaggive', 'dogovor'],
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


    /* Меню раздела */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /* Выводим все доступные записи в базе */
    public function actionView()
    {
        // Ищем все данные в таблице Kamera
        if($model = Kamera::find()->orderBy(['date_out' => SORT_DESC, 'id_kamera' => SORT_DESC])->all())
            return $this->render('view', ['model' => $model]);
        else
        {   // Если данных в таблице нет, мы создадим новый объект и нифига не выведем
            $model = new Kamera();
            return $this->render('view', ['model' => $model]);
        }
    }

    /* Выводим все доступные записи в базе */
    public function actionDogovor()
    {
        $this->layout = '@app/views/layouts/freetamplate.php';
        //тут нужно сделать проверку на get запросы
        //если передан get запрос то ищем запись по id если нет, создадим новую

        //$request = Yii::$app->request; //Обращаемся к классу запросов

        $model = new Kamera();

        if($id_zakaz = Yii::$app->request->get('id_zakaz'))
        {
            //если задан id то ищем эту запись
            $model = Kamera::findOne($id_zakaz);

        } else {
            Yii::$app->session->setFlash('error', 'Ошибка! Не задан обязательный параметр id заявки');
            return Yii::$app->response->redirect(['kamera/view']);
        }

        return $this->render('dogovor', ['model' => $model]);

    }

    /* Создаем новую заявку в камере  */
    public function actionCreate()
    {
        // создаем новый экземпляр класса
        $model = new Kamera();

        //Если была отправленна форма то загружаем отправленные данные в объект $model профиля People проверяем на валидность
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->createKamera())
                Yii::$app->session->setFlash('success', 'Заявка успешно создана'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Ошибка! Заявка отклонена, откорректируйте заявку');

            //return $this->refresh(); //Обновим страницу
            return Yii::$app->response->redirect(['kamera/view']);
        }

        return $this->render(
            'create',
            ['model' => $model]
        );

    }

    /* Редактируем уже имеющуюся */
    public function actionUpdate()
    {
        //тут нужно сделать проверку на get запросы
        //если передан get запрос то ищем запись по id если нет, создадим новую

        $request = Yii::$app->request; //Обращаемся к классу запросов
        $id_zakaz = $request->get('id_zakaz');

        if($id_zakaz!=null)
        {    //если задан id то ищем эту запись
            $model = Kamera::findOne($id_zakaz);
        } else {
            echo "LoL";
        }

        //Если была отправленна форма то загружаем отправленные данные в объект $model профиля People проверяем на валидность
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->updateKamera($id_zakaz))
                Yii::$app->session->setFlash('success', 'Изменения успешно внесены'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Ошибка! Изменения не приняты');

            //return $this->refresh(); //Перезагружаем страницу
            return Yii::$app->response->redirect(['kamera/view']);
        }

        return $this->render(
            'update',
            ['model' => $model]
        );
    }

    /* Изменим флаг на ВЫПОЛНЕННО*/
    public function actionFlagrealization()
    {
        //тут нужно сделать проверку на get запросы
        //если передан get запрос то ищем запись по id если нет, создадим новую

        $request = Yii::$app->request; //Обращаемся к классу запросов
        $id_zakaz = $request->get('id_zakaz');

        if($id_zakaz!=null)
        {    //если задан id то ищем эту запись
            $model = Kamera::findOne($id_zakaz);

            if ($model->flagRealization($id_zakaz))
                Yii::$app->session->setFlash('success', 'Статус заявки успешно изменен на -- ВЫПОЛНЕННО --'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Ошибка! Статус заявки не изменен');

            return Yii::$app->response->redirect(['kamera/view']);
        } else {
            Yii::$app->session->setFlash('error', 'Ошибка! Неверно задан параметр');
            return Yii::$app->response->redirect(['kamera/view']);
        }
    }

    /* Изменим флаг на ОПЛАЧЕНО */
    public function actionFlagpayment()
    {
        //тут нужно сделать проверку на get запросы
        //если передан get запрос то ищем запись по id если нет, создадим новую

        $request = Yii::$app->request; //Обращаемся к классу запросов
        $id_zakaz = $request->get('id_zakaz');

        if($id_zakaz!=null)
        {    //если задан id то ищем эту запись
            $model = Kamera::findOne($id_zakaz);

            if ($model->flagPayment($id_zakaz))
                Yii::$app->session->setFlash('success', 'Статус заявки успешно изменен на -- ОПЛАЧЕНО --'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Ошибка! Статус заявки не изменен');

            return Yii::$app->response->redirect(['kamera/view']);
        } else {
            Yii::$app->session->setFlash('error', 'Ошибка! Неверно задан параметр');
            return Yii::$app->response->redirect(['kamera/view']);
        }
    }

    /* Изменим флаг на ОПЛАЧЕНО */
    public function actionFlaggive()
    {
        //тут нужно сделать проверку на get запросы
        //если передан get запрос то ищем запись по id если нет, создадим новую

        $request = Yii::$app->request; //Обращаемся к классу запросов
        $id_zakaz = $request->get('id_zakaz');

        if($id_zakaz!=null)
        {    //если задан id то ищем эту запись
            $model = Kamera::findOne($id_zakaz);

            if ($model->flagGive($id_zakaz))
                Yii::$app->session->setFlash('success', 'Статус заявки успешно изменен на -- ПЕРЕДАНО ЗАКАЗЧИКУ --'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Ошибка! Статус заявки не изменен');

            return Yii::$app->response->redirect(['kamera/view']);

        } else {
            Yii::$app->session->setFlash('error', 'Ошибка! Неверно задан параметр');
            return Yii::$app->response->redirect(['kamera/view']);
        }
    }

}
