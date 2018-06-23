<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use Yii;


/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $checkbox;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Данное имя пользователя уже используется'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Настоящий e-mail уже используется'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            //['checkbox', 'required'],
            //['checkbox', 'requiredValue' => 1],
            //['checkbox', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Необходимо согласится с правилами регистрации'],

        ];
    }

    public function attributeLabels() {
        return [
        'username' => 'Логин',
        'password' => 'Пароль',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        //Если не прошло проверку функция вернет null
        if (!$this->validate()) {
            return null;
        }

        //Содаем объект User
        $user = new User();

        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;

    }

    // Функция отправки письма активации учетной записи
    public function sendActivationEmail($user)
    {
        Yii::$app->mailer->compose('activationEmail', ['user' => $user])
            ->setFrom(['sub@corozi.ru' => '[ COROZI.RU ] Корози, Сервисная Компания']) //от кого отправляем
            ->setTo($this->email)  //кому направляем, берем из формы
            ->setSubject('Активация аккаунта '.$this->username) //тема письма
            //->setTextBody('Текст сообщения') //Текстовое представление
            //->setHtmlBody('<b>текст сообщения в формате HTML для активации аккаунта</b>') //HTML представление
            ->send();

    }
}
