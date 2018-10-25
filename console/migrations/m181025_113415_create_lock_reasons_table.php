<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lock_reasons`.
 */
class m181025_113415_create_lock_reasons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE lock_reasons(
          id serial PRIMARY KEY,
          tag varchar(45) UNIQUE NOT NULL
        )");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('lock_reasons');
    }
}
