<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m181024_115616_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE contacts(
          client_id INTEGER NOT NULL REFERENCES clients (id),
          type SMALLINT NOT NULL,
          data JSON,
          created_at INTEGER NOT NULL,
          updated_at INTEGER NOT NULL,
          main BOOLEAN DEFAULT FALSE,
          PRIMARY KEY (client_id, type),
          UNIQUE (client_id, main)
        );");
        $this->execute("CREATE INDEX contacts_types ON contacts (type);");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
    }
}
