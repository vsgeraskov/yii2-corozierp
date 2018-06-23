<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация нового пользователя';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container" style="padding-top: 5%;">
    <!--<h1 class=""><?/*= Html::encode($this->title) */?></h1>-->
    <div class="row">
        <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-4" style="padding-top: 5%;">
                    <img src="../img/registeruser.png" style="width: 180px;">
                </div>
                <div class="col-lg-8">

                    <h2>ШАГ №1</h2>
                    <h4>Зарегистрируйтесь в системе</h4>
                    <p>Для регистрации в нашей системе заполните все поля формы, создайте уникальный логин и пароль.
                    Запомните эти данные, в дальнейшем они Вам пригодятся.
                    </p>

                    <p>Если вы забыли пароль, восспользуйтесь функцией <a href=""> восстановить пароль.</a> Не создавайте новых аккаунтов, это приведет к понижению Вашего рейтинга</p>
                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'checkbox')->checkbox(['label' => 'Я подтверждаю, что ознакомился с <a href=\"#\">политикой конфиденциоальности</a> в соответствии с Федерального закона N 152-ФЗ от 27 июля 2006 года «О персональных данных» и даю свое согласие на включение моей кандидатуры в кадровый резерв компании «Корози»','labelOptions' => ['style' => 'padding-left:20px; text-align: justify; font-size: 8pt;'],'disabled' => false, 'checked' => true,]); ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
