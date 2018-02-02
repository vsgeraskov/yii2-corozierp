<?php

use yii\db\Migration;

/**
 * Class m180109_173227_creatr_people_email_table
 */
// электронные адреса контактов
class m180109_173227_creatr_people_email_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('people_email', [
            'id_email' => $this->primaryKey()->comment('Уникальный ключ'),
            'id_people' => $this->integer()->notNull()->comment('ID контакта'),
            'email' => $this->string(50)->notNull()->comment('Электронный адрес'),
            'comment' => $this->string(150)->defaultValue(Null)->comment('Коментарий'),
            'created_at' => $this->integer()->notNull()->comment('Запись создана'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('people_email');
    }
}
