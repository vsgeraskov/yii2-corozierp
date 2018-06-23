<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id_people Уникальный ключ
 * @property int $id_user
 * @property string $photo Фотография контакта
 * @property string $surname Фамилия
 * @property string $name Имя
 * @property string $middle_name Отчество
 * @property int $birthday Дата рождения
 * @property int $sex Пол
 * @property int $profession
 * @property string $email Электронный адрес
 * @property string $phone Телефон
 * @property string $pasport Паспорт
 * @property string $register Прописка
 * @property string $adress Адрес проживания
 * @property int $inn ИНН сотрудника
 * @property int $snils СНИЛС сотрудника
 * @property string $education Образование
 * @property string $sizclothes Размер спецодежды
 * @property string $sizboots Размер обуви
 * @property string $skills Навыки специалиста
 * @property string $personal Персональные качества сотрудника
 * @property string $experience Опыт работы
 * @property int $smoke Отношение к курению
 * @property int $alcohol Отношение к алеоголю
 * @property string $drive Номер водительского удостоверения
 * @property int $catdrive Категория водительского
 * @property int $bistrip Готовность к командировкам
 * @property int $marriage Семейное положение
 * @property int $law Судимости
 * @property int $pay Желаемый доход
 * @property string $socseti1 Соцсеть №1
 * @property string $socseti2 Соцсеть №3
 * @property int $workincompany Работа в компании
 * @property int $created_at Запись создана
 *
 * @property User $user
 * @property PeoplePhone[] $peoplePhones
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'birthday', 'sex', 'profession', 'smoke', 'alcohol', 'bistrip', 'marriage', 'law', 'pay', 'workincompany', 'created_at'], 'integer'],
            [['surname', 'name', 'created_at'], 'required'],
            [['photo', 'surname', 'name'], 'string', 'max' => 35],
            [['middle_name'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 18],
            [['pasport', 'register', 'adress', 'education', 'sizclothes', 'sizboots', 'skills', 'personal', 'experience', 'drive', 'socseti1', 'socseti2'], 'string', 'max' => 150],
            [['pasport'], 'unique'],
            [['inn'], 'string', 'max' => 12],
            [['snils'], 'string', 'max' => 14],
            [['catdrive'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_people' => 'Id People',
            'id_user' => 'Id User',
            'photo' => 'Фото',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'middle_name' => 'Отчество',
            'birthday' => 'Дата рождения',
            'sex' => 'Пол',
            'profession' => 'Профессия',
            'email' => 'Email',
            'phone' => 'Телефон',
            'pasport' => 'Паспортные данные',
            'register' => 'Адрес регистрации',
            'adress' => 'Адрес проживания',
            'inn' => 'ИНН',
            'snils' => 'СНИЛС',
            'education' => 'Образование',
            'sizclothes' => 'Размер одежды',
            'sizboots' => 'Размер обуви',
            'skills' => 'Навыки',
            'personal' => 'Персональные качества',
            'experience' => 'Опыт работы',
            'smoke' => 'Отношение к курению',
            'alcohol' => 'Отношение к алкоголю',
            'drive' => 'Водительское удостоверение',
            'catdrive' => 'Водительсвкая категория',
            'bistrip' => 'Готовность к командировкам',
            'marriage' => 'Семейное положение',
            'law' => 'Наличие судимости',
            'pay' => 'Желаемый уровень дохода',
            'socseti1' => 'Социальная сеть №1',
            'socseti2' => 'Социальная сеть №2',
            'workincompany' => 'Работа в компании',
            'created_at' => 'Запись создана',
        ];
    }

    //Связь обратная с таблицей USer
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    // Метод добавления записи введенных пользователем
    public function updatePeople(){

        //Если записи нет, создадим новый экземпляр.
        $people = ($people = People::findOne(Yii::$app->user->id)) ? $people : new  People();

        $people->id_user = Yii::$app->user->id; // поле id_user = id текущего пользователя
        $people->surname = $this->surname; // поле surname = введеному имени в поле Фамилия
        $people->name = $this->name;
        $people->middle_name = $this->middle_name;
        //'photo' => 'Фото',
        $people->birthday = $this->birthday;
        $people->sex = $this->sex;
        //'profession' => 'Профессия',
        $people->email = $this->email;
        $people->phone = $this->phone;
        $people->pasport = $this->pasport;
        $people->register = $this->register;
        $people->adress = $this->adress;
        $people->inn = $this->inn;
        $people->snils = $this->snils;
        $people->education = $this->education;
        $people->sizclothes = $this->sizclothes;
        $people->sizboots = $this->sizboots;
        $people->skills = $this->skills;
        $people->personal = $this->personal;
        $people->experience = $this->experience;
        $people->smoke = $this->smoke;
        $people->alcohol = $this->alcohol;
        $people->drive = $this->drive;
        $people->catdrive = $this->catdrive;
        $people->bistrip = $this->bistrip; //
        $people->marriage = $this->marriage; //Семейное положение
        $people->law = $this->law; //Судимости сотрудника
        $people->pay = $this->pay; //Желаемый доход
        $people->socseti1 = $this->socseti1; //Ссылка на соц.сети
        $people->socseti2 = $this->socseti2; //Ссылка на соц.сети
        // пока не трогаем значение $people->workincompany = $this->workincompany;
        $people->created_at = time(); //Текущее зачение времени в формате UNIX

        return $people->save() ? true : false; //возвратим значение успеха или же иначе ...
    }

}

