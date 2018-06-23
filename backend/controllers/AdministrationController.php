<?php

namespace backend\controllers;

use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class AdministrationController extends \yii\web\Controller
{
    public $defaultAction = 'index';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            'userblock',
                            'userblockid',
                            'userunlockid',
                        ],
                        'allow' => true,
                        'roles' => ['Administrator'],
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUserblock()
    {
        $dataViewe = User::find()->all();
        return $this->render('userblock',['dataViewe' => $dataViewe]);
    }

    public function actionUserblockid($userid)
    {
        $user = User::findOne(['id' => $userid]);

        $user->status = 0;
        $user->save();

        $dataViewe = User::find()->all();
        return $this->render('userblock',['dataViewe' => $dataViewe]);
    }

    public function actionUserunlockid($userid)
    {
        $user = User::findOne(['id' => $userid]);

        $user->status = 10;
        $user->save();

        $dataViewe = User::find()->all();
        return $this->render('userblock',['dataViewe' => $dataViewe]);
    }

}
