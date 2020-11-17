<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%penyakit}}`.
 */
class m201113_133709_create_penyakit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%penyakit}}', [
            'id' => $this->primaryKey(),
            'icdx' => $this->string(10),
            'penyakit' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%penyakit}}');
    }
}
