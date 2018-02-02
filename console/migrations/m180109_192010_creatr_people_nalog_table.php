<?php

use yii\db\Migration;

/**
 * Class m180109_192010_creatr_people_nalog_table
 */
class m180109_192010_creatr_people_nalog_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this -> db -> driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this -> createTable('people_nalog', [
            'id_nalog' => $this -> primaryKey() -> comment('Уникальный ключ'),
            'id_people' => $this -> integer() -> notNull() -> comment('ID контакта'),
            'inn' => $this -> bigInteger(12) -> defaultValue(null) -> unique() -> comment('ИНН'),
            'snils' => $this -> integer(11) -> defaultValue(null) ->unique() -> comment('СНИЛС'),
        ],$tableOptions);
    }

    public function down()
    {
        $this -> dropTable('people_nalog');
    }
}
