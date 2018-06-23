<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profession`.
 * Список возможных профессий
 */
class m180109_185201_create_profession_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this -> db -> driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this -> createTable('profession', [
            'id_prof' => $this -> primaryKey() -> comment('Уникальный ключ'),
            'name' => $this -> string(25) -> notNull() -> comment('Профессия'),
            'code' => $this->integer()->comment('Код профессии'),
            ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('profession');
    }
}
