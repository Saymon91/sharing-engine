<?php

use yii\db\Migration;

/**
 * Handles the creation of table `documents`.
 */
class m181024_114740_create_documents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE documents(
          client_id INTEGER NOT NULL REFERENCES clients (id),
          type SMALLINT NOT NULL,
          data JSON,
          issued_by VARCHAR(255) NULL,
          issued_at INTEGER NOT NULL,
          expires_at INTEGER NULL,
          created_at INTEGER NOT NULL,
          updated_at INTEGER NOT NULL,
          PRIMARY KEY (client_id, type)
        );");
        $this->execute("CREATE INDEX documents_type ON documents (type);");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('documents');
    }
}
