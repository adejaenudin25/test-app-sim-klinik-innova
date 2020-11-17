<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diagnosa}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%kunjungan}}`
 * - `{{%penyakit}}`
 */
class m201113_134155_create_diagnosa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%diagnosa}}', [
            'id' => $this->primaryKey(),
            'kd_kunjungan' => $this->integer()->notNull(),
            'kd_penyakit' => $this->integer()->notNull(),
            'icdx' => $this->string(10),
            'diagnosa' => $this->string(30),
            'dokter' => $this->string(30),
            'jenis' => $this->string(11),
            'kasus' => $this->string(4),
        ]);

        // creates index for column `kd_kunjungan`
        $this->createIndex(
            '{{%idx-diagnosa-kd_kunjungan}}',
            '{{%diagnosa}}',
            'kd_kunjungan'
        );

        // add foreign key for table `{{%kunjungan}}`
        $this->addForeignKey(
            '{{%fk-diagnosa-kd_kunjungan}}',
            '{{%diagnosa}}',
            'kd_kunjungan',
            '{{%kunjungan}}',
            'id',
            'CASCADE'
        );

        // creates index for column `kd_penyakit`
        $this->createIndex(
            '{{%idx-diagnosa-kd_penyakit}}',
            '{{%diagnosa}}',
            'kd_penyakit'
        );

        // add foreign key for table `{{%penyakit}}`
        $this->addForeignKey(
            '{{%fk-diagnosa-kd_penyakit}}',
            '{{%diagnosa}}',
            'kd_penyakit',
            '{{%penyakit}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%kunjungan}}`
        $this->dropForeignKey(
            '{{%fk-diagnosa-kd_kunjungan}}',
            '{{%diagnosa}}'
        );

        // drops index for column `kd_kunjungan`
        $this->dropIndex(
            '{{%idx-diagnosa-kd_kunjungan}}',
            '{{%diagnosa}}'
        );

        // drops foreign key for table `{{%penyakit}}`
        $this->dropForeignKey(
            '{{%fk-diagnosa-kd_penyakit}}',
            '{{%diagnosa}}'
        );

        // drops index for column `kd_penyakit`
        $this->dropIndex(
            '{{%idx-diagnosa-kd_penyakit}}',
            '{{%diagnosa}}'
        );

        $this->dropTable('{{%diagnosa}}');
    }
}
