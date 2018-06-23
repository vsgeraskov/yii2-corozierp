<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamera".
 *
 * @property int $id_kamera Уникальный ключ заявки
 * @property int $useradd Кто разместил заявку
 * @property int $date_in Дата приема заявки
 * @property int $date_out Дата выдачи заявки
 * @property string $client Клиент
 * @property int $id_company Привязка к компании
 * @property string $pasport Паспортные данные на сотрудника
 * @property string $email Электронный адрес
 * @property string $phone Основной телефонный номер
 * @property string $price Стоимость по заявке
 * @property int $type_payment Способ оплаты 0-наличный 1-безналичный
 * @property string $opisanie Описание заявки
 * @property int $realization Тригер выполнения заявки
 * @property int $date_realization Дата выполнения заявки
 * @property int $userrealization Кто поставил отметку реализации заявки
 * @property int $payment Оплата заявки
 * @property int $date_payment Дата оплаты заявки
 * @property int $userpayment Кто поставил отметку оплаты заявки
 * @property int $give Передача заявки
 * @property int $date_give Дата передачи заявки
 * @property int $usergive Кто поставил отметку передачи заявки
 */
class Kamera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kamera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['useradd', 'id_company', 'type_payment', 'realization', 'date_realization', 'userrealization', 'payment', 'date_payment', 'userpayment', 'give', 'date_give', 'usergive'], 'integer'],
            [['date_in', 'date_out', 'client', 'pasport', 'price', 'opisanie'], 'required'],
            [['price'], 'number'],
            [['client'], 'string', 'max' => 100],
            [['pasport', 'opisanie'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kamera' => 'id заказа',
            'useradd' => 'Useradd',
            'date_in' => 'Дата начала работ',
            'date_out' => 'Дата окончания работ',
            'client' => 'Клиент',
            'id_company' => 'Компания',
            'pasport' => 'Поспортные данные',
            'email' => 'Email',
            'phone' => 'Телефон',
            'price' => 'Стоимость',
            'type_payment' => 'Тип оплаты',
            'opisanie' => 'Описание заявки',
            'realization' => 'Realization',
            'date_realization' => 'Date Realization',
            'userrealization' => 'Userrealization',
            'payment' => 'Payment',
            'date_payment' => 'Date Payment',
            'userpayment' => 'Userpayment',
            'give' => 'Give',
            'date_give' => 'Date Give',
            'usergive' => 'Usergive',
        ];
    }

    // Метод добавления записи введенных пользователем
    public function createKamera(){

        if(isset($this->date_in))
        {
            //формируем массив из строк даты, месяца, года, разделяя общую дату по символу"/"
            $DateArrayIn = explode('.', $this -> date_in);
            //переводим в Unix метку
            $date_in = mktime(0, 0, 0, $DateArrayIn[1], $DateArrayIn[0], $DateArrayIn[2]);
        }

        if(isset($this->date_out))
        {
            //формируем массив из строк даты, месяца, года, разделяя общую дату по символу"/"
            $DateArrayOut = explode('.', $this -> date_out);
            //переводим в Unix метку
            $date_out = mktime(0, 0, 0, $DateArrayOut[1], $DateArrayOut[0], $DateArrayOut[2]);
        }

        //Если записи нет, создадим новый экземпляр.
        $kamera = new  Kamera();

        $kamera->useradd = Yii::$app->user->id; // поле id_user = id текущего пользователя кто добавит заявку
        $kamera->date_in = $date_in; // Дата начала работ
        $kamera->date_out = $date_out; // Дата окончания окончания
        $kamera->client = $this->client;
        $kamera->id_company = $this->id_company; //Привязка к компаниям
        $kamera->pasport = $this->pasport;
        $kamera->email = $this->email;
        $kamera->phone = $this->phone;
        $kamera->price = $this->price;
        $kamera->type_payment = $this->type_payment;
        $kamera->opisanie = $this->opisanie;
        $kamera->realization = 0;
        $kamera->date_realization = null;
        $kamera->userrealization = 0;
        $kamera->payment = 0;
        $kamera->date_payment = null;
        $kamera->userpayment = 0;
        $kamera->give = 0;
        $kamera->date_give = null;
        $kamera->usergive = 0;

        return $kamera->save() ? true : false; //возвратим значение успеха или же иначе ...*/
    }

    // Метод добавления записи введенных пользователем
    public function updateKamera($id_zakaz)
    {
        // Перевод даты в UNIX формат
        if(isset($this->date_in))
        {
            //формируем массив из строк даты, месяца, года, разделяя общую дату по символу"/"
            $DateArrayIn = explode('.', $this -> date_in);
            //переводим в Unix метку
            $date_in = mktime(0, 0, 0, $DateArrayIn[1], $DateArrayIn[0], $DateArrayIn[2]);
        }

        // Перевод даты в UNIX формат
        if(isset($this->date_out))
        {
            //формируем массив из строк даты, месяца, года, разделяя общую дату по символу"/"
            $DateArrayOut = explode('.', $this -> date_out);
            //переводим в Unix метку
            $date_out = mktime(0, 0, 0, $DateArrayOut[1], $DateArrayOut[0], $DateArrayOut[2]);
        }

        //Если записи нет, создадим новый экземпляр.
        $kamera = Kamera::findOne($id_zakaz);

        $kamera->useradd = Yii::$app->user->id; // поле id_user = id текущего пользователя кто добавит заявку
        $kamera->date_in = $date_in; // Дата начала работ
        $kamera->date_out = $date_out; // Дата окончания окончания
        $kamera->client = $this->client;
        $kamera->id_company = $this->id_company; //Привязка к компаниям
        $kamera->pasport = $this->pasport;
        $kamera->email = $this->email;
        $kamera->phone = $this->phone;
        $kamera->price = $this->price;
        $kamera->type_payment = $this->type_payment;
        $kamera->opisanie = $this->opisanie;

        return $kamera->save() ? true : false; //возвратим значение успеха или же иначе ...*/
    }

    //Изменяет статус заявки на выполненно
    public function flagRealization($id_zakaz)
    {
        $kamerarealization = Kamera::findOne($id_zakaz);

        $kamerarealization->realization = 1;
        $kamerarealization->date_realization = time();
        $kamerarealization->userrealization = Yii::$app->user->identity->getId();

        return $kamerarealization->save() ? true : false; //возвратим значение успеха или же иначе ...*/
    }

    //Изменяет флаг заявки на ОПЛАЧЕНО
    public function flagPayment($id_zakaz)
    {
        $kamerapayment = Kamera::findOne($id_zakaz);

        $kamerapayment->payment = 1;
        $kamerapayment->date_payment = time();
        $kamerapayment->userpayment = Yii::$app->user->identity->getId();

        return $kamerapayment->save() ? true : false; //возвратим значение успеха или же иначе ...*/
    }

    //Изменяет флаг заявки на ПЕРЕДАНО ЗАКАЗЧИКУ
    public function flagGive($id_zakaz)
    {
        $kameragive = Kamera::findOne($id_zakaz);

        $kameragive->give = 1;
        $kameragive->date_give = time();
        $kameragive->usergive = Yii::$app->user->identity->getId();

        return $kameragive->save() ? true : false; //возвратим значение успеха или же иначе ...*/
    }

}
