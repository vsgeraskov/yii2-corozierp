<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 24.03.18
 * Time: 9:37
 * Шаблон EMAIL активация нового пользователя
 * @var $this yii\web\View
 * @var $user common\models\User
 */

use yii\helpers\Html;

echo '<h1>Привет '.Html::encode($user->username).'!</h1><br>'; //приветствие пользователя
echo 'Для активации Вашего аккаунта перейдите по ';
echo Html::a('ссылке', Yii::$app->urlManager->createAbsoluteUrl(['site/activate-account','key' => $user->auth_key]));
