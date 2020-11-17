<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kelurahan}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%kecamatan}}`
 */
class m201113_105907_create_kelurahan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelurahan}}', [
            'id' => $this->primaryKey(),
            'kd_kecamatan' => $this->integer()->notNull(),
            'kelurahan' => $this->string(30),
            'kd_pos' => $this->string(5),
        ]);

        // creates index for column `kd_kecamatan`
        $this->createIndex(
            '{{%idx-kelurahan-kd_kecamatan}}',
            '{{%kelurahan}}',
            'kd_kecamatan'
        );

        // add foreign key for table `{{%kecamatan}}`
        $this->addForeignKey(
            '{{%fk-kelurahan-kd_kecamatan}}',
            '{{%kelurahan}}',
            'kd_kecamatan',
            '{{%kecamatan}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%kecamatan}}`
        $this->dropForeignKey(
            '{{%fk-kelurahan-kd_kecamatan}}',
            '{{%kelurahan}}'
        );

        // drops index for column `kd_kecamatan`
        $this->dropIndex(
            '{{%idx-kelurahan-kd_kecamatan}}',
            '{{%kelurahan}}'
        );

        $this->dropTable('{{%kelurahan}}');
    }
}
