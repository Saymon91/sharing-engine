<?php

use yii\db\Migration;

/**
 * Handles the creation of table `clients`.
 */
class m181024_114641_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE clients(
          id BIGSERIAL PRIMARY KEY,
          user_id UUID UNIQUE NOT NULL REFERENCES users (id),
          name JSON,
          status SMALLINT NOT NULL,
          created_at INTEGER NOT NULL,
          updated_at INTEGER NOT NULL
        );");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clients');
    }
}
