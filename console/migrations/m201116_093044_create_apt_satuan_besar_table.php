<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apt_satuan_besar}}`.
 */
class m201116_093044_create_apt_satuan_besar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apt_satuan_besar}}', [
            'id' => $this->primaryKey(),
            'satuan_besar' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%apt_satuan_besar}}');
    }
}
