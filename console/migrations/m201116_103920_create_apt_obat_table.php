<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apt_obat}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%apt_satuan}}`
 * - `{{%apt_satuan_besar}}`
 */
class m201116_103920_create_apt_obat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apt_obat}}', [
            'id' => $this->primaryKey(),
            'kd_satuan' => $this->integer()->notNull(),
            'kd_satuan_besar' => $this->integer(),
            'nama_obat' => $this->string(60),
            'ket_obat' => $this->string(30),
            'generic' => $this->integer(),
            'fractions' => $this->integer(),
            'mg' => $this->float()->notNull(),
            'dpho' => $this->integer()->notNull(),
            'tag' => $this->integer(),
            'aktif' => $this->integer(),
            'kd_pabrik' => $this->integer(),
            'data_owner' => $this->string(100),
            'generik' => $this->integer(),
        ]);

        // creates index for column `kd_satuan`
        $this->createIndex(
            '{{%idx-apt_obat-kd_satuan}}',
            '{{%apt_obat}}',
            'kd_satuan'
        );

        // add foreign key for table `{{%apt_satuan}}`
        $this->addForeignKey(
            '{{%fk-apt_obat-kd_satuan}}',
            '{{%apt_obat}}',
            'kd_satuan',
            '{{%apt_satuan}}',
            'id',
            'CASCADE'
        );

        // creates index for column `kd_satuan_besar`
        $this->createIndex(
            '{{%idx-apt_obat-kd_satuan_besar}}',
            '{{%apt_obat}}',
            'kd_satuan_besar'
        );

        // add foreign key for table `{{%apt_satuan_besar}}`
        $this->addForeignKey(
            '{{%fk-apt_obat-kd_satuan_besar}}',
            '{{%apt_obat}}',
            'kd_satuan_besar',
            '{{%apt_satuan_besar}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%apt_satuan}}`
        $this->dropForeignKey(
            '{{%fk-apt_obat-kd_satuan}}',
            '{{%apt_obat}}'
        );

        // drops index for column `kd_satuan`
        $this->dropIndex(
            '{{%idx-apt_obat-kd_satuan}}',
            '{{%apt_obat}}'
        );

        // drops foreign key for table `{{%apt_satuan_besar}}`
        $this->dropForeignKey(
            '{{%fk-apt_obat-kd_satuan_besar}}',
            '{{%apt_obat}}'
        );

        // drops index for column `kd_satuan_besar`
        $this->dropIndex(
            '{{%idx-apt_obat-kd_satuan_besar}}',
            '{{%apt_obat}}'
        );

        $this->dropTable('{{%apt_obat}}');
    }
}
