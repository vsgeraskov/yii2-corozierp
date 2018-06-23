<?php

namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\People;


class PeopleController extends \yii\web\Controller
{
    public $defaultAction = 'peopleview'; //контроллер по умолчанию

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
                        'actions' => ['peopleeditform', 'peopleview'],
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

    //Контроллер отображения всех данных пользователя, доступные для просмотра или редактирования
    public function actionPeopleview()
    {
        //Осуществим проверку на то, есть ли записи в таблице PEOPLE
        if($model = People::findOne(['id_user' => Yii::$app->user->id]))
        {
            return $this->render('peopleview', ['model' => $model]);
        }
        else
        {
            $model = new People();
            return $this->render('peopleeditform', ['model' => $model]);
        }
    }

    public function actionPeopleeditform()
    {
        //Ищем данные пользователя в таблице PEOPLE Если данные нашлись заносим их в объект $model, если данные не найдены
        //создаем новый объект $model из модели People
        $model = ($model = People::findOne(Yii::$app->user->id)) ? $model : new People();

        //Если была отправленна форма то загружаем отправленные данные в объект $model профиля People проверяем на валидность
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->updatePeople())
                Yii::$app->session->setFlash('success', 'Профиль успешно отредактирован'); // Сообщение успех
            else
                Yii::$app->session->setFlash('error', 'Профиль не изменен');

            return $this->refresh(); //Перезагружаем страницу
        }

        return $this->render(
            'peopleeditform',
            ['model' => $model]
        );
    }

}
