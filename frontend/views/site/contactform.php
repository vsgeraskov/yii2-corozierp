<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 26.03.18
 * Time: 20:26
 */


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="site-contact" style="margin: 50px 0; vertical-align: middle;">
    <div class="container inner" >
        <h1>Обратная связь</h1>
        <div class="row">
            <div class="col-lg-6">

                <h4>Свяжитесь с нами если у Вас остались вопросы</h4>
                У Вас остались вопросы, напишите нам, и наши специалисты ответят на любые Ваши вопросы.<br>
                <img src="../img/sendmail.png" style="">

            </div>
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?/*= $form->field($model, 'subject') */?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

           <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg', 'style' => 'width:100%;', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>