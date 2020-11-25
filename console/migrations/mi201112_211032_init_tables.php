<?php

use yii\db\Migration;

/**
 * Class mi201112_211032_init_tables
 */
class mi201112_211032_init_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "mi201112_211032_init_tables cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('manager', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(),
            'lastname' => $this->string(),
            'password' => $this->string(),
            'login' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'status' => $this->integer()
        ]);
        
        $this->addColumn('user', 'phone', $this->string());
        
        $this->createTable('call', [
            'client_id' => $this->integer(),
            'manager_id' => $this->integer(),
            'start_time' => $this->time(),
            'status' => $this->integer()
        ]);
        $this->addForeignKey('fk-call-client_id', 'call', 'client_id', 'user', 'id', 'CASCADE');
        $this->addForeignKey('fk-call-manager_id', 'call', 'manager_id', 'manager', 'id', 'CASCADE');

        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'link_to_video' => $this->string(),
            'price' => $this->money(),
        ]);
    }

    public function down()
    {
        echo "mi201112_211032_init_tables cannot be reverted.\n";

        return false;
    }
}
