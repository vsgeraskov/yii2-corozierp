<?php

use yii\db\Migration;

/**
 * Class m180109_191122_creatr_people_register_table
 */
class m180109_191122_creatr_people_register_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this -> db -> driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this -> createTable('people_register', [
            'id_register' => $this -> primaryKey() -> comment('Уникальный ключ'),
            'id_people' => $this -> integer() -> notNull() -> comment('ID контакта'),
            'registration' => $this -> string(255) -> defaultValue(null) -> comment('Прописка'),
            'place' => $this -> string(255) -> defaultValue(null) -> comment('Место проживание'),
            ],$tableOptions);
    }

    public function down()
    {
        $this -> dropTable('people_register');
    }
}
