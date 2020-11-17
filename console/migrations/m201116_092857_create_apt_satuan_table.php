<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apt_satuan}}`.
 */
class m201116_092857_create_apt_satuan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apt_satuan}}', [
            'id' => $this->primaryKey(),
            'satuan' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%apt_satuan}}');
    }
}
