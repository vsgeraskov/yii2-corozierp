<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Проверочный код',
            'name' => 'ФИО или компания',
            'subject' => 'Тема сообщения',
            'body' => 'Текст сообщения  ',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
       Yii::$app->mailer->compose('contactForm')
            ->setFrom(['sub@corozi.ru' => '[ COROZI.RU ] Корози, Сервисная Компания']) //от кого отправляем
            ->setTo('sub@corozi.ru')
            ->setSubject('Сообщение из формы обратной связи на сайте corozi.ru') //тема письма
            ->send();
    }
}
