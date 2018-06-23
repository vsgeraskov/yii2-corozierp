<?php

namespace backend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class DocumentationController extends \yii\web\Controller
{
    public $defaultAction = 'index';

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
                        'actions' => ['index'],
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

    /* Контроллер с менюшкой */
    public function actionIndex()
    {

        return $this->render('index');
    }

}
