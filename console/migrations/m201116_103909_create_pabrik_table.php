<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pabrik}}`.
 */
class m201116_103909_create_pabrik_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pabrik}}', [
            'id' => $this->primaryKey(),
            'account' => $this->string(15),
            'pabrik' => $this->string(40),
            'contact' => $this->string(30),
            'alamat' => $this->string(50),
            'kota' => $this->string(30),
            'telepon1' => $this->string(15),
            'telepon2' => $this->string(15),
            'fax' => $this->string(15),
            'kd_pos' => $this->string(5),
            'negara' => $this->string(20),
            'beg_bal' => $this->float(),
            'currents' => $this->float(),
            'cr_limit' => $this->decimal(18),
            'finance' => $this->decimal(18),
            'term' => $this->integer(),
            'pbf' => $this->integer(),
            'disc_faktur' => $this->float(),
            'disc_saldo' => $this->decimal(18),
            'norek' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pabrik}}');
    }
}
