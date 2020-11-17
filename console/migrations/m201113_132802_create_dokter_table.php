<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dokter}}`.
 */
class m201113_132802_create_dokter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dokter}}', [
            'id' => $this->primaryKey(),
            'dokter' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dokter}}');
    }
}
