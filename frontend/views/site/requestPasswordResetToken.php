<?php

/* Форма ввода email для замены пароля*/

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сброс пароля';
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
                <p>Забыли пароль? не беда, мы поможем его восстановить. Введите свой e-mail в поле ниже,
                    мы пришлем Вам ссылку на восстановление пароля.</p>

                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
</div>