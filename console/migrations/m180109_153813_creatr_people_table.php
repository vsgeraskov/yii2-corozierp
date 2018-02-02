<?php

use yii\db\Migration;

/**
 * Class m180109_153813_creatr_people_table
 * Таблица формирет основные данные пользователя ФИО, Должность, Компания,
 */
class m180109_153813_creatr_people_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            }

        $this->createTable('people', [
            'id_people' => $this->primaryKey()->comment('Уникальный ключ'),
            'photo' => $this->string(35)->Null()->comment('Фотография контакта'),
            'surname' => $this->string(35)->notNull()->comment('Фамилия'),
            'name' => $this->string(35)->notNull()->comment('Имя'),
            'middle_name' => $this->string(40)->defaultValue(NULL)->comment('Отчество'),
            'birthday' => $this->integer()->defaultValue(NULL)->comment('Дата рождения'),
            'sex' => $this->smallInteger(1)->notNull()->defaultValue(0)->comment('Пол'),
            'id_profession' => $this->smallInteger(2)->notNull()->defaultValue(0)->comment('Профессия'),
            'workincompany' => $this->integer()->notNull()->defaultValue(0)->comment('Место работы'),
            'created_at' => $this->integer()->notNull()->comment('Запись создана'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('people');
    }

}
