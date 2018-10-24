<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m181023_171840_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //$this->execute('CREATE EXTENSION pgcrypto;');
        $this->execute("CREATE TABLE users(
          id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
          username VARCHAR(50) NOT NULL UNIQUE,
          password_hash VARCHAR(60) DEFAULT NULL,
          auth_token UUID DEFAULT NULL,
          created_at INTEGER NOT NULL,
          updated_at INTEGER NOT NULL,
          deleted_at INTEGER NULL
        );");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
