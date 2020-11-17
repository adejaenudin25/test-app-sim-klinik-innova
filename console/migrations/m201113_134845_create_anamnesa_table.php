<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%anamnesa}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%kunjungan}}`
 */
class m201113_134845_create_anamnesa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%anamnesa}}', [
            'id' => $this->primaryKey(),
            'kd_kunjungan' => $this->integer()->notNull(),
            'keluhan_utama' => $this->string(50),
            'lama_sakit' => $this->string(20),
            'keluhan_tambahan' => $this->string(50),
            'tinggi_badan' => $this->integer(),
            'berat_badan' => $this->integer(),
            'suhu' => $this->integer(),
            'is_hamil' => $this->integer(),
            'alergi_obat' => $this->string(50),
            'alergi_makanan' => $this->string(50),
            'alergi_lainnya' => $this->string(50),
            'edukasi' => $this->string(100),
            'terapi' => $this->string(100),
            'rencana' => $this->string(100),
            'observasi' => $this->string(100),
            'keterangan' => $this->string(100),
            'is_merokok' => $this->integer(),
            'is_alkohol' => $this->integer(),
            'is_kurang_vegetarian' => $this->integer(),
            'dokter' => $this->string(30),
            'kd_dokter' => $this->integer(),
            'tgl_anamnesa' => $this->date(),
        ]);

        // creates index for column `kd_kunjungan`
        $this->createIndex(
            '{{%idx-anamnesa-kd_kunjungan}}',
            '{{%anamnesa}}',
            'kd_kunjungan'
        );

        // add foreign key for table `{{%kunjungan}}`
        $this->addForeignKey(
            '{{%fk-anamnesa-kd_kunjungan}}',
            '{{%anamnesa}}',
            'kd_kunjungan',
            '{{%kunjungan}}',
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
            '{{%fk-anamnesa-kd_kunjungan}}',
            '{{%anamnesa}}'
        );

        // drops index for column `kd_kunjungan`
        $this->dropIndex(
            '{{%idx-anamnesa-kd_kunjungan}}',
            '{{%anamnesa}}'
        );

        $this->dropTable('{{%anamnesa}}');
    }
}
