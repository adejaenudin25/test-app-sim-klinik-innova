<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%provinsi}}`.
 */
class m201113_032356_create_provinsi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%provinsi}}', [
            'id' => $this->primaryKey(),
            'provinsi' => $this->string(100),
            'p_bsni' => $this->string(5),
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Aceh',
            'p_bsni'    => 'ID-AC'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Sumatra Utara',
            'p_bsni'    => 'ID-SU'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Sumatra Barat',
            'p_bsni'    => 'ID-SB'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Riau',
            'p_bsni'    => 'ID-RI'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Jambi',
            'p_bsni'    => 'ID-JA'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Sumatra Selatan',
            'p_bsni'    => 'ID-SS'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Bengkulu',
            'p_bsni'    => 'ID-BE'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Lampung',
            'p_bsni'    => 'ID-LA'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Kepulauan Bangka Belitung',
            'p_bsni'    => 'ID-BB'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Kepulauan Riau',
            'p_bsni'    => 'ID-KR'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Daerah Khusus Ibukota Jakarta',
            'p_bsni'    => 'ID-JB'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Jawa Barat',
            'p_bsni'    => 'ID-JB'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Jawa Tengah',
            'p_bsni'    => 'ID-JT'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Daerah Istimewa Yogyakarta',
            'p_bsni'    => 'ID-YO'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Jawa Timur',
            'p_bsni'    => 'ID-JI'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Banten',
            'p_bsni'    => 'ID-BT'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Bali',
            'p_bsni'    => 'ID-BA'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Nusa Tenggara Barat',
            'p_bsni'    => 'ID-NB'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Nusa Tenggara Timur',
            'p_bsni'    => 'ID-NT'
        ]);

        $this->insert('{{%provinsi}}', [    
            'provinsi' => 'Kalimantan Barat',
            'p_bsni'    => 'ID-KB'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Kalimantan Tengah',
            'p_bsni'    => 'ID-KT'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Kalimantan Selatan',
            'p_bsni'    => 'ID-KS'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Kalimantan Timur',
            'p_bsni'    => 'ID-KI'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Kalimantan Utara',
            'p_bsni'    => 'ID-KU'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Sulawesi Utara',
            'p_bsni'    => 'ID-SA'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Sulawesi Tengah',
            'p_bsni'    => 'ID-ST'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Sulawesi Selatan',
            'p_bsni'    => 'ID-SN'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Sulawesi Tenggara',
            'p_bsni'    => 'ID-SG'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Gorontalo',
            'p_bsni'    => 'ID-GO'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Sulawesi Barat',
            'p_bsni'    => 'ID-SR'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Maluku',
            'p_bsni'    => 'ID-MA'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Maluku Utara',
            'p_bsni'    => 'ID-MU'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Papua',
            'p_bsni'    => 'ID-PA'
        ]);

        $this->insert('{{%provinsi}}', [
            'provinsi' => 'Papua Barat',
            'p_bsni'    => 'ID-PB'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%provinsi}}');
    }
}
