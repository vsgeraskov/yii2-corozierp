<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 24.03.18
 * Time: 9:50
 */

namespace frontend\models;

use common\models\User;
use yii\base\InvalidParamException;
use yii\base\Model;
use Yii;

/* @property  string $username */

class AccountActivation extends Model
{
    /* @var $user \common\models\User */

    private $_user;

    public function __construct($key, $config = [])
    {
        if (empty($key) || !is_string($key)) //Если переданный ключ пустой или не является строкой
            throw new InvalidParamException('Ключ не может быть пустым'); //Вызавем исключение не верного параметра

        $this->_user = User::findByAuthKey($key); //Находим объект пользователя по ключу
        if(!$this->_user) //если объект не найден
            throw new InvalidParamException('Не верный ключ');

        parent ::__construct($config);
    }

    //Функция активации нового аккаунта
    public function activateAccount(){
        $user = $this->_user; //Свойство User это объект пользователя
        $user->status = User::STATUS_ACTIVE; //Изменить статус на Активный
        $user->auth_key = Yii::$app->security->generateRandomString(); //Изменим значение AuthKey
        return $user->save();
    }

    //Возвращает никнэйм активного пользователя
    public function getUsername (){
        $user = $this->_user;
        return $user->username;
    }

}