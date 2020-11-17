<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kunjungan}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%unit}}`
 * - `{{%pasien}}`
 * - `{{%dokter}}`
 */
class m201113_133322_create_kunjungan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kunjungan}}', [
            'id' => $this->primaryKey(),
            'kd_unit' => $this->integer()->notNull(),
            'kd_pasien' => $this->integer()->notNull(),
            'tgl_daftar' => $this->date(),
            'status_kunjungan' => $this->string(5),
            'kd_dokter' => $this->integer()->notNull(),
        ]);

        // creates index for column `kd_unit`
        $this->createIndex(
            '{{%idx-kunjungan-kd_unit}}',
            '{{%kunjungan}}',
            'kd_unit'
        );

        // add foreign key for table `{{%unit}}`
        $this->addForeignKey(
            '{{%fk-kunjungan-kd_unit}}',
            '{{%kunjungan}}',
            'kd_unit',
            '{{%unit}}',
            'id',
            'CASCADE'
        );

        // creates index for column `kd_pasien`
        $this->createIndex(
            '{{%idx-kunjungan-kd_pasien}}',
            '{{%kunjungan}}',
            'kd_pasien'
        );

        // add foreign key for table `{{%pasien}}`
        $this->addForeignKey(
            '{{%fk-kunjungan-kd_pasien}}',
            '{{%kunjungan}}',
            'kd_pasien',
            '{{%pasien}}',
            'id',
            'CASCADE'
        );

        // creates index for column `kd_dokter`
        $this->createIndex(
            '{{%idx-kunjungan-kd_dokter}}',
            '{{%kunjungan}}',
            'kd_dokter'
        );

        // add foreign key for table `{{%dokter}}`
        $this->addForeignKey(
            '{{%fk-kunjungan-kd_dokter}}',
            '{{%kunjungan}}',
            'kd_dokter',
            '{{%dokter}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%unit}}`
        $this->dropForeignKey(
            '{{%fk-kunjungan-kd_unit}}',
            '{{%kunjungan}}'
        );

        // drops index for column `kd_unit`
        $this->dropIndex(
            '{{%idx-kunjungan-kd_unit}}',
            '{{%kunjungan}}'
        );

        // drops foreign key for table `{{%pasien}}`
        $this->dropForeignKey(
            '{{%fk-kunjungan-kd_pasien}}',
            '{{%kunjungan}}'
        );

        // drops index for column `kd_pasien`
        $this->dropIndex(
            '{{%idx-kunjungan-kd_pasien}}',
            '{{%kunjungan}}'
        );

        // drops foreign key for table `{{%dokter}}`
        $this->dropForeignKey(
            '{{%fk-kunjungan-kd_dokter}}',
            '{{%kunjungan}}'
        );

        // drops index for column `kd_dokter`
        $this->dropIndex(
            '{{%idx-kunjungan-kd_dokter}}',
            '{{%kunjungan}}'
        );

        $this->dropTable('{{%kunjungan}}');
    }
}
