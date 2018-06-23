<?php

use yii\db\Migration;

/**
 * Class m180611_140047_help_table
 * Создает табличку содержание раздела помощь
 *
 */
class m180611_140047_help_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('help_article',[
            'id_articl' => $this->primaryKey()->comment('Уникальный ключ статьи'),
            'title' => $this->string()->defaultValue(null)->comment('Название статьи'),
            'content' => $this->text()->comment('Текст статьи'),
            'date' => $this->integer()->comment('Дата публикации или изменения'),
            'category' => $this->integer()->comment('Категория статьи'),
            'status' => $this->integer()->defaultValue(1)->comment('Статус статьи 1-опубликована 0-отключена'),
            'user_id' => $this->integer()->comment('Пользователь кто добавил или отредактировал'),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('help_article');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180611_140047_help_table cannot be reverted.\n";

        return false;
    }
    */
}
