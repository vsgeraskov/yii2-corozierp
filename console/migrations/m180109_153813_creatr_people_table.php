<?php

use yii\db\Migration;

/**
 * Class m180109_153813_creatr_people_table
 * Таблица формирет основные данные пользователя ФИО, Должность, Компания,
 * Таблица связана по ключу с таблицей user
 */
class m180109_153813_creatr_people_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            }

        $this->createTable('people', [
            'id_people' => $this->primaryKey()->comment('Уникальный ключ'),
            'id_user' => $this->integer()->defaultValue(Null), //Привязка к реальному пользователю может быть null если привязки нет
            'photo' => $this->string(35)->Null()->comment('Фотография контакта'),
            'surname' => $this->string(35)->notNull()->comment('Фамилия'),
            'name' => $this->string(35)->notNull()->comment('Имя'),
            'middle_name' => $this->string(40)->defaultValue(NULL)->comment('Отчество'),
            'birthday' => $this->integer()->defaultValue(NULL)->comment('Дата рождения'),
            'sex' => $this->smallInteger(1)->notNull()->defaultValue(0)->comment('Пол'), //По умолчанию мужской
            'profession' => $this->integer()->defaultValue(null), //Профессия по умолчанию
            'email' => $this->string(50)->defaultValue(null)->comment('Электронный адрес'), //Электронный адрес
            'phone' => $this->string(18)->defaultValue(null)->comment('Основной телефонный номер'), //Телефонный номер
            'pasport' => $this->string(150)->defaultValue(null)->comment('Паспорт')->unique(), //Паспортные данные
            'register' => $this->string()->defaultValue(null)->comment('Прописка'), //Прописка специалиста
            'adress' => $this->string()->defaultValue(null)->comment('Адрес проживания'),//Адрес проживания
            'inn' => $this->string(12)->defaultValue(null)->comment('ИНН сотрудника')->unique(), //ИНН сотрудника
            'snils' => $this->string(14)->defaultValue(null)->comment('СНИЛС сотрудника')->unique(),
            'education' => $this->string()->defaultValue(null)->comment('Образование'),
            'sizclothes' => $this->string()->defaultValue(null)->comment('Размер спецодежды'),
            'sizboots' => $this->string()->defaultValue(null)->comment('Размер обуви'),
            'skills' => $this->string()->defaultValue(null)->comment('Навыки специалиста'), //Навыки
            'personal' => $this->string()->defaultValue(null)->comment('Персональные качества сотрудника'),
            'experience' => $this->string()->defaultValue(null)->comment('Опыт работы'),
            'smoke' => $this->smallInteger(1)->defaultValue(null)->comment('Отношение к курению'),
            'alcohol' => $this->smallInteger(1)->defaultValue(null)->comment('Отношение к алеоголю'),
            'drive' => $this->string()->defaultValue(null)->comment('Номер водительского удостоверения'),
            'catdrive' => $this->smallInteger()->defaultValue(null)->comment('Категория водительского'),
            'bistrip' => $this->smallInteger(1)->defaultValue(null)->comment('Готовность к командировкам'),
            'marriage' => $this->smallInteger(1)->defaultValue(0)->notNull()->comment('Семейное положение'),
            'law' => $this->smallInteger(1)->notNull()->defaultValue(0)->comment('Судимости'),
            'pay' => $this->integer()->defaultValue(null)->comment('Желаемый доход'),
            'socseti1' => $this->string()->defaultValue(null)->comment('Соцсеть №1'),
            'socseti2' => $this->string()->defaultValue(null)->comment('Соцсеть №2'),
            'workincompany' => $this->smallInteger(1)->defaultValue(0)->notNull()->comment('Работа в компании'),
            'created_at' => $this->integer()->notNull()->comment('Запись создана'),
        ], $tableOptions);

        //Устанавливаем связи м/у таблицами people и user
        $this->addForeignKey(
            'people_and_user', //Название кюча
            'people', //таблица которую связываем
            'id_user', //ключ в таблице для связи
            'user', //таблица с которой связываем
            'id', //ключ по которому происходит связь
            'cascade', //Удаление данных при удалении связанных данных
            'cascade'); //Изменение данный в связанных таблицах

    }

    public function safeDown()
    {
        $this->dropTable('people');
        $this->dropForeignKey('people_and_user','people'); //удаляем связь между таблицами

    }

}
