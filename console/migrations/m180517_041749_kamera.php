<?php

use yii\db\Migration;

/**
 * Class m180517_041749_kamera
 * Таблица заказов в камере определяет выполнение и связанные заказы
 *
 */

class m180517_041749_kamera extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('kamera',[
            'id_kamera' => $this->primaryKey()->comment('Уникальный ключ заявки'),
            'useradd' => $this->integer()->defaultValue(0)->comment('Кто разместил заявку'), //Привязка к реальному пользователю, 0 - системное событие
            'date_in' => $this->integer()->notNull()->comment('Дата приема заявки'),
            'date_out' => $this->integer()->notNull()->comment('Дата выдачи заявки'),
            'client' => $this->string(100)->notNull()->comment('Клиент'), //Наименование клиента
            'id_company' => $this->integer()->defaultValue(0)->comment('Привязка к компании'), //Привязка к компании, 0 - частный клиент
            'pasport' => $this->string()->comment('Паспортные данные на сотрудника'), //паспортные данные
            'email' => $this->string(50)->defaultValue(null)->comment('Электронный адрес'), //Электронный адрес
            'phone' => $this->string(18)->defaultValue(null)->comment('Основной телефонный номер'), //Телефонный номер
            'price' => $this->decimal(10, 2)->defaultValue(0)->comment('Стоимость по заявке'),
            'type_payment' => $this->smallInteger()->defaultValue(1)->comment('Способ оплаты 0-наличный 1-безналичный'),
            'opisanie' => $this->string()->comment('Описание заявки'),
            'realization' => $this->smallInteger()->defaultValue(0)->comment('Тригер выполнения заявки'),
            'date_realization' => $this->integer()->defaultValue(null)->comment('Дата выполнения заявки'),
            'userrealization' => $this->integer()->defaultValue(0)->comment('Кто поставил отметку реализации заявки'),
            'payment' => $this->smallInteger()->defaultValue(0)->comment('Оплата заявки'),
            'date_payment' => $this->integer()->defaultValue(null)->comment('Дата оплаты заявки'),
            'userpayment' => $this->integer()->defaultValue(0)->comment('Кто поставил отметку оплаты заявки'),
            'give' => $this->smallInteger()->defaultValue(0)->comment('Передача заявки'),
            'date_give' => $this->integer()->defaultValue(null)->comment('Дата передачи заявки'),
            'usergive' => $this->integer()->defaultValue(0)->comment('Кто поставил отметку передачи заявки'),
        ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('kamera');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180517_041749_kamera cannot be reverted.\n";

        return false;
    }
    */
}
