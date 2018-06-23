<?php

/* Форма смены пароля */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Новый пароль';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container" style="padding-top: 5%;">
    <div class="site-request-password-reset">
        <div class="row">
            <div class="col-lg-5" style="text-align: center;">
                <img src="../img/programmer.png" width="250px">
            </div>
            <div class="col-lg-5">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>Задайте новый пароль для входя в систему.</p>

                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
</div>