<?php

use yii\db\Migration;

/**
 * Handles the creation of table `languages`.
 */
class m181025_115351_create_languages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE languages(
          
        )");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('languages');
    }
}
