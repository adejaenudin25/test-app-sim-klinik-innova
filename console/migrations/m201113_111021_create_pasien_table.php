<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%kelurahan}}`
 */
class m201113_111021_create_pasien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien}}', [
            'id' => $this->primaryKey(),
            'kd_kelurahan' => $this->integer()->notNull(),
            'nama' => $this->string(30),
            'no_kk' => $this->string(16),
            'nik' => $this->string(16),
            'pekerjaan' => $this->string(30),
            'jenis_kelamin' => $this->string(4),
            'tgl_lahir' => $this->date(),
            'tempat_lahir' => $this->string(15),
            'gol_darah' => $this->string(2),
            'handphone' => $this->string(15),
            'alamat' => $this->string(50),
            'rt' => $this->string(3),
            'rw' => $this->string(3),
            'agama' => $this->string(10),
            'pendidikan' => $this->string(15),
            'status_marital' => $this->string(10),
            'status_keluarga' => $this->string(15),
            'wni' => $this->string(9),
            'nama_ayah' => $this->string(20),
            'nama_ibu' => $this->string(20),
            'ktp_alamat' => $this->string(50),
            'ktp_kd_kelurahan' => $this->string(11),
            'ktp_rt' => $this->string(3),
            'ktp_rw' => $this->string(3),
        ]);

        // creates index for column `kd_kelurahan`
        $this->createIndex(
            '{{%idx-pasien-kd_kelurahan}}',
            '{{%pasien}}',
            'kd_kelurahan'
        );

        // add foreign key for table `{{%kelurahan}}`
        $this->addForeignKey(
            '{{%fk-pasien-kd_kelurahan}}',
            '{{%pasien}}',
            'kd_kelurahan',
            '{{%kelurahan}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%kelurahan}}`
        $this->dropForeignKey(
            '{{%fk-pasien-kd_kelurahan}}',
            '{{%pasien}}'
        );

        // drops index for column `kd_kelurahan`
        $this->dropIndex(
            '{{%idx-pasien-kd_kelurahan}}',
            '{{%pasien}}'
        );

        $this->dropTable('{{%pasien}}');
    }
}
