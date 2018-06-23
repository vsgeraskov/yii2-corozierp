<?php

/* Сообщение для сброса пароля */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);

?>
<div class="password-reset">
    <p>Привет <?= Html::encode($user->username) ?>,</p>

    <p>Перейдите по ссылке ниже для сброса пароля.</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>

    <p>Если Вы не создавали запрос на восстановление пароля, проигнорируйте настоящее сообщение.</p>
</div>
