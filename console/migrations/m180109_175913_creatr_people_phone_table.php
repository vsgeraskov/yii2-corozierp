<?php

use yii\db\Migration;

/**
 * Class m180109_175913_creatr_people_phone_table
 */
//Телефонные номера контактов
class m180109_175913_creatr_people_phone_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('people_phone', [
            'id_phone' => $this->primaryKey()->comment('Уникальный ключ'),
            'id_people' => $this->integer()->notNull()->comment('ID контакта'),
            'phone' => $this->integer(10)->notNull()-> unique() -> comment('Телефон'),
            'additional' => $this->integer(6)->defaultValue(Null)->comment('Дополнительный номер'),
            'type' => $this->smallInteger(2)->defaultValue(Null)->comment('Тип номера'), //Домашний, Рабочий, Мобильный и т.д.
            'comment' => $this->string(150)->defaultValue(NULL)->comment('Коментарий'),
            'created_at' => $this->integer()->notNull()->comment('Запись создана'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('people_phone');
    }
}
