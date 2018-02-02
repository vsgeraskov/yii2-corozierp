<?php

use yii\db\Migration;

/**
 * Class m180109_185636_creatr_people_pasport_table
 */
class m180109_185636_creatr_people_pasport_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('people_pasport', [
            'id_pasport' => $this->primaryKey()->comment('Уникальный ключ'),
            'id_people' => $this->integer()->notNull()->comment('ID контакта'),
            'pasport' => $this->string()->notNull()->comment('Паспорт')->unique(),
            'comment' => $this->string()->defaultValue(null)->comment('Комментарий к записи'),
        ], $tableOptions);
    }

    public function down()
    {
        // echo "m180109_153813_creatr_people_table cannot be reverted.\n";
        $this->dropTable('people_pasport');
        //   return false;
    }
}
