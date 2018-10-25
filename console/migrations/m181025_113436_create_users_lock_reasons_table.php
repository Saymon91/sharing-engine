<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users_lock_reasons`.
 */
class m181025_113436_create_users_lock_reasons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE users_lock_reasons(
          client_id BIGINT NOT NULL REFERENCES clients (id),
          reason_id INTEGER NOT NULL REFERENCES lock_reasons (id),
          PRIMARY KEY (client_id, reason_id)
        )");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users_lock_reasons');
    }
}
