<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kecamatan}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%kabupaten_kota}}`
 */
class m201113_102828_create_kecamatan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kecamatan}}', [
            'id' => $this->primaryKey(),
            'kd_kabkot' => $this->integer()->notNull(),
            'kecamatan' => $this->string(50),
        ]);

        // creates index for column `kd_kabkot`
        $this->createIndex(
            '{{%idx-kecamatan-kd_kabkot}}',
            '{{%kecamatan}}',
            'kd_kabkot'
        );

        // add foreign key for table `{{%kabupaten_kota}}`
        $this->addForeignKey(
            '{{%fk-kecamatan-kd_kabkot}}',
            '{{%kecamatan}}',
            'kd_kabkot',
            '{{%kabupaten_kota}}',
            'id',
            'CASCADE'
        );

        // add data row
        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Arongan Lambalek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Bubon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Johan Pahlawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Kaway XVI"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Meureubo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Pante Ceureumen (Pantai Ceuremen)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Panton Reu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Samatiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Sungai Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Woyla"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Woyla Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '1',
            'kecamatan' => "Woyla Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Babah Rot"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Blang Pidie"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Jeumpa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Kuala Batee"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Lembah Sabil"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Manggeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Setia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Susoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '2',
            'kecamatan' => "Tangan-Tangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Baitussalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Blank Bintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Darul Imarah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Darul Kamal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Darussalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Indrapuri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Ingin Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Kota Cot Glie (Kuta Cot Glie)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Kota Jantho"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Kota Malaka (Kuta Malaka)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Krueng Barona Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Kuta Baro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Lembah Seulawah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Leupung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Lhoknga (Lho'nga)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Lhoong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Mantasiek (Montasik)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Mesjid Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Peukan Bada"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Pulo Aceh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Seulimeum"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Simpang Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '3',
            'kecamatan' => "Suka Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Darul Hikmah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Indra Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Keude Panga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Krueng Sabee"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Pasie Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Sampoiniet"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Setia Bakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '4',
            'kecamatan' => "Teunom"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Bakongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Bakongan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Kluet Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Kluet Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Kluet Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Kluet Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Kota Bahagia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Labuhan Haji"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Labuhan Haji Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Labuhan Haji Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Meukek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Pasie Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Sama Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Sawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Tapak Tuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Trumon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Trumon Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '5',
            'kecamatan' => "Trumon Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Danau Paris"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Gunung Meriah (Mariah)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Kota Baharu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Kuala Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Pulau Banyak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Pulau Banyak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Simpang Kanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Singkil"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Singkil Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Singkohor"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '6',
            'kecamatan' => "Suro Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Banda Mulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Bandar Pusaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Bendahara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Karang Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Kejuruan Muda"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Kota Kuala Simpang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Manyak Payed"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Rantau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Sekerak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Seruway"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Tamiang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '7',
            'kecamatan' => "Tenggulun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Atu Lintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Bebesen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Bies"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Bintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Celala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Jagong Jeget"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Kebayakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Ketol"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Kute Panang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Linge"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Lut Tawar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Pegasing"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Rusip Antara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '8',
            'kecamatan' => "Silih Nara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Babul Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Babul Rahmah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Babussalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Badar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Bambel"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Bukit Tusam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Darul Hasanah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Deleng Pokhisen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Ketambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Lawe Alas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Lawe Bulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Lawe Sigala-Gala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Lawe Sumur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Leuser"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Semadam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '9',
            'kecamatan' => "Tanah Alas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Banda Alam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Birem Bayeun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Darul Aman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Darul Falah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Darul Iksan (Ihsan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Idi Rayeuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Idi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Idi Tunong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Indra Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Julok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Madat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Nurussalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Pante Bidari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Peudawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Peunaron"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Peureulak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Peureulak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Peureulak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Rantau Selamat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Ranto Peureulak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Serbajadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Simpang Jernih"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Simpang Ulim"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '10',
            'kecamatan' => "Sungai Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Baktiya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Baktiya Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Banda Baro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Cot Girek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Dewantara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Geuredong Pase"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Kuta Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Langkahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Lapang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Lhoksukon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Matangkuli"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Meurah Mulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Muara Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Nibong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Nisam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Nisam Antara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Paya Bakong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Pirak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Samudera"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Sawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Seunuddon (Seunudon)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Simpang Kramat (Keramat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Syamtalira Aron"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Syamtalira Bayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Tanah Jambo Aye"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Tanah Luas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '11',
            'kecamatan' => "Tanah Pasir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Bener Kelipah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Bukit"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Gajah Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Mesidah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Permata"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Pintu Rime Gayo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Syiah Utama"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Timang Gajah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '12',
            'kecamatan' => "Wih Pesam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Ganda Pura"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Jangka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Jeumpa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Jeunieb"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Juli"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Kota Juang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Kuta Blang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Pandrah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Peudada"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Peulimbang (Plimbang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Peusangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Peusangan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Peusangan Siblah Krueng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Samalanga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '13',
            'kecamatan' => "Simpang Mamplam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Blang Jerango"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Blang Kejeren"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Blang Pegayon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Dabun Gelang (Debun Gelang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Kuta Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Pantan Cuaca"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Pining (Pinding)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Putri Betung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Rikit Gaib"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Terangun (Terangon)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '14',
            'kecamatan' => "Teripe/Tripe Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Beutong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Beutong Ateuh Banggalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Darul Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Kuala Pesisir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Seunagan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Seunagan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Suka Makmue"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Tadu Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '15',
            'kecamatan' => "Tripa Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Batee"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Delima"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Geumpang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Glumpang Baro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Glumpang Tiga (Geulumpang Tiga)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Grong Grong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Indrajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Kembang Tanjong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Keumala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Kota Sigli"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Mane"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Mila"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Muara Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Mutiara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Mutiara Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Padang Tiji"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Peukan Baro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Pidie"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Simpang Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Tangse"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Tiro/Truseb"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '16',
            'kecamatan' => "Titeue"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Bandar Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Bandar Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Jangka Buya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Meurah Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Meureudu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Panteraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Trienggadeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '17',
            'kecamatan' => "Ulim"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Alapan (Alafan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Salang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Simeuleu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Simeuleu Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Simeuleu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Simeulue Cut"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Teluk Dalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Teupah Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Teupah Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '18',
            'kecamatan' => "Teupah Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Baiturrahman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Banda Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Jaya Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Kuta Alam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Kuta Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Lueng Bata"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Meuraxa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Syiah Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '19',
            'kecamatan' => "Ulee Kareng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '20',
            'kecamatan' => "Langsa Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '20',
            'kecamatan' => "Langsa Baro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '20',
            'kecamatan' => "Langsa Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '20',
            'kecamatan' => "Langsa Lama"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '20',
            'kecamatan' => "Langsa Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '21',
            'kecamatan' => "Banda Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '21',
            'kecamatan' => "Blang Mangat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '21',
            'kecamatan' => "Muara Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '21',
            'kecamatan' => "Muara Satu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '22',
            'kecamatan' => "Sukajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '22',
            'kecamatan' => "Sukakarya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '23',
            'kecamatan' => "Longkib"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '23',
            'kecamatan' => "Penanggalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '23',
            'kecamatan' => "Rundeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '23',
            'kecamatan' => "Simpang Kiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '23',
            'kecamatan' => "Sultan Daulat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Abiansemal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Kuta"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Kuta Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Kuta Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Mengwi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '24',
            'kecamatan' => "Petang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '25',
            'kecamatan' => "Bangli"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '25',
            'kecamatan' => "Kintamani"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '25',
            'kecamatan' => "Susut"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '25',
            'kecamatan' => "Tembuku"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Banjar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Buleleng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Busungbiu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Gerokgak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Kubutambahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Sawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Seririt"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Sukasada"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '26',
            'kecamatan' => "Tejakula"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Belah Batuh (Blahbatuh)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Gianyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Payangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Sukawati"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Tampak Siring"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Tegallalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '27',
            'kecamatan' => "Ubud"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '28',
            'kecamatan' => "Jembrana"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '28',
            'kecamatan' => "Melaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '28',
            'kecamatan' => "Mendoyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '28',
            'kecamatan' => "Negara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '28',
            'kecamatan' => "Pekutatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Abang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Bebandem"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Karang Asem"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Kubu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Manggis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Rendang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Selat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '29',
            'kecamatan' => "Sidemen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '30',
            'kecamatan' => "Banjarangkan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '30',
            'kecamatan' => "Dawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '30',
            'kecamatan' => "Klungkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '30',
            'kecamatan' => "Nusapenida"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Baturiti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Kediri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Kerambitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Marga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Penebel"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Pupuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Salemadeg Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Salemadeg Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Selemadeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '31',
            'kecamatan' => "Tabanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '32',
            'kecamatan' => "Denpasar Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '32',
            'kecamatan' => "Denpasar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '32',
            'kecamatan' => "Denpasar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '32',
            'kecamatan' => "Denpasar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Bakam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Belinyu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Mendo Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Merawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Pemali"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Puding Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Riau Silip"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '33',
            'kecamatan' => "Sungai Liat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Jebus"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Kelapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Mentok (Muntok)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Parittiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Simpang Teritip"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '34',
            'kecamatan' => "Tempilang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Air Gegas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Kepulauan Pongok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Lepar Pongok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Payung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Pulau Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Simpang Rimba"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Toboali"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '35',
            'kecamatan' => "Tukak Sadai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Koba"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Lubuk Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Namang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Pangkalan Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Simpang Katis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '36',
            'kecamatan' => "Sungai Selan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '37',
            'kecamatan' => "Badau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '37',
            'kecamatan' => "Membalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '37',
            'kecamatan' => "Selat Nasik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '37',
            'kecamatan' => "Sijuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '37',
            'kecamatan' => "Tanjung Pandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Damar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Dendang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Gantung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Kelapa Kampit"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Manggar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Simpang Pesak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '38',
            'kecamatan' => "Simpang Renggiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Bukit Intan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Gabek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Gerunggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Girimaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Pangkal Balam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Rangkui"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '39',
            'kecamatan' => "Taman Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Banjarsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Bayah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Bojongmanik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cibadak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cibeber"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cigemblong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cihara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cijaku"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cikulur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cileles"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cilograng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cimarga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cipanas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Cirinten"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Curugbitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Gunung Kencana"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Kalanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Lebakgedong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Leuwidamar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Maja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Malingping"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Muncang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Panggarangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Rangkasbitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Sajira"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Sobang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Wanasalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '40',
            'kecamatan' => "Warunggunung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Angsana"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Banjar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Bojong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cadasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Carita"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cibaliung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cibitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cigeulis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cikeudal (Cikedal)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cikeusik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cimanggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cimanuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cipeucang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Cisata"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Jiput"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Kaduhejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Karang Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Koroncong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Labuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Majasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Mandalawangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Mekarjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Menes"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Munjul"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Pagelaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Pandeglang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Panimbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Patia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Picung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Pulosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Saketi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Sindangresmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Sobang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Sukaresmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '41',
            'kecamatan' => "Sumur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Anyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Bandung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Baros"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Binuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Bojonegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Carenang (Cerenang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Cikande"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Cikeusal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Cinangka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Ciomas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Ciruas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Gunungsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Jawilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Kibin"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Kopo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Kragilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Kramatwatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Lebak Wangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Mancak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Pabuaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Padarincang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Pamarayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Petir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Pontang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Pulo Ampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Tanara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Tirtayasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Tunjung Teja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '42',
            'kecamatan' => "Waringin Kurung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Balaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Cikupa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Cisauk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Cisoka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Curug"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Gunung Kaler"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Jambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Jayanti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Kelapa Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Kemiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Kosambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Kresek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Kronjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Legok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Mauk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Mekar Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Pagedangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Pakuhaji"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Panongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Pasar Kemis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Rajeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Sepatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Sepatan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Sindang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Solear"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Sukadiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Sukamulya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Teluknaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '43',
            'kecamatan' => "Tigaraksa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Cibeber"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Cilegon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Citangkil"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Ciwandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Gerogol"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Jombang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Pulomerak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '44',
            'kecamatan' => "Purwakarta"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Cipocok Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Curug"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Kasemen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Serang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Taktakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '45',
            'kecamatan' => "Walantaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Batuceper"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Benda"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Cibodas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Ciledug"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Cipondoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Jatiuwung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Karang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Karawaci"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Larangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Neglasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Periuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Pinang (Penang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '46',
            'kecamatan' => "Tangerang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Ciputat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Ciputat Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Pamulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Pondok Aren"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Serpong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Serpong Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '47',
            'kecamatan' => "Setu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Air Nipis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Bunga Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Kedurang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Kedurang Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Kota Manna"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Manna"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Pasar Manna"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Pino"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Pinoraya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Seginim"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '48',
            'kecamatan' => "Ulu Manna"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Bang Haji"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Karang Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Merigi Kelindang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Merigi Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Pagar Jati"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Pematang Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Pondok Kelapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Pondok Kubang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Taba Penanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '49',
            'kecamatan' => "Talang Empat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Air Besi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Air Napal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Air Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Arga Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Arma Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Batik Nau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Enggano"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Giri Mulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Hulu Palik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Kerkap"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Ketahun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Lais"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Napal Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Padang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Putri Hijau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Tanjung Agung Palik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '50',
            'kecamatan' => "Ulok Kupai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Kaur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Kaur Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Kaur Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Kelam Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Kinal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Luas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Lungkang Kule"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Maje"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Muara Sahung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Nasal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Padang Guci Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Padang Guci Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Semidang Gumai (Gumay)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Tanjung Kemuning"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '51',
            'kecamatan' => "Tetap (Muara Tetap)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Bermani Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Kebawetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Kepahiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Merigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Muara Kemumu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Seberang Musi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Tebat Karai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '52',
            'kecamatan' => "Ujan Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Amen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Bingin Kuning"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Lebong Atas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Lebong Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Lebong Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Lebong Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Lebong Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Pelabai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Pinang Belapis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Rimbo Pengadang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Topos"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '53',
            'kecamatan' => "Uram Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Air Dikit"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Air Majunto"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Air Rami"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Ipuh (Muko-Muko Selatan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Kota Mukomuko (Mukomuko Utara)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Lubuk Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Malin Deman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Penarik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Pondok Suguh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Selagan Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Sungai Rumbai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Teramang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "Teras Terunjam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "V Koto"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '54',
            'kecamatan' => "XIV Koto"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Bermani Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Bermani Ulu Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Binduriang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Curup"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Curup Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Curup Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Curup Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Curup Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Kota Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Padang Ulak Tanding"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Selupu Rejang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Sindang Beliti Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Sindang Beliti Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Sindang Daratan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '55',
            'kecamatan' => "Sindang Kelingi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Air Periukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Ilir Talo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Lubuk Sandi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Seluma"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Seluma Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Seluma Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Seluma Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Seluma Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Semidang Alas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Semidang Alas Maras"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Sukaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Talo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Talo Kecil"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '56',
            'kecamatan' => "Ulu Talo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Gading Cempaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Kampung Melayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Muara Bangka Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Ratu Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Ratu Samban"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Selebar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Singaran Pati"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Sungai Serut"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '57',
            'kecamatan' => "Teluk Segara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Bambang Lipuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Banguntapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Bantul"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Dlingo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Imogiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Jetis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Kasihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Kretek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Pajangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Pandak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Piyungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Pleret"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Pundong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Sanden"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Sedayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Sewon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '58',
            'kecamatan' => "Srandakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Gedang Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Girisubo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Karangmojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Ngawen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Nglipar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Paliyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Panggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Patuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Playen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Ponjong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Purwosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Rongkop"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Sapto Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Semanu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Semin"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Tanjungsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Tepus"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '59',
            'kecamatan' => "Wonosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Galur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Girimulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Kalibawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Kokap"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Lendah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Nanggulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Panjatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Pengasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Samigaluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Sentolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Temon"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '60',
            'kecamatan' => "Wates"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Berbah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Cangkringan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Depok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Gamping"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Godean"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Kalasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Minggir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Mlati"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Moyudan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Ngaglik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Ngemplak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Pakem"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Prambanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Seyegan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Sleman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Tempel"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '61',
            'kecamatan' => "Turi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Danurejan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Gedong Tengen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Gondokusuman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Gondomanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Jetis"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Kotagede"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Kraton"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Mantrijeron"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Mergangsan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Ngampilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Pakualaman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Tegalrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Umbulharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '62',
            'kecamatan' => "Wirobrajan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '63',
            'kecamatan' => "Kepulauan Seribu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '63',
            'kecamatan' => "Kepulauan Seribu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Cengkareng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Grogol Petamburan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Kalideres"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Kebon Jeruk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Kembangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Palmerah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Taman Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '64',
            'kecamatan' => "Tambora"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Cempaka Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Gambir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Johar Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Kemayoran"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Menteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Sawah Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Senen"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '65',
            'kecamatan' => "Tanah Abang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Cilandak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Jagakarsa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Kebayoran Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Kebayoran Lama"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Mampang Prapatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Pancoran"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Pasar Minggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Pesanggrahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Setia Budi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '66',
            'kecamatan' => "Tebet"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Cakung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Cipayung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Ciracas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Duren Sawit"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Jatinegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Kramat Jati"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Makasar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Matraman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Pasar Rebo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '67',
            'kecamatan' => "Pulo Gadung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Cilincing"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Kelapa Gading"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Koja"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Pademangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Penjaringan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '68',
            'kecamatan' => "Tanjung Priok"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Botumoita"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Dulupi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Mananggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Paguyaman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Paguyaman Pantai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Tilamuta"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '69',
            'kecamatan' => "Wonosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bone"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bone Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bonepantai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Botu Pingge"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bulango Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bulango Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bulango Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bulango Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Bulawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Kabila"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Kabila Bone"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Pinogu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Suwawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Suwawa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Suwawa Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Suwawa Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Tapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '70',
            'kecamatan' => "Tilongkabila"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Asparaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Batudaa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Batudaa Pantai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Bilato"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Biluhu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Boliohuto (Boliyohuto)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Bongomeme"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Dungaliyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Limboto"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Limboto Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Mootilango"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Pulubala"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Tabongo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Telaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Telaga Biru"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Telaga Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Tibawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Tilango"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '71',
            'kecamatan' => "Tolangohula"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Anggrek"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Atinggola"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Biau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Gentuma Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Kwandang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Monano"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Ponelo Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Sumalata"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Sumalata Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Tolinggula"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '72',
            'kecamatan' => "Tomolito"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Buntulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Dengilo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Duhiadaa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Lemito"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Marisa"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Paguat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Patilanggio"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Popayato"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Popayato Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Popayato Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Randangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Taluditi (Taluduti)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '73',
            'kecamatan' => "Wanggarasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Dumbo Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Dungingi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Hulonthalangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Kota Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Kota Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Kota Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Kota Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Kota Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '74',
            'kecamatan' => "Sipatana"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Bajubang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Batin XXIV"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Maro Sebo Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Maro Sebo Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Mersam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Muara Bulian"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Muara Tembesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '75',
            'kecamatan' => "Pemayung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Bathin II Babeko"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Bathin II Pelayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Bathin III"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Bathin III Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Bungo Dani"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Jujuhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Jujuhan Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Limbur Lubuk Mengkuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Muko-Muko Batin VII"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Pasar Muara Bungo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Pelepat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Pelepat Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Rantau Pandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Rimbo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Tanah Sepenggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Tanah Sepenggal Lintas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '76',
            'kecamatan' => "Tanah Tumbuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Air Hangat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Air Hangat Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Air Hangat Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Batang Merangin"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Bukitkerman"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Danau Kerinci"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Depati Tujuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Gunung Kerinci"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Gunung Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Gunung Tujuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Kayu Aro"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Kayu Aro Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Keliling Danau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Sitinjau Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Siulak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '77',
            'kecamatan' => "Siulak Mukai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Bangko"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Bangko Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Batang Masumai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Jangkat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Lembah Masurai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Margo Tabir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Muara Siau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Nalo Tantan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Pamenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Pamenang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Pamenang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Pangkalan Jambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Renah Pembarap"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Renah Pemenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Sungai Manau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Sungai Tenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Lintas"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tabir Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '78',
            'kecamatan' => "Tiang Pumpung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Bahar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Bahar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Jambi Luar Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Kumpeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Kumpeh Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Maro Sebo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Mestong"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Sekernan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Sungai Bahar"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Sungai Gelam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '79',
            'kecamatan' => "Taman Rajo"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Air Hitam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Batang Asai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Bathin VIII (Batin VIII)"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Cermin Nan Gadang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Limun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Mandiangin"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Pauh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Pelawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Sarolangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '80',
            'kecamatan' => "Singkut"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Batang Asam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Betara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Bram Itam"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Kuala Betara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Merlung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Muara Papalik"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Pengabuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Renah Mendaluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Seberang Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Senyerang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Tebing Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Tungkal Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '81',
            'kecamatan' => "Tungkal Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Berbak"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Dendang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Geragai"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Kuala Jambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Mendahara"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Mendahara Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Muara Sabak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Muara Sabak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Nipah Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Rantau Rasau"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '82',
            'kecamatan' => "Sadu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Muara Tabir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Rimbo Bujang"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Rimbo Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Rimbo Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Serai Serumpun"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Sumay"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Tebo Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Tebo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Tebo Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "Tengah Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "VII Koto"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '83',
            'kecamatan' => "VII Koto Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '84',
            'kecamatan' => "Danau Teluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '84',
            'kecamatan' => "Jambi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '84',
            'kecamatan' => "Jambi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '84',
            'kecamatan' => "Jelutung"
        ]);

        $this->insert('{{%kecamatan}}', [
            'kd_kabkot' => '84',
            'kecamatan' => "Kota Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "84",
            "kecamatan" => "Pasar Jambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "84",
            "kecamatan" => "Pelayangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "84",
            "kecamatan" => "Telanaipura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Hamparan Rawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Koto Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Kumun Debai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Pesisir Bukit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Pondok Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Sungai Bungkal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Sungai Penuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "85",
            "kecamatan" => "Tanah Kampung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Arjasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Baleendah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Banjaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Bojongsoang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cangkuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cicalengka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cikancung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cilengkrang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cileunyi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cimaung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Cimeunyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Ciparay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Ciwidey"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Dayeuhkolot"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Ibun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Katapang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Kertasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Kutawaringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Majalaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Margaasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Margahayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Nagreg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Pacet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Pameungpeuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Pangalengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Paseh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Pasirjambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Ranca Bali"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Rancaekek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Solokan Jeruk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "86",
            "kecamatan" => "Soreang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Batujajar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cihampelas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cikalong Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cililin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cipatat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cipeundeuy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cipongkor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Cisarua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Gununghalu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Lembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Ngamprah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Padalarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Parongpong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Rongga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Saguling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "87",
            "kecamatan" => "Sindangkerta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Babelan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Bojongmangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cabangbungin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cibarusah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cibitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cikarang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cikarang Pusat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cikarang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cikarang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Cikarang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Karangbahagia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Kedung Waringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Muara Gembong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Pebayuran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Serang Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Setu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Sukakarya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Sukatani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Sukawangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Tambelang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Tambun Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Tambun Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "88",
            "kecamatan" => "Tarumajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Babakan Madang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Bojonggede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Caringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cariu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Ciampea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Ciawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cibinong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cibungbulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cigombong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cigudeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cijeruk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cileungsi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Ciomas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Cisarua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Ciseeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Citeureup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Dramaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Gunung Putri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Gunung Sindur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Jasinga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Jonggol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Kemang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Klapanunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Leuwiliang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Leuwisadeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Megamendung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Nanggung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Pamijahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Parung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Parung Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Ranca Bungur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Rumpin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Sukajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Sukamakmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Sukaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Tajurhalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Tamansari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Tanjungsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Tenjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "89",
            "kecamatan" => "Tenjolaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Banjarsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Baregbeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Ciamis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cidolog"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cihaurbeuti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cijeungjing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cikoneng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cimaragas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cipaku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Cisaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Jatinagara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Kawali"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Lakbok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Lumbung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Pamarican"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Panawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Panjalu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Panumbangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Purwadadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Rajadesa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Rancah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Sadananya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Sindangkasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Sukadana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Sukamantri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "90",
            "kecamatan" => "Tambaksari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Agrabinta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Bojongpicung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Campaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Campaka Mulya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cianjur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cibeber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cibinong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cidaun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cijati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cikadu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cikalongkulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cilaku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cipanas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Ciranjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Cugenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Gekbrong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Haurwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Kadupandak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Karangtengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Leles"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Mande"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Naringgul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Pacet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Pagelaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Pasirkuda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Sindangbarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Sukaluyu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Sukanagara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Sukaresmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Takokak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Tanggeung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "91",
            "kecamatan" => "Warungkondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Arjawinangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Astanajapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Babakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Beber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Ciledug"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Ciwaringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Depok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Dukupuntang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Gebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Gegesik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Gempol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Greged (Greget)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Gunung Jati (Cirebon Utara)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Jamblang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Kaliwedi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Kapetakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Karangsembung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Karangwareng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Kedawung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Klangenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Lemahabang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Losari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Mundu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Pabedilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Pabuaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Palimanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Pangenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Panguragan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Pasaleman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Plered"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Plumbon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Sedong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Sumber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Suranenggala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Susukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Susukan Lebak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Talun (Cirebon Selatan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Tengah Tani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Waled"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "92",
            "kecamatan" => "Weru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Banjarwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Banyuresmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Bayongbong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Blubur Limbangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Bungbulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Caringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cibalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cibatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cibiuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cigedug"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cihurip"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cikajang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cikelet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cilawu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cisewu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cisompet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Cisurupan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Garut Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Kadungora"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Karangpawitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Karangtengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Kersamanah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Leles"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Leuwigoong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Malangbong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Mekarmukti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Pakenjeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Pameungpeuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Pamulihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Pangatikan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Pasirwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Peundeuy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Samarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Selaawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Singajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Sucinaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Sukaresmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Sukawening"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Talegong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Tarogong Kaler"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Tarogong Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "93",
            "kecamatan" => "Wanaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Anjatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Arahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Balongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Bangodua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Bongas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Cantigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Cikedung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Gabuswetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Gantar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Haurgeulis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Indramayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Jatibarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Juntinyuat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Kandanghaur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Karangampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Kedokan Bunder"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Kertasemaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Krangkeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Kroya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Lelea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Lohbener"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Losarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Pasekan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Patrol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Sindang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Sliyeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Sukagumiwang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Sukra"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Trisi/Terisi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Tukdana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "94",
            "kecamatan" => "Widasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Banyusari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Batujaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Ciampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Cibuaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Cikampek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Cilamaya Kulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Cilamaya Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Cilebar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Jatisari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Jayakerta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Karawang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Karawang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Klari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Kotabaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Kutawaluya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Lemahabang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Majalaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Pakisjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Pangkalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Pedes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Purwasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Rawamerta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Rengasdengklok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Talagasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Tegalwaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Telukjambe Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Telukjambe Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Tempuran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Tirtajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "95",
            "kecamatan" => "Tirtamulya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Ciawigebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cibeureum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cibingbin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cidahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cigandamekar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cigugur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cilebak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cilimus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cimahi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Ciniru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Cipicung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Ciwaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Darma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Garawangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Hantara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Jalaksana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Japara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Kadugede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Kalimanggis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Karangkancana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Kramat Mulya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Kuningan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Lebakwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Luragung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Maleber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Mandirancan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Nusaherang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Pancalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Pasawahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Selajambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Sindangagung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "96",
            "kecamatan" => "Subang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Argapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Banjaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Bantarujeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Cigasong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Cikijing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Cingambul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Dawuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Jatitujuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Jatiwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Kadipaten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Kasokandel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Kertajati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Lemahsugih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Leuwimunding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Ligung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Maja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Majalengka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Malausma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Palasah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Panyingkiran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Rajagaluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Sindang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Sindangwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Sukahaji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Sumberjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "97",
            "kecamatan" => "Talaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Cigugur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Cijulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Cimerak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Kalipucang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Langkaplancar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Mangunjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Padaherang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Pangandaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Parigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "98",
            "kecamatan" => "Sidamulih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Babakancikao"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Bojong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Bungursari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Campaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Cibatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Darangdan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Jatiluhur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Kiarapedes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Maniis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Pasawahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Plered"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Pondoksalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Purwakarta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Sukasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Sukatani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Tegal Waru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "99",
            "kecamatan" => "Wanayasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Binong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Blanakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Ciasem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Ciater"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cibogo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cijambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cikaum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cipeundeuy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cipunagara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Cisalak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Compreng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Dawuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Jalancagak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Kalijati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Kasomalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Legonkulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pabuaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pagaden"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pagaden Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pamanukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Patokbeusi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Purwadadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pusakajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Pusakanagara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Sagalaherang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Serangpanjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Subang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Sukasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Tambakdahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "100",
            "kecamatan" => "Tanjungsiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Bantargadung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Bojong Genteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Caringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Ciambar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cibadak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cibitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cicantayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cicurug"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cidadap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cidahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cidolog"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Ciemas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cikakak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cikembar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cikidang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cimanggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Ciracap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cireunghas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cisaat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Cisolok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Curugkembar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Geger Bitung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Gunungguruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Jampang Kulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Jampang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Kabandungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Kadudampit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Kalapa Nunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Kalibunder"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Kebonpedes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Lengkong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Nagrak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Nyalindung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Pabuaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Parakan Salak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Parung Kuda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Pelabuhanratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Purabaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Sagaranten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Simpenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Sukabumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Sukalarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Sukaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Surade"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Tegalbuleud"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Waluran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "101",
            "kecamatan" => "Warungkiara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Buahdua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Cibugel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Cimalaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Cimanggung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Cisarua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Cisitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Conggeang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Darmaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Ganeas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Jatigede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Jatinangor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Jatinunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Pamulihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Paseh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Rancakalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Situraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Sukasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Sumedang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Sumedang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Surian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Tanjungkerta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Tanjungmedar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Tanjungsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Tomo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Ujungjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "102",
            "kecamatan" => "Wado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Bantarkalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Bojongasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Bojonggambir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Ciawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cibalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cigalontang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cikalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cikatomas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cineam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cipatujah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Cisayong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Culamega"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Gunung Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Jamanis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Jatiwaras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Kadipaten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Karang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Karangnunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Leuwisari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Mangunreja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Manonjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Padakembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Pagerageung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Pancatengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Parungponteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Puspahiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Rajapolah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Salawu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Salopa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sariwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Singaparna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sodonghilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sukahening"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sukaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sukarame"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sukaratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Sukaresik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Tanjungjaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "103",
            "kecamatan" => "Taraju"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Andir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Antapani (Cicadas)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Arcamanik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Astana Anyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Babakan Ciparay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Bandung Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Bandung Kulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Bandung Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Batununggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Bojongloa Kaler"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Bojongloa Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Buahbatu (Margacinta)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cibeunying Kaler"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cibeunying Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cibiru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cicendo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cidadap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Cinambo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Coblong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Gedebage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Kiaracondong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Lengkong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Mandalajati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Panyileukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Rancasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Regol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Sukajadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Sukasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Sumur Bandung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "104",
            "kecamatan" => "Ujung Berung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "105",
            "kecamatan" => "Banjar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "105",
            "kecamatan" => "Langensari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "105",
            "kecamatan" => "Pataruman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "105",
            "kecamatan" => "Purwaharja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Bantar Gebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Bekasi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Bekasi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Bekasi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Bekasi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Jati Sampurna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Jatiasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Medan Satria"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Mustika Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Pondok Gede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Pondok Melati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "106",
            "kecamatan" => "Rawalumbu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Bogor Barat - Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Bogor Selatan - Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Bogor Tengah - Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Bogor Timur - Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Bogor Utara - Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "107",
            "kecamatan" => "Tanah Sereal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "108",
            "kecamatan" => "Cimahi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "108",
            "kecamatan" => "Cimahi Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "108",
            "kecamatan" => "Cimahi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "109",
            "kecamatan" => "Harjamukti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "109",
            "kecamatan" => "Kejaksan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "109",
            "kecamatan" => "Kesambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "109",
            "kecamatan" => "Lemahwungkuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "109",
            "kecamatan" => "Pekalipan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Beji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Bojongsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Cilodong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Cimanggis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Cinere"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Cipayung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Limo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Pancoran Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Sawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Sukmajaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "110",
            "kecamatan" => "Tapos"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Baros"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Cibeureum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Cikole"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Citamiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Gunung Puyuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Lembursitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "111",
            "kecamatan" => "Warudoyong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Bungursari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Cibeureum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Cihideung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Cipedes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Indihiang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Kawalu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Mangkubumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Purbaratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Tamansari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "112",
            "kecamatan" => "Tawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Banjarmangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Banjarnegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Batur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Bawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Kalibening"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Karangkobar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Madukara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Mandiraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Pagedongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Pagentan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Pandanarum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Pejawaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Punggelan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Purwonegoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Purworejo Klampok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Rakit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Sigaluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Susukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Wanadadi (Wonodadi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "113",
            "kecamatan" => "Wanayasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Ajibarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Banyumas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Baturaden"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Cilongok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Gumelar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Jatilawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Kalibagor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Karanglewas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Kebasen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Kedung Banteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Kembaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Kemranjen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Lumbir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Patikraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Pekuncen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Purwojati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Purwokerto Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Purwokerto Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Purwokerto Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Purwokerto Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Rawalo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Sokaraja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Somagede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Sumbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Sumpiuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Tambak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "114",
            "kecamatan" => "Wangon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Banyuputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Batang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Bawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Blado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Gringsing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Kandeman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Limpung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Pecalungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Reban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Subah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Tersono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Tulis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Warungasem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "115",
            "kecamatan" => "Wonotunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Banjarejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Blora kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Bogorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Cepu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Japah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Jati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Jepon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Jiken"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Kedungtuban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Kradenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Kunduran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Ngawen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Randublatung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Sambong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Todanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "116",
            "kecamatan" => "Tunjungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Ampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Andong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Banyudono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Boyolali"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Cepogo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Juwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Karanggede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Kemusu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Klego"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Mojosongo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Musuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Ngemplak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Nogosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Sambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Sawit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Selo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Simo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Teras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "117",
            "kecamatan" => "Wonosegoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Banjarharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Bantarkawung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Brebes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Bulakamba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Bumiayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Jatibarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Kersana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Ketanggungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Larangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Losari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Paguyangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Salem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Sirampog"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Songgom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Tonjong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "118",
            "kecamatan" => "Wanasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Adipala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Bantarsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Binangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Cilacap Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Cilacap Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Cilacap Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Cimanggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Cipari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Dayeuhluhur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Gandrungmangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Jeruklegi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Kampung Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Karangpucung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Kawunganten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Kedungreja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Kesugihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Kroya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Majenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Maos"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Nusawungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Patimuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Sampang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Sidareja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "119",
            "kecamatan" => "Wanareja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Bonang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Demak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Dempet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Gajah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Guntur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Karang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Karangawen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Kebonagung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Mijen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Mranggen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Sayung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Wedung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "120",
            "kecamatan" => "Wonosalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Brati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Gabus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Geyer"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Godong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Grobogan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Gubug"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Karangrayung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Kedungjati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Klambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Kradenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Ngaringan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Penawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Pulokulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Purwodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Tanggungharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Tawangharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Tegowanu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Toroh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "121",
            "kecamatan" => "Wirosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Bangsri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Batealit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Donorojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Jepara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Kalinyamatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Karimunjawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Kedung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Keling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Kembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Mayong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Mlonggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Nalumsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Pakis Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Pecangaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Tahunan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "122",
            "kecamatan" => "Welahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Colomadu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Gondangrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jaten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jatipuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jatiyoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jenawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jumantono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Jumapolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Karangpandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Kebakkramat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Kerjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Matesih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Mojogedang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Ngargoyoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Tasikmadu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "123",
            "kecamatan" => "Tawangmangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Adimulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Alian/Aliyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Ambal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Ayah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Bonorowo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Buayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Buluspesantren"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Gombong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Karanggayam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Karangsambung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Kebumen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Klirong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Kutowinangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Kuwarasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Mirit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Padureso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Pejagoan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Petanahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Poncowarno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Prembun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Puring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Rowokele"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Sadang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Sempor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "124",
            "kecamatan" => "Sruweng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Boja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Brangsong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Cepiring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Gemuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Kaliwungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Kaliwungu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Kangkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Kendal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Limbangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Ngampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Pagerruyung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Patean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Patebon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Pegandon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Plantungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Ringinarum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Rowosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Singorojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Sukorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "125",
            "kecamatan" => "Weleri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Bayat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Cawas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Ceper"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Delanggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Gantiwarno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Jatinom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Jogonalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Juwiring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Kalikotes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Karanganom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Karangdowo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Karangnongko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Kebonarum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Kemalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Klaten Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Klaten Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Klaten Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Manisrenggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Ngawen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Pedan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Polanharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Prambanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Trucuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Tulung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Wedi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "126",
            "kecamatan" => "Wonosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Bae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Dawe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Gebog"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Jati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Jekulo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Kaliwungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Kudus Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Mejobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "127",
            "kecamatan" => "Undaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Bandongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Borobudur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Candimulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Dukun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Grabag"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Kajoran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Kaliangkrik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Mertoyudan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Mungkid"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Muntilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Ngablak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Ngluwar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Pakis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Salam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Salaman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Sawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Secang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Srumbung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Tegalrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Tempuran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "128",
            "kecamatan" => "Windusari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Batangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Cluwak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Dukuhseti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Gabus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Gembong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Gunungwungkal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Jaken"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Jakenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Juwana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Kayen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Margorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Margoyoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Pati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Pucakwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Sukolilo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Tambakromo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Tayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Tlogowungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Trangkil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Wedarijaksa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "129",
            "kecamatan" => "Winong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Bojong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Buaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Doro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Kajen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Kandangserang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Karangdadap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Kedungwuni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Kesesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Lebakbarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Paninggaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Petungkriono/Petungkriyono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Siwalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Sragi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Talun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Tirto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Wiradesa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Wonokerto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "130",
            "kecamatan" => "Wonopringgo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Ampelgading"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Bantarbolang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Belik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Bodeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Comal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Moga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Pemalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Petarukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Pulosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Randudongkal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Taman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Ulujami"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Warungpring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "131",
            "kecamatan" => "Watukumpul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Bobotsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Bojongsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Bukateja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kaligondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kalimanah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Karangjambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Karangmoncol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Karangreja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kejobong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kemangkon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kertanegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Kutasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Mrebet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Padamara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Pengadegan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Purbalingga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "132",
            "kecamatan" => "Rembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Bagelen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Banyuurip"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Bayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Bener"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Bruno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Butuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Gebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Grabag"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Kaligesing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Kemiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Kutoarjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Loano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Ngombol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Pituruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Purwodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "133",
            "kecamatan" => "Purworejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Bulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Gunem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Kaliori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Kragan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Lasem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Pamotan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Pancur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Rembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sale"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sedan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sluke"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "134",
            "kecamatan" => "Sumber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Ambarawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Bancak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Bandungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Banyubiru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Bawen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Bergas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Bringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Getasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Jambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Kaliwungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Pabelan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Pringapus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Sumowono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Suruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Susukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Tengaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Tuntang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Ungaran Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "135",
            "kecamatan" => "Ungaran Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Gemolong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Gesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Gondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Jenar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Kalijambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Karangmalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Kedawung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Masaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Miri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Mondokan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Ngrampal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Plupuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sambirejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sambung Macan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sidoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sragen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sukodono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Sumberlawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Tangen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "136",
            "kecamatan" => "Tanon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Baki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Bendosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Bulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Gatak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Grogol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Kartasura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Mojolaban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Nguter"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Polokarto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Sukoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Tawangsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "137",
            "kecamatan" => "Weru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Adiwerna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Balapulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Bojong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Bumijawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Dukuhturi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Dukuhwaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Jatinegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Kedung Banteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Kramat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Lebaksiu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Margasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Pagerbarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Pangkah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Slawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Surodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Talang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Tarub"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "138",
            "kecamatan" => "Warurejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Bansari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Bejen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Bulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Candiroto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Gemawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Jumo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Kaloran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Kandangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Kedu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Kledung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Kranggan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Ngadirejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Parakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Pringsurat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Selopampang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Temanggung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Tembarak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Tlogomulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Tretep"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "139",
            "kecamatan" => "Wonoboyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Baturetno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Batuwarno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Bulukerto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Eromoko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Girimarto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Giritontro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Giriwoyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Jatipurno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Jatiroto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Jatisrono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Karangtengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Kismantoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Manyaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Ngadirojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Nguntoronadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Paranggupito"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Pracimantoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Puhpelem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Purwantoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Selogiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Sidoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Slogohimo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Tirtomoyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Wonogiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "140",
            "kecamatan" => "Wuryantoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Garung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kalibawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kalikajar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kaliwiro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kejajar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kepil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Kertek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Leksono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Mojotengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Sapuran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Selomerto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Sukoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Wadaslintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Watumalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "141",
            "kecamatan" => "Wonosobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "142",
            "kecamatan" => "Magelang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "142",
            "kecamatan" => "Magelang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "142",
            "kecamatan" => "Magelang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "143",
            "kecamatan" => "Pekalongan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "143",
            "kecamatan" => "Pekalongan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "143",
            "kecamatan" => "Pekalongan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "143",
            "kecamatan" => "Pekalongan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "144",
            "kecamatan" => "Argomulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "144",
            "kecamatan" => "Sidomukti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "144",
            "kecamatan" => "Sidorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "144",
            "kecamatan" => "Tingkir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Banyumanik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Candisari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Gajah Mungkur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Gayamsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Genuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Gunungpati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Mijen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Ngaliyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Pedurungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Semarang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Semarang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Semarang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Semarang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Semarang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Tembalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "145",
            "kecamatan" => "Tugu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "146",
            "kecamatan" => "Banjarsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "146",
            "kecamatan" => "Jebres"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "146",
            "kecamatan" => "Laweyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "146",
            "kecamatan" => "Pasar Kliwon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "146",
            "kecamatan" => "Serengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "147",
            "kecamatan" => "Margadana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "147",
            "kecamatan" => "Tegal Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "147",
            "kecamatan" => "Tegal Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "147",
            "kecamatan" => "Tegal Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Arosbaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Bangkalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Blega"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Burneh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Galis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Geger"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Kamal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Klampis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Kokop"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Konang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Kwanyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Labang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Modung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Sepulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Socah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Tanah Merah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Tanjungbumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "148",
            "kecamatan" => "Tragah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Bangorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Banyuwangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Cluring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Gambiran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Genteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Giri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Glagah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Glenmore"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Kabat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Kalibaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Kalipuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Licin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Muncar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Pesanggaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Purwoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Rogojampi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Sempu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Siliragung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Singojuruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Songgon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Srono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Tegaldlimo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Tegalsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "149",
            "kecamatan" => "Wongsorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Bakung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Binangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Doko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Gandusari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Garum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Kademangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Kanigoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Kesamben"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Nglegok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Panggungrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Ponggok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Sanan Kulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Selopuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Selorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Srengat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Sutojayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Talun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Udanawu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Wates"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Wlingi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Wonodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "150",
            "kecamatan" => "Wonotirto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Balen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Baureno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Bojonegoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Bubulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Dander"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Gayam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Gondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kalitidu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kanor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kapas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kasiman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kedewan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kedungadem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Kepoh Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Malo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Margomulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Ngambon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Ngasem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Ngraho"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Padangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Purwosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Sekar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Sugihwaras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Sukosewu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Sumberrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Tambakrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Temayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "151",
            "kecamatan" => "Trucuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Binakal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Bondowoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Botolinggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Cermee"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Curahdami"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Grujugan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Jambe Sari Darus Sholah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Klabang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Maesan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Pakem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Prajekan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Pujer"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Sempol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Sukosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Sumber Wringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Taman Krocok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Tamanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Tapen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Tegalampel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Tenggarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Tlogosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Wonosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "152",
            "kecamatan" => "Wringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Balong Panggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Benjeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Bungah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Cerme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Driyorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Duduk Sampeyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Dukun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Gresik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Kebomas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Kedamean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Manyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Menganti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Panceng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Sangkapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Sidayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Tambak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Ujung Pangkah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "153",
            "kecamatan" => "Wringin Anom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Ajung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Ambulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Arjasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Balung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Bangsalsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Gumuk Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Jelbuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Jenggawah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Jombang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Kalisat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Kaliwates"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Kencong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Ledokombo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Mayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Mumbulsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Pakusari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Panti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Patrang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Puger"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Rambipuji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Semboro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Silo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Sukorambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Sukowono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Sumber Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Sumber Jambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Sumber Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Tanggul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Tempurejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Umbulsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "154",
            "kecamatan" => "Wuluhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Bandar Kedung Mulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Bareng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Diwek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Gudo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Jogoroto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Jombang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Kabuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Kesamben"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Kudu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Megaluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Mojoagung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Mojowarno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Ngoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Ngusikan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Perak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Peterongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Plandaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Ploso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Sumobito"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Tembelang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "155",
            "kecamatan" => "Wonosalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Badas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Banyakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Gampengrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Grogol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Gurah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kandangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kandat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kayen Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kepung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Kunjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Mojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Ngadiluwih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Ngancar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Ngasem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Pagu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Papar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Pare"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Plemahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Plosoklaten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Puncu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Purwoasri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Ringinrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Semen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Tarokan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "156",
            "kecamatan" => "Wates"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Babat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Bluluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Brondong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Deket"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Glagah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Kalitengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Karang Geneng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Karangbinangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Kedungpring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Kembangbahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Lamongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Laren"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Maduran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Mantup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Modo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Ngimbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Paciran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Pucuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sambeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sarirejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sekaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Solokuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sugio"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sukodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Sukorame"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Tikung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "157",
            "kecamatan" => "Turi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Candipuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Gucialit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Jatiroto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Kedungjajang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Klakah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Kunir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Lumajang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Pasirian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Pasrujambe/Pasujambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Pronojiwo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Randuagung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Ranuyoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Rowokangkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Senduro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Sukodono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Sumbersuko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Tekung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Tempeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Tempursari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "158",
            "kecamatan" => "Yosowilangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Balerejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Dagangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Dolopo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Geger"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Gemarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Jiwan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Kare"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Kebonsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Madiun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Mejayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Pilangkenceng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Saradan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Sawahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Wonoasri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "159",
            "kecamatan" => "Wungu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Bendo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Karangrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Karas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Kartoharjo (Kertoharjo)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Kawedanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Lembeyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Magetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Maospati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Ngariboyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Nguntoronadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Panekan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Parang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Plaosan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Poncol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Sidorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Sukomoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "160",
            "kecamatan" => "Takeran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Ampelgading"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Bantur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Bululawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Dampit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Dau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Donomulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Gedangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Gondanglegi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Jabung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Kalipare"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Karangploso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Kasembon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Kepanjen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Kromengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Lawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Ngajung (Ngajum)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Ngantang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Pagak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Pagelaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Pakis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Pakisaji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Poncokusumo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Pujon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Singosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Sumbermanjing Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Sumberpucung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Tajinan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Tirtoyudo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Tumpang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Turen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Wagir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Wajak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "161",
            "kecamatan" => "Wonosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Bangsal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Dawar Blandong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Dlanggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Gedeg"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Gondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Jatirejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Jetis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Kemlagi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Kutorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Mojoanyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Mojosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Ngoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Pacet"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Pungging"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Puri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Sooko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Trawas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "162",
            "kecamatan" => "Trowulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Bagor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Baron"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Berbek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Gondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Jatikalen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Kertosono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Lengkong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Loceret"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Nganjuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Ngetos"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Ngluyu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Ngronggot"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Pace"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Patianrowo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Prambon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Rejoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Sawahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Sukomoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Tanjunganom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "163",
            "kecamatan" => "Wilangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Bringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Geneng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Gerih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Jogorogo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Karanganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Karangjati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Kasreman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Kedunggalar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Kendal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Kwadungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Mantingan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Ngawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Ngrambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Padas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Pangkur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Paron"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Pitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Sine"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "164",
            "kecamatan" => "Widodaren"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Arjosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Donorojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Kebon Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Nawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Ngadirojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Pacitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Pringkuku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Punung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Sudimoro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Tegalombo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "165",
            "kecamatan" => "Tulakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Batumarmar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Galis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Kadur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Larangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Pademawu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Pakong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Palenga'an"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Pamekasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Pasean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Pegantenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Proppo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Tlanakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "166",
            "kecamatan" => "Waru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Bangil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Beji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Gempol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Gondang Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Grati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Kejayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Kraton"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Lekok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Lumbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Nguling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Pandaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Pasrepan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Pohjentrek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Prigen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Purwodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Purwosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Puspo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Rejoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Rembang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Sukorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Tosari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Tutur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Winongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "167",
            "kecamatan" => "Wonorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Babadan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Badegan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Balong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Bungkal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Jambon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Jenangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Jetis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Kauman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Mlarak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Ngebel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Ngrayun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Ponorogo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Pudak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Pulung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Sambit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Sampung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Sawoo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Siman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Slahung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Sooko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "168",
            "kecamatan" => "Sukorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Bantaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Banyu Anyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Besuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Dringu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Gading"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Gending"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Kota Anyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Kraksaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Krejengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Krucil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Kuripan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Leces"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Lumbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Maron"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Paiton"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Pajarakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Pakuniran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Sukapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Sumber"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Sumberasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Tegal Siwalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Tiris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Tongas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "169",
            "kecamatan" => "Wonomerto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Banyuates"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Camplong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Jrengik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Karang Penang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Kedungdung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Ketapang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Omben"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Pangarengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Robatal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Sampang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Sokobanah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Sreseh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Tambelangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "170",
            "kecamatan" => "Torjun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Balongbendo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Buduran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Candi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Gedangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Jabon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Krembung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Krian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Porong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Prambon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Sedati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Sidoarjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Sukodono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Taman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Tanggulangin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Tarik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Tulangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Waru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "171",
            "kecamatan" => "Wonoayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Arjasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Asembagus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Banyuglugur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Banyuputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Besuki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Bungatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Jangkar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Jatibanteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Kapongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Kendit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Mangaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Mlandingan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Panarukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Panji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Situbondo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Suboh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "172",
            "kecamatan" => "Sumbermalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Ambunten"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Arjasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Batang Batang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Batuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Batuputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Bluto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Dasuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Dungkek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Ganding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Gapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Gayam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Gili Ginting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Guluk Guluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Kalianget"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Kangayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Kota Sumenep"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Lenteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Manding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Masalembu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Nonggunong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Pasongsongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Pragaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Ra'as"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Rubaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Sapeken"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Saronggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "173",
            "kecamatan" => "Talango"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Bendungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Dongko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Durenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Gandusari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Kampak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Karangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Munjungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Panggul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Pogalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Pule"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Suruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Trenggalek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Tugu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "174",
            "kecamatan" => "Watulimo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Bancar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Bangilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Grabagan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Jatirogo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Jenu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Kenduruan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Kerek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Merakurak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Montong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Palang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Parengan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Plumpang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Rengel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Semanding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Senori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Singgahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Soko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Tambakboyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Tuban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "175",
            "kecamatan" => "Widang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Bandung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Besuki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Boyolangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Campur Darat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Gondang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Kalidawir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Karang Rejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Kauman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Kedungwaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Ngantru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Ngunut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Pagerwojo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Pakel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Pucanglaban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Rejotangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Sendang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Sumbergempol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Tanggung Gunung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "176",
            "kecamatan" => "Tulungagung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "177",
            "kecamatan" => "Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "177",
            "kecamatan" => "Bumiaji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "177",
            "kecamatan" => "Junrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "178",
            "kecamatan" => "Kepanjen Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "178",
            "kecamatan" => "Sanan Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "178",
            "kecamatan" => "Sukorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "179",
            "kecamatan" => "Kediri Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "179",
            "kecamatan" => "Mojoroto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "179",
            "kecamatan" => "Pesantren"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "180",
            "kecamatan" => "Kartoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "180",
            "kecamatan" => "Manguharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "180",
            "kecamatan" => "Taman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "181",
            "kecamatan" => "Blimbing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "181",
            "kecamatan" => "Kedungkandang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "181",
            "kecamatan" => "Klojen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "181",
            "kecamatan" => "Lowokwaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "181",
            "kecamatan" => "Sukun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "182",
            "kecamatan" => "Magersari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "182",
            "kecamatan" => "Prajurit Kulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "183",
            "kecamatan" => "Bugul Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "183",
            "kecamatan" => "Gadingrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "183",
            "kecamatan" => "Panggungrejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "183",
            "kecamatan" => "Purworejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "184",
            "kecamatan" => "Kademangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "184",
            "kecamatan" => "Kanigaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "184",
            "kecamatan" => "Kedopok (Kedopak)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "184",
            "kecamatan" => "Mayangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "184",
            "kecamatan" => "Wonoasih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Asemrowo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Benowo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Bubutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Bulak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Dukuh Pakis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Gayungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Genteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Gubeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Gununganyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Jambangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Karangpilang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Kenjeran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Krembangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Lakarsantri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Mulyorejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Pabean Cantikan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Pakal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Rungkut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Sambikerep"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Sawahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Semampir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Simokerto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Sukolilo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Sukomanunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Tambaksari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Tandes"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Tegalsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Tenggilis Mejoyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Wiyung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Wonocolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "185",
            "kecamatan" => "Wonokromo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Bengkayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Capkala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Jagoi Babang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Ledo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Lembah Bawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Lumar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Monterado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Samalantan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Sanggau Ledo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Seluas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Siding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Sungai Betung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Sungai Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Sungai Raya Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Suti Semarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Teriak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "186",
            "kecamatan" => "Tujuh Belas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Badau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Batang Lupar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Bika"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Boyan Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Bunut Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Bunut Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Embaloh Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Embaloh Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Empanang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Hulu Gurung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Jongkong (Jengkong)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Kalis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Mentebah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Pengkadan (Batu Datu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Puring Kencana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Putussibau Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Putussibau Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Seberuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Selimbau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Semitau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Silat Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Silat Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "187",
            "kecamatan" => "Suhaid"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Kepulauan Karimata"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Pulau Maya (Pulau Maya Karimata)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Seponti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Simpang Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Sukadana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "188",
            "kecamatan" => "Teluk Batang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Air Upas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Benua Kayong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Delta Pawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Hulu Sungai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Jelai Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Kendawangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Manis Mata"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Marau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Matan Hilir Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Matan Hilir Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Muara Pawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Nanga Tayap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Pemahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Sandai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Simpang Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Simpang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Singkup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Sungai Laur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Sungai Melayu Rayak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "189",
            "kecamatan" => "Tumbang Titi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Batu Ampar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Kuala Mandor B"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Kubu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Rasau Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Sungai Ambawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Sungai Kakap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Sungai Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Teluk Pakedai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "190",
            "kecamatan" => "Terentang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Air Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Banyuke Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Jelimpo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Kuala Behe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Mandor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Mempawah Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Menjalin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Menyuke"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Meranti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Ngabang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Sebangki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Sengah Temila"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "191",
            "kecamatan" => "Sompak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Belimbing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Belimbing Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Ella Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Menukung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Nanga Pinoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Pinoh Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Pinoh Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Sayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Sokan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Tanah Pinoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "192",
            "kecamatan" => "Tanah Pinoh Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Anjongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Mempawah Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Mempawah Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Sadaniang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Segedong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Sei/Sungai Kunyit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Sei/Sungai Pinyuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Siantan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "193",
            "kecamatan" => "Toho"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Galing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Jawai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Jawai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Paloh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Pemangkat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Sajad"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Sajingan Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Salatiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Sambas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Sebawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Sejangkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Selakau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Selakau Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Semparuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Subah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Tangaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Tebas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Tekarang"
        ]);

                $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "194",
            "kecamatan" => "Teluk Keramat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Balai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Beduai (Beduwai)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Bonti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Entikong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Jangkang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Kapuas (Sanggau Kapuas)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Kembayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Meliau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Mukok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Noyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Parindu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Sekayam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Tayan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Tayan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "195",
            "kecamatan" => "Toba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Belitang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Belitang Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Belitang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Nanga Mahap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Nanga Taman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Sekadau Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "196",
            "kecamatan" => "Sekadau Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Ambalau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Binjai Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Dedai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Kayan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Kayan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Kelam Permai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Ketungau Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Ketungau Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Ketungau Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Sepauk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Serawai (Nanga Serawai)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Sintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Sungai Tebelian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "197",
            "kecamatan" => "Tempunak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Tenggara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "198",
            "kecamatan" => "Pontianak Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "199",
            "kecamatan" => "Singkawang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "199",
            "kecamatan" => "Singkawang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "199",
            "kecamatan" => "Singkawang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "199",
            "kecamatan" => "Singkawang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "199",
            "kecamatan" => "Singkawang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Awayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Batu Mandi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Halong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Juai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Lampihong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Paringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Paringin Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "200",
            "kecamatan" => "Tebing Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Aluh-Aluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Aranio"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Astambul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Beruntung Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Gambut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Karang Intan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Kertak Hanyar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Martapura Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Martapura Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Martapura Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Mataraman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Pengaron"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Peramasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Sambung Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Sei/Sungai Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Sei/Sungai Tabuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Simpang Empat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Tatah Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "201",
            "kecamatan" => "Telaga Bauntung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Alalak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Anjir Muara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Anjir Pasar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Bakumpai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Barambai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Belawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Cerbon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Jejangkit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Kuripan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Mandastana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Marabahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Mekar Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Rantau Badauh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Tabukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Tabunganen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Tamban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "202",
            "kecamatan" => "Wanaraya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Angkinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Daha Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Daha Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Daha Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Kalumpang (Kelumpang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Kandangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Loksado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Padang Batung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Simpur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Sungai Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "203",
            "kecamatan" => "Telaga Langsat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Barabai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Batang Alai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Batang Alai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Batang Alai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Batu Benawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Hantakan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Haruyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Labuan Amas Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Labuan Amas Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Limpasu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "204",
            "kecamatan" => "Pandawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Amuntai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Amuntai Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Amuntai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Babirik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Banjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Danau Panggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Haur Gading"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Paminggir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Sungai Pandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "205",
            "kecamatan" => "Sungai Tabukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Hampang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Kelumpang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pamukan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pamukan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pamukan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Tanjung Selayar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Laut Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Sebuku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Pulau Sembilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Sampanahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "206",
            "kecamatan" => "Sungai Durian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Banua Lawas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Bintang Ara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Haruai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Jaro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Kelua (Klua)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Muara Harus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Muara Uya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Murung Pudak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Pugaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Tanta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "207",
            "kecamatan" => "Upau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Angsana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Batulicin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Karang Bintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Kuranji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Kusan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Kusan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Mantewe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Satui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Simpang Empat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "208",
            "kecamatan" => "Sungai Loban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Bajuin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Bati-Bati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Batu Ampar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Bumi Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Jorong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Kintap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Kurau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Panyipatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Pelaihari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Takisung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "209",
            "kecamatan" => "Tambang Ulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Bakarangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Binuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Bungur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Candi Laras Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Candi Laras Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Hatungun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Lokpaikat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Piani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Salam Babaris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Tapin Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Tapin Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "210",
            "kecamatan" => "Tapin Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "211",
            "kecamatan" => "Banjar Baru Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "211",
            "kecamatan" => "Banjar Baru Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "211",
            "kecamatan" => "Cempaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "211",
            "kecamatan" => "Landasan Ulin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "211",
            "kecamatan" => "Liang Anggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "212",
            "kecamatan" => "Banjarmasin Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "212",
            "kecamatan" => "Banjarmasin Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "212",
            "kecamatan" => "Banjarmasin Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "212",
            "kecamatan" => "Banjarmasin Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "212",
            "kecamatan" => "Banjarmasin Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Dusun Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Dusun Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Dusun Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Gunung Bintang Awai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Jenamas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "213",
            "kecamatan" => "Karau Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Awang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Benua Lima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Dusun Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Dusun Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Karusen Janang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Paju Epat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Paku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Patangkep Tutui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Pematang Karau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "214",
            "kecamatan" => "Raren Batuah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Gunung Purei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Gunung Timang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Lahei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Lahei Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Montallat (Montalat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Teweh Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Teweh Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Teweh Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "215",
            "kecamatan" => "Teweh Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Damang Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Kahayan Hulu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Kurun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Manuhing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Manuhing Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Mihing Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Miri Manasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Rungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Rungan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Rungan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Sepang (Sepang Simin)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "216",
            "kecamatan" => "Tewah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Basarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Bataguh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Dadahup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Murung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Kapuas Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Mandau Talawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Mantangai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Pasak Talawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Pulau Petak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Selat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Tamban Catur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "217",
            "kecamatan" => "Timpah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Bukit Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Kamipang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Katingan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Katingan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Katingan Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Katingan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Marikit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Mendawai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Petak Malai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Pulau Malan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Sanaman Mantikei (Senamang Mantikei)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Tasik Payawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "218",
            "kecamatan" => "Tewang Sanggalang Garing (Sangalang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Arut Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Arut Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Kotawaringin Lama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Kumai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Pangkalan Banteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "219",
            "kecamatan" => "Pangkalan Lada"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Antang Kalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Baamang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Bukit Santuei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Cempaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Cempaga Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Kota Besi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Mentawa Baru Ketapang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Mentaya Hilir Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Mentaya Hilir Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Mentaya Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Parenggean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Pulau Hanaut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Seranau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Telaga Antang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Telawang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Teluk Sampit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "220",
            "kecamatan" => "Tualan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Batang Kawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Belantikan Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Bulik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Bulik Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Delang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Lamandau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Menthobi Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "221",
            "kecamatan" => "Sematu Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Barito Tuhup Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Laung Tuhup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Murung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Permata Intan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Seribu Riam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Sumber Barito"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Sungai Babuat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Tanah Siang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Tanah Siang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "222",
            "kecamatan" => "Uut Murung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Banama Tingang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Jabiren Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Kahayan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Kahayan Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Kahayan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Maliku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Pandih Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "223",
            "kecamatan" => "Sebangau Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Batu Ampar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Danau Seluluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Danau Sembuluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Hanau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Seruyan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Seruyan Hilir Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Seruyan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Seruyan Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Seruyan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "224",
            "kecamatan" => "Suling Tambun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "225",
            "kecamatan" => "Balai Riam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "225",
            "kecamatan" => "Jelai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "225",
            "kecamatan" => "Pantai Lunci"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "225",
            "kecamatan" => "Permata Kecubung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "225",
            "kecamatan" => "Sukamara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "226",
            "kecamatan" => "Bukit Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "226",
            "kecamatan" => "Jekan Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "226",
            "kecamatan" => "Pahandut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "226",
            "kecamatan" => "Rakumpit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "226",
            "kecamatan" => "Sebangau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Batu Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Biatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Biduk-Biduk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Derawan (Pulau Derawan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Gunung Tabur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Kelay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Maratua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Sambaliung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Segah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Tabalar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Talisayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Tanjung Redeb"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "227",
            "kecamatan" => "Teluk Bayur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Barong Tongkok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Bentian Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Bongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Damai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Jempang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Linggang Bigung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Long Iram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Melak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Mook Manaar Bulatn"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Muara Lawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Muara Pahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Nyuatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Penyinggahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Sekolaq Darat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Siluq Ngurai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "228",
            "kecamatan" => "Tering"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Anggana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Kembang Janggut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Kenohan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Kota Bangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Loa Janan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Loa Kulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Marang Kayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Muara Badak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Muara Jawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Muara Kaman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Muara Muntai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Muara Wis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Samboja (Semboja)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Sanga-Sanga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Sebulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Tabang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Tenggarong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "229",
            "kecamatan" => "Tenggarong Seberang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Batu Ampar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Bengalon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Busang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Kaliorang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Karangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Kaubun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Kongbeng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Long Mesangat (Mesengat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Muara Ancalong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Muara Bengkal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Muara Wahau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Rantau Pulung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Sandaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Sangatta Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Sangatta Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Sangkulirang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Telen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "230",
            "kecamatan" => "Teluk Pandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "231",
            "kecamatan" => "Laham"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "231",
            "kecamatan" => "Long Apari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "231",
            "kecamatan" => "Long Bagun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "231",
            "kecamatan" => "Long Hubung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "231",
            "kecamatan" => "Long Pahangai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Batu Engau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Batu Sopang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Kuaro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Long Ikis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Long Kali"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Muara Komam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Muara Samu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Pasir Belengkong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Tanah Grogot"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "232",
            "kecamatan" => "Tanjung Harapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "233",
            "kecamatan" => "Babulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "233",
            "kecamatan" => "Penajam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "233",
            "kecamatan" => "Sepaku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "233",
            "kecamatan" => "Waru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "234",
            "kecamatan" => "Balikpapan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "235",
            "kecamatan" => "Bontang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "235",
            "kecamatan" => "Bontang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "235",
            "kecamatan" => "Bontang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Loa Janan Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Palaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Samarinda Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Samarinda Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Samarinda Seberang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Samarinda Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Samarinda Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Sambutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Sungai Kunjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "236",
            "kecamatan" => "Sungai Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Peso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Peso Hilir/Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Pulau Bunyu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Sekatak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Palas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Palas Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Palas Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Palas Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Palas Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "237",
            "kecamatan" => "Tanjung Selor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Bahau Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Kayan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Kayan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Kayan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Selatan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Selatan Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Malinau Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Mentarang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Mentarang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Pujungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Sungai Boh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "238",
            "kecamatan" => "Sungai Tubu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Krayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Krayan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Lumbis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Lumbis Ogong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Nunukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Nunukan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebatik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebatik Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebatik Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebatik Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebatik Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sebuku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sei Menggaris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sembakung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Sembakung Atulai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "239",
            "kecamatan" => "Tulin Onsoi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "240",
            "kecamatan" => "Betayau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "240",
            "kecamatan" => "Muruk Rian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "240",
            "kecamatan" => "Sesayap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "240",
            "kecamatan" => "Sesayap Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "240",
            "kecamatan" => "Tana Lia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "241",
            "kecamatan" => "Tarakan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "241",
            "kecamatan" => "Tarakan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "241",
            "kecamatan" => "Tarakan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "241",
            "kecamatan" => "Tarakan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Bintan Pesisir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Bintan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Bintan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Gunung Kijang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Mantang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Seri/Sri Kuala Lobam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Tambelan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Teluk Bintan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Teluk Sebong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "242",
            "kecamatan" => "Toapaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Belat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Buru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Durai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Karimun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Kundur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Kundur Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Kundur Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Meral"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Meral Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Moro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Tebing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "243",
            "kecamatan" => "Ungar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Jemaja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Jemaja Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Palmatak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Siantan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Siantan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Siantan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "244",
            "kecamatan" => "Siantan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Lingga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Lingga Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Lingga Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Selayar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Senayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Singkep"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Singkep Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Singkep Pesisir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "245",
            "kecamatan" => "Singkep Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Timur Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Bunguran Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Midai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Pulau Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Pulau Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Serasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Serasan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "246",
            "kecamatan" => "Subi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Batam Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Batu Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Batu Ampar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Belakang Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Bengkong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Bulang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Galang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Lubuk Baja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Nongsa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Sagulung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Sei/Sungai Beduk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "247",
            "kecamatan" => "Sekupang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "248",
            "kecamatan" => "Bukit Bestari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "248",
            "kecamatan" => "Tanjung Pinang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "248",
            "kecamatan" => "Tanjung Pinang Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "248",
            "kecamatan" => "Tanjung Pinang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Air Hitam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Balik Bukit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Bandar Negeri Suoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Batu Brak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Batu Ketulis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Belalau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Gedung Surian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Kebun Tebu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Lumbok Seminung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Pagar Dewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Sekincau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Sukau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Sumber Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Suoh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "249",
            "kecamatan" => "Way Tenong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Bakauheni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Candipuro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Jati Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Kalianda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Katibung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Ketapang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Merbau Mataram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Natar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Palas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Penengahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Rajabasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Sidomulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Sragi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Tanjung Bintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Tanjung Sari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Way Panji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "250",
            "kecamatan" => "Way Sulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Anak Ratu Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Anak Tuha"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bandar Mataram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bandar Surabaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bangun Rejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bekri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bumi Nabung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Bumi Ratu Nuban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Gunung Sugih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Kalirejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Kota Gajah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Padang Ratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Pubian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Punggur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Putra Rumbia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Rumbia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Selagai Lingga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Sendang Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Seputih Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Seputih Banyak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Seputih Mataram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Seputih Raman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Seputih Surabaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Terbanggi Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Terusan Nunyai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Trimurjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Way Pangubuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "251",
            "kecamatan" => "Way Seputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Bandar Sribawono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Batanghari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Batanghari Nuban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Braja Slebah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Bumi Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Gunung Pelindung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Jabung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Labuhan Maringgai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Labuhan Ratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Marga Sekampung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Margatiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Mataram Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Melinting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Metro Kibang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Pasir Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Pekalongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Purbolinggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Raman Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Sekampung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Sekampung Udik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Sukadana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Waway Karya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Way Bungur (Purbolinggo Utara)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "252",
            "kecamatan" => "Way Jepara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Kunang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Pekurun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Semuli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Surakarta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Abung Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Blambangan Pagar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Bukit Kemuning"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Bunga Mayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Hulu Sungkai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Kotabumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Kotabumi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Kotabumi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Muara Sungkai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Sungkai Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Sungkai Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Sungkai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Sungkai Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Sungkai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "253",
            "kecamatan" => "Tanjung Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Mesuji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Mesuji Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Panca Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Rawa Jitu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Simpang Pematang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Tanjung Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "254",
            "kecamatan" => "Way Serdang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Gedong Tataan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Kedondong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Marga Punduh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Negeri Katon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Padang Cermin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Punduh Pidada"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Tegineneng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Way Khilau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "255",
            "kecamatan" => "Way Lima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Bengkunat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Bengkunat Belimbing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Karya Penggawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Krui Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Lemong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Ngambur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Pesisir Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Pesisir Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Pesisir Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Pulau Pisang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "256",
            "kecamatan" => "Way Krui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Adi Luwih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Ambarawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Banyumas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Gading Rejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Pagelaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Pagelaran Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Pardasuka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Pringsewu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "257",
            "kecamatan" => "Sukoharjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Air Naningan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Bandar Negeri Semuong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Bulok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Cukuh Balak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Gisting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Gunung Alip"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Kelumbayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Kelumbayan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Kota Agung (Kota Agung Pusat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Kota Agung Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Kota Agung Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Limau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Pematang Sawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Pugung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Pulau Panggung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Semaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Sumberejo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Talang Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Ulubelu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "258",
            "kecamatan" => "Wonosobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Banjar Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Banjar Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Banjar Margo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Dente Teladas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Gedung Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Gedung Aji Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Gedung Meneng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Menggala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Menggala Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Meraksa Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Penawar Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Penawar Tama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Rawa Pitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Rawajitu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "259",
            "kecamatan" => "Rawajitu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Gunung Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Gunung Terang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Lambu Kibang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Pagar Dewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Tulang Bawang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Tulang Bawang Udik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Tumijajar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "260",
            "kecamatan" => "Way Kenanga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Bahuga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Banjit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Baradatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Blambangan Umpu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Buay Bahuga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Bumi Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Gunung Labuhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Kasui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Negara Batin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Negeri Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Negeri Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Pakuan Ratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Rebang Tangkas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "261",
            "kecamatan" => "Way Tuba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Bumi Waras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Enggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Kedamaian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Kedaton"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Kemiling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Labuhan Ratu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Langkapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Rajabasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Sukabumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Sukarame"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Tanjung Karang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Tanjung Karang Pusat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Tanjung Karang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Tanjung Senang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Telukbetung Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Telukbetung Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Telukbetung Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Telukbetung Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "262",
            "kecamatan" => "Way Halim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "263",
            "kecamatan" => "Metro Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "263",
            "kecamatan" => "Metro Pusat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "263",
            "kecamatan" => "Metro Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "263",
            "kecamatan" => "Metro Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "263",
            "kecamatan" => "Metro Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Airbuaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Batabual"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Fena Leisela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Lilialy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Lolong Guba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Namlea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Teluk Kaiely"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Waeapo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Waelata"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "264",
            "kecamatan" => "Waplau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Ambalau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Fena Fafan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Kepala Madan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Leksula"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Namrole"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "265",
            "kecamatan" => "Waesama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Selatan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Selatan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Tengah Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Tengah Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Aru Utara Timur Batuley"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Pulau-Pulau Aru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "266",
            "kecamatan" => "Sir-Sir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Damer"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Dawelor Dawera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Kepulauan Romang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Kisar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Mdona Hyera/Hiera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Moa Lakor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Lakor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Letti (Leti Moa Lakor)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Masela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Pulau Babar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Pulau Terselatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau Wetang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Pulau-Pulau Babar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Wetar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Wetar Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Wetar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "267",
            "kecamatan" => "Wetar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Amahai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Banda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Kota Masohi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Leihitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Leihitu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Nusa Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Pulau Haruku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Salahutu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Saparua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Saparua Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Seram Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Seram Utara Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Seram Utara Timur Kobi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Seram Utara Timur Seti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Tehoru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Teluk Elpaputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Telutih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "268",
            "kecamatan" => "Teon Nila Serua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Hoat Sorbay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Besar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Besar Selatan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Besar Utara Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Besar Utara Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Kecil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Kecil Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Kecil Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Kei Kecil Timur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "269",
            "kecamatan" => "Manyeuw"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Kormomolin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Molu Maru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Nirunmas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Selaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Tanimbar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Tanimbar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Wer Maktian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Wer Tamrian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Wuar Labobar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "270",
            "kecamatan" => "Yaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Amalatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Elpaputih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Huamual"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Huamual Belakang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Inamosol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Kairatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Kairatu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Kepulauan Manipa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Seram Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Taniwel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "271",
            "kecamatan" => "Taniwel Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Bula"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Bula Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Gorom Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Kian Darat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Kilmury"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Pulau Gorom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Pulau Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Seram Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Siritaun Wida Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Siwalalat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Teluk Waru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Teor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Tutuk Tolu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Wakate"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "272",
            "kecamatan" => "Werinama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "273",
            "kecamatan" => "Baguala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "273",
            "kecamatan" => "Leitimur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "273",
            "kecamatan" => "Nusaniwe (Nusanive)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "273",
            "kecamatan" => "Sirimau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "273",
            "kecamatan" => "Teluk Ambon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "274",
            "kecamatan" => "Kur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "274",
            "kecamatan" => "Pulau Dullah Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "274",
            "kecamatan" => "Pulau Dullah Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "274",
            "kecamatan" => "Pulau Tayando Tam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "274",
            "kecamatan" => "Pulau-Pulau Kur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Ibu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Ibu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Ibu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Jailolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Jailolo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Loloda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Sahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "275",
            "kecamatan" => "Sahu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Barat Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Timur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Bacan Timur Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Barat Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Barat Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Timur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Gane Timur Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kasiruta Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kasiruta Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kayoa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kayoa Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kayoa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kayoa Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kepulauan Botanglomang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Kepulauan Joronga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Makian Barat (Pulau Makian)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Mandioli Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Mandioli Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Obi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Obi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Obi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Obi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Obi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "276",
            "kecamatan" => "Pulau Makian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Patani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Patani Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Patani Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Pulau Gebe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Weda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Weda Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Weda Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "277",
            "kecamatan" => "Weda Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Kota Maba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Maba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Maba Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Maba Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Maba Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Wasile"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Wasile Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Wasile Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Wasile Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "278",
            "kecamatan" => "Wasile Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Galela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Galela Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Galela Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Galela Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Kao"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Kao Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Kao Teluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Kao Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Loloda Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Loloda Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Malifut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "279",
            "kecamatan" => "Tobelo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Mangoli Utara Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sanana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sanana Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sulabesi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sulabesi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sulabesi Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "280",
            "kecamatan" => "Sulabesi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "281",
            "kecamatan" => "Morotai Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "281",
            "kecamatan" => "Morotai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "281",
            "kecamatan" => "Morotai Selatan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "281",
            "kecamatan" => "Morotai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "281",
            "kecamatan" => "Morotai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Lede"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Tabona"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Barat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Timur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "282",
            "kecamatan" => "Taliabu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Moti (Pulau Moti)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Pulau Batang Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Pulau Hiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Pulau Ternate"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Ternate Selatan (Kota)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Ternate Tengah (Kota)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "283",
            "kecamatan" => "Ternate Utara (Kota)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Oba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Oba Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Oba Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Oba Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Tidore"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Tidore (Pulau Tidore)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Tidore Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Tidore Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "284",
            "kecamatan" => "Tidore Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Ambalawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Belo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Bolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Donggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Lambitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Lambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Langgudu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Madapangga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Monta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Palibelo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Parado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Sanggar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Sape"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Soromandi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Tambora"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Wawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Wera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "285",
            "kecamatan" => "Woha"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Dompu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Hu'u"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Kempo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Kilo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Manggalewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Pajo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Pekat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "286",
            "kecamatan" => "Woja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Batu Layar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Gerung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Gunungsari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Kediri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Kuripan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Labuapi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Lembar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Lingsar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Narmada"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "287",
            "kecamatan" => "Sekotong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Batukliang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Batukliang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Janapria"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Jonggat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Kopang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Praya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Praya Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Praya Barat Daya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Praya Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Praya Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Pringgarata"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "288",
            "kecamatan" => "Pujut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Aikmel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Jerowaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Keruak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Labuhan Haji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Masbagik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Montong Gading"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Pringgabaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Pringgasela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sakra"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sakra Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sakra Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sambalia (Sambelia)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Selong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sembalun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sikur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Suela (Suwela)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Sukamulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Suralaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Terara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "289",
            "kecamatan" => "Wanasaba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "290",
            "kecamatan" => "Bayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "290",
            "kecamatan" => "Gangga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "290",
            "kecamatan" => "Kayangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "290",
            "kecamatan" => "Pemenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "290",
            "kecamatan" => "Tanjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Alas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Alas Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Batulanteh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Buer"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Empang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Labangka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Labuhan Badas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Lantung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Lape (Lape Lopok)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Lenangguar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Lopok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Lunyuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Maronge"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Moyo Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Moyo Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Moyo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Orong Telu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Plampang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Rhee"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Ropang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Sumbawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Tarano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Unter Iwes (Unterwiris)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "291",
            "kecamatan" => "Utan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Brang Ene"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Brang Rea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Jereweh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Maluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Poto Tano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Sateluk (Seteluk)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Sekongkang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "292",
            "kecamatan" => "Taliwang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "293",
            "kecamatan" => "Asakota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "293",
            "kecamatan" => "Mpunda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "293",
            "kecamatan" => "Raba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "293",
            "kecamatan" => "Rasanae Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "293",
            "kecamatan" => "Rasanae Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Ampenan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Cakranegara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Mataram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Sandubaya (Sandujaya)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Sekarbela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "294",
            "kecamatan" => "Selaparang (Selaprang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Barat Daya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Barat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Tengah Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Alor Timur Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Kabola"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Lembur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Mataru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pantar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pantar Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pantar Barat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pantar Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pantar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pulau Pura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Pureman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "295",
            "kecamatan" => "Teluk Mutiara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Atambua Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Atambua Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Atambua Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Kakuluk Mesak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Lamaknen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Lamaknen Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Lasiolat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Nanaet Duabesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Raihat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Raimanuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Tasifeto Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "296",
            "kecamatan" => "Tasifeto Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Detukeli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Detusoko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ende"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ende Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ende Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ende Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ende Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Kelimutu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Kota Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Lepembusu Kelisoke"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Lio Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Maukaro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Maurole"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Nangapanda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ndona"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ndona Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Ndori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Pulau Ende"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Wewaria"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Wolojita"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "297",
            "kecamatan" => "Wolowaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Adonara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Adonara Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Adonara Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Adonara Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Demon Pagong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Ile Boleng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Ile Bura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Ile Mandiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Kelubagolit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Larantuka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Lewolema"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Solor Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Solor Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Solor Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Tanjung Bunga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Titehena"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Witihama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Wotan Ulumando"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "298",
            "kecamatan" => "Wulanggitang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amabi Oefeto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amabi Oefeto Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amarasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amarasi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amarasi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amarasi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Barat Daya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Barat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Amfoang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Fatuleu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Fatuleu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Fatuleu Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Kupang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Kupang Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Kupang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Nekamese"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Semau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Semau Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Sulamu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Taebenu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "299",
            "kecamatan" => "Takari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Atadei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Buyasuri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Ile Ape"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Ile Ape Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Lebatukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Naga Wutung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Nubatukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Omesuri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "300",
            "kecamatan" => "Wulandoni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Botin Leobele"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Io Kufeu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Kobalima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Kobalima Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Laenmanen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Malaka Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Malaka Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Malaka Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Rinhat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Sasitamean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Weliman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "301",
            "kecamatan" => "Wewiku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Cibal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Cibal Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Langke Rembong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Lelak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Rahong Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Reok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Reok Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Ruteng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Satar Mese"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Satar Mese Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "302",
            "kecamatan" => "Wae Rii"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Boleng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Komodo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Kuwus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Lembor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Lembor Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Macang Pacar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Mbeliling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Ndoso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Sano Nggoang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "303",
            "kecamatan" => "Welak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Borong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Elar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Elar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Kota Komba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Lamba Leda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Poco Ranaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Poco Ranaka Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Rana Mese"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "304",
            "kecamatan" => "Sambi Rampas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Aesesa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Aesesa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Boawae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Keo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Mauponggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Nangaroro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "305",
            "kecamatan" => "Wolowae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Aimere"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Bajawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Bajawa Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Golewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Golewa Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Golewa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Inerie"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Jerebuu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Riung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Riung Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Soa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "306",
            "kecamatan" => "Wolomeze (Riung Selatan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Landu Leko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Lobalain"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Ndao Nuse"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Pantai Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Barat Daya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Barat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "307",
            "kecamatan" => "Rote Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Hawu Mehara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Raijua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Sabu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Sabu Liae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Sabu Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "308",
            "kecamatan" => "Sabu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Alok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Alok Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Alok Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Bola"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Doreng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Hewokloang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Kangae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Kewapante"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Koting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Lela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Magepanda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Mapitara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Mego"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Nelle (Maumerei)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Nita"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Paga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Palue"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Talibura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Tana Wawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Waiblama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "309",
            "kecamatan" => "Waigete"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Kota Waikabubak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Lamboya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Lamboya Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Loli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Tana Righu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "310",
            "kecamatan" => "Wanokaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Kodi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Kodi Balaghar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Kodi Bangedo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Kodi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Kota Tambolaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Loura (Laura)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Wewewa Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Wewewa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Wewewa Tengah (Wewera Tengah)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Wewewa Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "311",
            "kecamatan" => "Wewewa Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "312",
            "kecamatan" => "Katiku Tana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "312",
            "kecamatan" => "Katikutana Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "312",
            "kecamatan" => "Mamboro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "312",
            "kecamatan" => "Umbu Ratu Nggay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "312",
            "kecamatan" => "Umbu Ratu Nggay Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Haharu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Kahaunguweti (Kahaungu Eti)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Kambata Mapambuhang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Kambera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Kanatang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Karera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Katala Hamu Lingu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Kota Waingapu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Lewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Lewa Tidahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Mahu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Matawai Lappau (La Pawu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Ngadu Ngala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Nggaha Oriangu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Paberiwai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Pahunga Lodu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Pandawai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Pinupahar (Pirapahar)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Rindi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Tabundung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Umalulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "313",
            "kecamatan" => "Wula Waijelu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanatun Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanatun Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanuban Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanuban Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanuban Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Amanuban Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Batu Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Boking"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Fatukopa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Fatumnasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Fautmolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kie (Ki'e)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kok Baun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kolbano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kot Olin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kota Soe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kualin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kuanfatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Kuatnana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Mollo Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Mollo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Mollo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Mollo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Noebana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Noebeba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Nunbena"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Nunkolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Oenino"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Polen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Santian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Tobu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "314",
            "kecamatan" => "Toianas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Anleu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Feotleu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Moenleu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Tan Pah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Biboki Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Bikomi Nilulat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Bikomi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Bikomi Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Bikomi Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Insana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Insana Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Insana Fafinesu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Insana Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Insana Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Kota Kefamenanu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Miomafo Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Miomafo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Miomafo Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Musi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Mutis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Naibenu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Noemuti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "315",
            "kecamatan" => "Noemuti Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Alak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Kelapa Lima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Kota Lama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Kota Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Maulafa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "316",
            "kecamatan" => "Oebobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Agats"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Akat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Atsy / Atsj"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Ayip"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Betcbamu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Der Koumur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Fayit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Jetsy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Joerat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Kolf Braza"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Kopay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Pantai Kasuari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Pulau Tiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Safan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Sawa Erma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Sirets"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Suator"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Suru-suru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "317",
            "kecamatan" => "Unir Sirau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Aimando Padaido"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Andey"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Biak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Biak Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Biak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Biak Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Bondifuar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Bruyadori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Numfor Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Numfor Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Oridek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Orkeri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Padaido"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Poiru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Samofa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Swandiwe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Warsa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Yawosi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "318",
            "kecamatan" => "Yendidori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Ambatkwi (Ambatkui)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Arimop"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Bomakia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Firiwage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Fofi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Iniyandit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Jair"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Kawagit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Ki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Kombay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Kombut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Kouh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Mandobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Manggelum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Mindiptana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Ninati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Sesnuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Subur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Waropko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "319",
            "kecamatan" => "Yaniruma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "320",
            "kecamatan" => "Bowobado"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "320",
            "kecamatan" => "Kapiraya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "320",
            "kecamatan" => "Tigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "320",
            "kecamatan" => "Tigi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "320",
            "kecamatan" => "Tigi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Dogiyai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Kamu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Kamu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Kamu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Kamu Utara (Ikrar/Ikrat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Mapia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Mapia Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Mapia Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Piyaiye (Sukikai)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "321",
            "kecamatan" => "Sukikai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Agisiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Biandoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Hitadipa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Homeyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Sugapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Tomosiga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Ugimba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "322",
            "kecamatan" => "Wandai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Airu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Demta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Depapre"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Ebungfau (Ebungfa)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Gresi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Kaureh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Kemtuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Kemtuk Gresi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Nambluong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Nimbokrang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Nimboran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Ravenirara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Sentani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Sentani Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Sentani Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Unurum Guay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Waibu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Yapsi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "323",
            "kecamatan" => "Yokari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Asologaima (Asalogaima)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Asolokobal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Asotipo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Bolakme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Bpiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Bugi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Hubikiak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Hubikosi (Hobikosi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Ibele"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Itlay Hisage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Koragi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Kurulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Libarek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Maima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Molagalome"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Muliama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Musatfak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Napua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Pelebaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Piramid"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Pisugi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Popugoba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Siepkosi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Silo Karno Doga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Taelarek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Tagime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Tagineri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Trikora"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Usilimo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wadangku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Walaik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Walelagama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wame"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wamena"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Welesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wesaput"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wita Waya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wollo (Wolo)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Wouma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "324",
            "kecamatan" => "Yalengga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Arso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Arso Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Senggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Skanto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Towe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Waris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "325",
            "kecamatan" => "Web"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Angkaisera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Kepulauan Ambai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Kosiwo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Poom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Pulau Kurudu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Pulau Yerui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Raimbawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Teluk Ampimoi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Windesi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Wonawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Yapen Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Yapen Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Yapen Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "326",
            "kecamatan" => "Yapen Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Awina"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Ayumnati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Balingga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Balingga Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Bruwa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Buguk Gona"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Dimba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Gamelia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Gelok Beam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Goa Balim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Gollo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Guna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Gupura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Karu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Kelulome"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Kolawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Kuly Lanny"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Kuyawage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Lannyna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Makki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Melagi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Melagineri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Milimbo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Mokoni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Muara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Nikogwe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Niname"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Nogi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Pirime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Poga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Tiom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Tiom Ollo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Tiomneri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Wano Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Wereka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Wiringgambut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Yiginua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Yiluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "327",
            "kecamatan" => "Yugungwi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Benuki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Mamberamo Hilir/Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Mamberamo Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Mamberamo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Mamberamo Tengah Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Rufaer"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Sawai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "328",
            "kecamatan" => "Waropen Atas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "329",
            "kecamatan" => "Eragayam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "329",
            "kecamatan" => "Ilugwa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "329",
            "kecamatan" => "Kelila"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "329",
            "kecamatan" => "Kobakma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "329",
            "kecamatan" => "Megabilis (Megambilis)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Assue"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Bamgi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Citakmitak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Edera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Haju"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Kaibar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Minyamur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Nambioman Bapai (Mambioman)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Obaa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Passue"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Passue Bawah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Syahcame"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Ti Zain"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Venaha"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "330",
            "kecamatan" => "Yakomi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Animha"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Elikobal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Ilyawab"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Jagebob"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Kaptel"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Kimaam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Kurik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Malind"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Merauke"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Muting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Naukenjerai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Ngguti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Okaba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Semangga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Sota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Tabonji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Tanah Miring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Tubang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Ulilin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "331",
            "kecamatan" => "Waan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Agimuga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Alama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Amar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Hoya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Iwaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Jila"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Jita"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Kuala Kencana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Kwamki Narama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Barat Jauh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Barat Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Mimika Timur Jauh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Tembagapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "332",
            "kecamatan" => "Wania"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Dipa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Makimi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Menou"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Moora"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Nabire"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Nabire Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Napan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Siriwo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Teluk Kimi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Teluk Umar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Uwapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Wanggar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Wapoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Yaro (Yaro Kabisay)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "333",
            "kecamatan" => "Yaur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Alama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Dal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Embetpen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Gearek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Geselma (Geselema)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Inikgal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Iniye"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Kegayem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Kenyam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Kilmid"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Kora"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Koroptak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Krepkuri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mapenduma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mbua (Mbuga)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mbua Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mbulmu Yalma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mebarok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Moba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Mugi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Nenggeagin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Nirkuri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Paro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Pasir Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Pija"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Wosak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Wusi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Wutpaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Yal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Yenggelo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "334",
            "kecamatan" => "Yigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Aradide"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Bibida"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Bogobaida"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Dumadama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Ekadide"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Kebo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Paniai Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Paniai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Siriwo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "335",
            "kecamatan" => "Yatamo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Aboy"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Alemsom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Awinbon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Batani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Batom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Bime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Borme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Eipumek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Iwur (Okiwur)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Jetfa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Kalomdol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Kawor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Kiwirok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Kiwirok Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Mofinop"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Murkim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Nongme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Ok Aom"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Okbab"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Okbape"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Okbemtau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Okbibab"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Okhika"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Oklip"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Oksamol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Oksebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Oksibil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Oksop"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Pamek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Pepera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Serambakon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Tarup"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Teiraplu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "336",
            "kecamatan" => "Weime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Agadugume"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Beoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Doufu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Gome"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Ilaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Pogoma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Sinak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "337",
            "kecamatan" => "Wangbe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Dagai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Dokome"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Fawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Gubume"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Gurage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Ilamburawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Ilu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Irimuli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Kalome"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Kiyage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Lumo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Mewoluk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Molanikime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Muara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Mulia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Nioga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Nume"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Pagaleme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Taganombak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Tingginambut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Torere"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Waegi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Wanwi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Yambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Yamo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "338",
            "kecamatan" => "Yamoneri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Apawer Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Bonggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Bonggo Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Pantai Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Pantai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Pantai Timur Bagian Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Sarmi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Sarmi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Sarmi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "339",
            "kecamatan" => "Tor Atas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "340",
            "kecamatan" => "Kepulauan Aruri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "340",
            "kecamatan" => "Supiori Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "340",
            "kecamatan" => "Supiori Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "340",
            "kecamatan" => "Supiori Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "340",
            "kecamatan" => "Supiori Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Airgaram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Anawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Aweku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Bewani"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Biuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Bogonuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Bokondini"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Bokoneri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Danime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Dow"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Dundu (Ndundu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Egiam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Geya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Gika"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Gilubandu (Gilumbandu/Gilimbandu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Goyage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Gundagi (Gudage)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kamboneri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kanggime (Kanggima )"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Karubaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kembu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kondaga (Konda)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kuari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Kubu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Li Anogomma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Nabunage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Nelawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Numba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Nunggawi (Munggawi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Panaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Poganeri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Tagime"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Tagineri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Telenggeme"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Timori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Umagi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wakuwo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wari (Taiyeve)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wenam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wina"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wonoki (Woniki)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wugi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Wunin (Wumin)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Yuko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "341",
            "kecamatan" => "Yuneri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Demba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Inggerus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Kirihi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Masirei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Oudate"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Risei Sayati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Soyoi Mambai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Urei Faisei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Wapoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Waropen Bawah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "342",
            "kecamatan" => "Wonti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Amuma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Anggruk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Bomela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Dekai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Dirwemna (Diruwena)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Duram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Endomen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Hereapini (Hereanini)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Hilipuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Hogio (Hugio)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Holuon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kabianggama (Kabianggema)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kayo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kona"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Koropun (Korupun)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kosarek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kurima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kwelemdua (Kwelamdua)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Kwikma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Langda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Lolat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Mugi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Musaik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Nalca"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Ninia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Nipsan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Obio"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Panggema"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Pasema"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Pronggoli (Proggoli)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Puldama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Samenage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Sela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Seredela (Seredala)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Silimo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Soba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Sobaham"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Soloikma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Sumo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Suntamon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Suru Suru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Talambo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Tangma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Ubahak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Ubalihi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Ukha"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Walma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Werima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Wusuma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Yahuliambut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "343",
            "kecamatan" => "Yogosem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "344",
            "kecamatan" => "Abenaho"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "344",
            "kecamatan" => "Apalapsili"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "344",
            "kecamatan" => "Benawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "344",
            "kecamatan" => "Elelim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "344",
            "kecamatan" => "Welarek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "345",
            "kecamatan" => "Abepura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "345",
            "kecamatan" => "Heram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "345",
            "kecamatan" => "Jayapura Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "345",
            "kecamatan" => "Jayapura Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "345",
            "kecamatan" => "Muara Tami"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Arguni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Bomberay"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Fakfak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Fakfak Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Fakfak Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Fakfak Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Fakfak Timur Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Furwagi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Karas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Kayauni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Kokas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Kramongmongga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Mbahamdandara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Pariwari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Teluk Patipi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Tomage"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "346",
            "kecamatan" => "Wartutin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Buruway"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Kaimana"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Kambraw (Kamberau)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Teluk Arguni Atas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Teluk Arguni Bawah (Yerusi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Teluk Etna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "347",
            "kecamatan" => "Yamor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Manokwari Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Manokwari Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Manokwari Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Manokwari Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Masni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Prafi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Sidey"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Tanah Rubuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "348",
            "kecamatan" => "Warmare"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Dataran Isim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Momi Waren"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Neney"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Oransbari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Ransiki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "349",
            "kecamatan" => "Tahota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Timur"
        ]);

                $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Timur Jauh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Timur Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Timur Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aifat Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aitinyo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aitinyo Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aitinyo Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aitinyo Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Aitinyo Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Selatan Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Timur Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Ayamaru Utara Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Mare",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "350",
            "kecamatan" => "Mare Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Anggi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Anggi Gida",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Catubouw",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Didohu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Hingk",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Membey",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Minyambaouw",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Sururey",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Taige",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "351",
            "kecamatan" => "Testega",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Ayau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Batanta Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Batanta Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Kepulauan Ayau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Kepulauan Sembilan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Kofiau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Kota Waisai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Meos Mansar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Misool (Misool Utara)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Misool Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Misool Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Misool Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Salawati Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Salawati Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Salawati Utara (Samate)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Supnin",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Teluk Mayalibit",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Tiplol Mayalibit",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Waigeo Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Waigeo Barat Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Waigeo Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Waigeo Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Waigeo Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "352",
            "kecamatan" => "Warwabomi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Aimas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Beraur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Klabot",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Klamono",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Klaso",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Klawak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Klayili",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Makbon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Mariat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Maudus",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Mayamuk",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Moisegen",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Salawati",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Salawati Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Sayosa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Seget",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "353",
            "kecamatan" => "Segun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Fokour",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Inanwatan (Inawatan)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Kais (Matemani Kais)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Kokoda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Kokoda Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Konda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Matemani",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Moswaren",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Saifi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Sawiat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Seremuk",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Teminabuan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "354",
            "kecamatan" => "Wayer",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Abun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Amberbaken",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Amberbaken Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Ases",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Bamusbama",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Bikar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Fef",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Ireres",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kasi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kebar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kebar Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kebar Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kwesefo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Kwoor",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Manekar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Mawabuan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Miyah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Miyah Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Moraid",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Mpur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Mubrani",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Sausapor",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Selemkai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Senopi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Syujak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Tinggouw",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Tobouw",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Wilhem Roumbouts",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "355",
            "kecamatan" => "Yembun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Aranday",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Aroba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Babo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Bintuni",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Biscoop",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Dataran Beimes",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Fafurwar (Irorutu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Kaitaro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Kamundan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Kuri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Manimeri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Masyeta",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Mayado",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Merdey",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Moskona Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Moskona Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Moskona Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Moskona Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Sumuri (Simuri)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Tembuni",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Tomu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Tuhiba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Wamesa (Idoor)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "356",
            "kecamatan" => "Weriagar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Kuri Wamesa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Naikere (Wasior Barat)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Nikiwar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Rasiei",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Roon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Roswar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Rumberpon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Soug Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Teluk Duairi (Wasior Utara)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Wamesa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Wasior",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Windesi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "357",
            "kecamatan" => "Wondiboy (Wasior Selatan)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Klaurung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Maladum Mes",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Malaimsimsa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Manoi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "358",
            "kecamatan" => "Sorong Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Bantan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Bengkalis",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Bukit Batu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Mandau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Pinggir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Rupat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Rupat Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "359",
            "kecamatan" => "Siak Kecil",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Batang Tuaka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Concong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Enok",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Gaung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Gaung Anak Serka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Kateman",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Kempas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Kemuning",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Keritang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Kuala Indragiri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Mandah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Pelangiran",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Pulau Burung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Reteh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Sungai Batang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Tanah Merah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Teluk Belengkong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Tembilahan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Tembilahan Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "360",
            "kecamatan" => "Tempuling",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Batang Cenaku",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Batang Gansal",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Batang Peranap",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Kelayang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Kuala Cenaku",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Lirik",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Lubuk Batu Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Pasir Penyu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Peranap",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Rakit Kulim",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Rengat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Rengat Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Seberida",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "361",
            "kecamatan" => "Sungai Lala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Bangkinang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Bangkinang Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Gunung Sahilan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Kiri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Kiri Hilir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Kiri Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Kiri Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kampar Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Koto Kampar Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Kuok",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Perhentian Raja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Rumbio Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Salo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Siak Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Tambang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Tapung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Tapung Hilir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "Tapung Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "362",
            "kecamatan" => "XIII Koto Kampar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Merbau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Pulaumerbau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Rangsang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Rangsang Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Rangsang Pesisir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Tasik Putri Puyu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Tebing Tinggi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Tebing Tinggi Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "363",
            "kecamatan" => "Tebing Tinggi Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Benai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Cerenti",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Gunung Toar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Hulu Kuantan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Inuman",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Kuantan Hilir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Kuantan Hilir Seberang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Kuantan Mudik",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Kuantan Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Logas Tanah Darat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Pangean",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Pucuk Rantau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Sentajo Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Singingi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "364",
            "kecamatan" => "Singingi Hilir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Bandar Petalangan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Bandar Sei Kijang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Bunut",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Kerumutan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Kuala Kampar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Langgam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Pangkalan Kerinci",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Pangkalan Kuras",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Pangkalan Lesung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Pelalawan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Teluk Meranti",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "365",
            "kecamatan" => "Ukui",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Bagan Sinembah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Bangko",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Bangko Pusaka (Pusako)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Batu Hampar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Kubu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Kubu Babussalam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Pasir Limau Kapas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Pekaitan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Pujud",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Rantau Kopar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Rimba Melintang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Simpang Kanan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Sinaboi (Senaboi)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Tanah Putih",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "366",
            "kecamatan" => "Tanah Putih Tanjung Melawan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Bangun Purba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Bonai Darussalam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Kabun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Kepenuhan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Kepenuhan Hulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Kunto Darussalam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Pagaran Tapah Darussalam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Pendalian IV Koto",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Rambah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Rambah Hilir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Rambah Samo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Rokan IV Koto",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Tambusai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Tambusai Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Tandun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "367",
            "kecamatan" => "Ujung Batu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Bunga Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Dayun",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Kandis",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Kerinci Kanan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Koto Gasib",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Lubuk Dalam",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Mempura",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Minas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Pusako",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Sabak Auh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Siak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Sungai Apit",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Sungai Mandau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "368",
            "kecamatan" => "Tualang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Bukit Kapur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Dumai Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Dumai Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Dumai Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Dumai Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Medang Kampai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "369",
            "kecamatan" => "Sungai Sembilan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Bukit Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Lima Puluh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Marpoyan Damai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Payung Sekaki",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Pekanbaru Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Rumbai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Rumbai Pesisir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Sail",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Senapelan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Sukajadi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Tampan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "370",
            "kecamatan" => "Tenayan Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Banggae",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Banggae Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Malunda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Pamboang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Sendana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Tammeredo Sendana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Tubo (Tubo Sendana)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "371",
            "kecamatan" => "Ulumunda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Aralle",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Balla",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Bambang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Buntumalangka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Mamasa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Mambi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Mehalaan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Messawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Nosu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Pana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Rantebulahan Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Sesenapadang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Sumarorong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Tabang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Tabulahan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Tanduk Kalua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "372",
            "kecamatan" => "Tawalian",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Bonehau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Kalukku",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Kalumpang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Kep. Bala Balakang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Mamuju",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Papalang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Sampaga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Simboro dan Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Tapalang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Tapalang Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "373",
            "kecamatan" => "Tommo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "374",
            "kecamatan" => "Budong-Budong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "374",
            "kecamatan" => "Karossa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "374",
            "kecamatan" => "Pangale",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "374",
            "kecamatan" => "Tobadak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "374",
            "kecamatan" => "Topoyo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Bambaira",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Bambalamotu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Baras",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Bulu Taba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Dapurang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Duripoku",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Lariang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Pasangkayu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Pedongga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Sarjo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Sarudu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "375",
            "kecamatan" => "Tikke Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Alu (Allu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Anreapi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Balanipa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Binuang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Bulo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Campalagian",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Limboro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Luyo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Mapilli",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Matakali",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Matangnga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Polewali",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Tapango",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Tinambung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Tubbi Taramanu (Tutar/Tutallu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "376",
            "kecamatan" => "Wonomulyo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Bantaeng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Bissappu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Eremerasa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Gantarang Keke (Gantareng Keke)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Pajukukang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Sinoa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Tompobulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "377",
            "kecamatan" => "Uluere",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Balusu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Barru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Mallusetasi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Pujananting",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Soppeng Riaja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Tanete Riaja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "378",
            "kecamatan" => "Tanete Rilau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Ajangale",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Amali",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Awangpone",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Barebbo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Bengo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Bontocani",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Cenrana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Cina",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Dua Boccoe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Kahu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Kajuara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Lamuru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Lappariaja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Libureng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Mare",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Palakka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Patimpeng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Ponre",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Salomekko",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Sibulue",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tanete Riattang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tanete Riattang Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tanete Riattang Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tellu Limpoe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tellu Siattinge",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Tonra",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "379",
            "kecamatan" => "Ulaweng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Bonto Bahari",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Bontotiro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Bulukumba (Bulukumpa)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Gantorang/Gantarang (Gangking)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Hero Lange-Lange (Herlang)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Kajang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Kindang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Rilau Ale",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Ujung Bulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "380",
            "kecamatan" => "Ujung Loe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Alla",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Anggeraja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Baraka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Baroko",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Bungin",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Buntu Batu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Cendana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Curio",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Enrekang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Maiwa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Malua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "381",
            "kecamatan" => "Masalle",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bajeng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bajeng Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Barombong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Biringbulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bontolempangang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bontomarannu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bontonompo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bontonompo Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Bungaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Manuju",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Pallangga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Parangloe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Parigi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Pattallassang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Somba Opu (Upu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Tinggimoncong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Tombolo Pao",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "382",
            "kecamatan" => "Tompobulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Arungkeke",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Bangkala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Bangkala Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Batang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Binamu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Bontoramba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Kelara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Rumbia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Tamalatea",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Tarowang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "383",
            "kecamatan" => "Turatea",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Benteng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Bontoharu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Bontomanai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Bontomatene",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Bontosikuyu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Buki",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Pasilambena",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Pasimarannu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Pasimassunggu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Pasimasunggu Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "384",
            "kecamatan" => "Takabonerate",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Bajo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Bajo Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Basse Sangtempe Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Bassesang Tempe (Bastem)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Belopa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Belopa Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Bua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Bua Ponrang (Bupon)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Kamanre",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Lamasi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Lamasi Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Larompong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Larompong Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Latimojong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Ponrang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Ponrang Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Suli",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Suli Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Walenrang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Walenrang Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Walenrang Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "385",
            "kecamatan" => "Walenrang Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Angkona",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Burau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Kalaena",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Malili",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Mangkutana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Nuha",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Tomoni",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Tomoni Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Towuti",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Wasuponda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "386",
            "kecamatan" => "Wotu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Baebunta",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Bone-Bone",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Limbong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Malangke",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Malangke Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Mappedeceng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Masamba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Rampi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Sabbang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Seko",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Sukamaju",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "387",
            "kecamatan" => "Tana Lili",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Bantimurung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Bontoa (Maros Utara)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Camba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Cenrana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Lau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Mallawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Mandai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Maros Baru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Marusu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Moncongloe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Simbang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Tanralili",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Tompu Bulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "388",
            "kecamatan" => "Turikale",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Balocci",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Bungoro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Labakkang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Liukang Kalmas (Kalukuang Masalima)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Liukang Tangaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Liukang Tupabbiring",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Liukang Tupabbiring Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Mandalle",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Marang (Ma Rang)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Minasa Tene",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Pangkajene",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Segeri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "389",
            "kecamatan" => "Tondong Tallasa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Batulappa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Cempa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Duampanua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Lanrisang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Lembang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Mattiro Bulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Mattiro Sompe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Paleteang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Patampanua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Suppa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Tiroang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "390",
            "kecamatan" => "Watang Sawitto",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Baranti",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Dua Pitue",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Kulo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Maritengngae",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Panca Lautan (Lautang)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Panca Rijang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Pitu Raise/Riase",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Pitu Riawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Tellu Limpoe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Watang Pulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "391",
            "kecamatan" => "Wattang Sidenreng (Watang Sidenreng)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Bulupoddo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Pulau Sembilan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Borong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Sinjai Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "392",
            "kecamatan" => "Tellu Limpoe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Citta",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Donri-Donri",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Ganra",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Lalabata",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Lili Rilau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Liliraja (Lili Riaja)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Mario Riawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "393",
            "kecamatan" => "Mario Riwawo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Galesong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Galesong Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Galesong Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Mangara Bombang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Mappakasunggu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Patallassang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Polombangkeng Selatan (Polobangkeng)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Polombangkeng Utara (Polobangkeng)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "394",
            "kecamatan" => "Sanrobone",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Bittuang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Bonggakaradeng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Gandang Batu Sillanan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Kurra",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Makale",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Makale Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Makale Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Malimbong Balepe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Mappak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Masanda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Mengkendek",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Rano",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Rantetayo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Rembon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Saluputti",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Sangalla (Sanggala)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Sangalla Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Sangalla Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "395",
            "kecamatan" => "Simbuang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Awan Rante Karua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Balusu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Bangkelekila",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Baruppu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Buntao",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Buntu Pepasan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Dende' Piongan Napo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Kapalla Pitu (Kapala Pitu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Kesu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Nanggala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Rantebua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Rantepao",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Rindingallo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Sa'dan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Sanggalangi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Sesean",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Sesean Suloara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Sopai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Tallunglipu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Tikala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "396",
            "kecamatan" => "Tondon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Belawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Bola",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Gilireng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Keera",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Majauleng",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Maniangpajo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Pammana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Penrang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Pitumpanua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Sabangparu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Sajoanging",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Takkalalla",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Tanasitolo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "397",
            "kecamatan" => "Tempe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Biring Kanaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Bontoala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Makassar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Mamajang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Manggala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Mariso",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Panakkukang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Rappocini",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Tallo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Tamalanrea",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Tamalate",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Ujung Pandang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Ujung Tanah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "398",
            "kecamatan" => "Wajo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Bara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Mungkajang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Sendana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Telluwanua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Wara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Wara Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Wara Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Wara Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "399",
            "kecamatan" => "Wara Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "400",
            "kecamatan" => "Bacukiki",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "400",
            "kecamatan" => "Bacukiki Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "400",
            "kecamatan" => "Soreang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "400",
            "kecamatan" => "Ujung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Balantak",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Balantak Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Balantak Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Batui",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Batui Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Bualemo (Boalemo)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Bunta",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Kintom",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Lamala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Lobu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Luwuk",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Luwuk Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Luwuk Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Luwuk Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Mantoh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Masama",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Moilong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Nambo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Nuhon",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Pagimana",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Simpang Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Toili",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "401",
            "kecamatan" => "Toili Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Buko",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Buko Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Bulagi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Bulagi Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Bulagi Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Liang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Peling Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Tinangkung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Tinangkung Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Tinangkung Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Totikum (Totikung)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "402",
            "kecamatan" => "Totikum Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Banggai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Banggai Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Banggai Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Banggai Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Bangkurung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Bokan Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "403",
            "kecamatan" => "Labobo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Biau",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Bokat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Bukal",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Bunobogu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Gadung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Karamat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Lakea (Lipunoto)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Momunu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Paleleh",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Paleleh Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "404",
            "kecamatan" => "Tiloan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Balaesang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Balaesang Tanjung",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Banawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Banawa Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Banawa Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Dampelas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Labuan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Panembani",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Rio Pakava",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sindue",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sindue Tobata",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sindue Tombusabora",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sirenja",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sojol",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Sojol Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "405",
            "kecamatan" => "Tanantovea",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bahodopi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bumi Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bungku Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bungku Pesisir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bungku Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bungku Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Bungku Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Menui Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Petasia Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "406",
            "kecamatan" => "Wita Ponda",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Bungku Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Lembo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Lembo Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Mamosalato",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Mori Atas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Mori Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Petasia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Petasia Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "407",
            "kecamatan" => "Soyo Jaya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Ampibabo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Balinggi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Bolano",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Bolano Lambunu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Kasimbar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Mepanga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Moutong",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Ongka Malino",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Palasa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Parigi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Parigi Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Parigi Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Parigi Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Parigi Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Sausu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Sidoan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Siniu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Taopa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Tinombo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Tinombo Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Tomini",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Toribulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "408",
            "kecamatan" => "Torue",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lage",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Piore",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Lore Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Puselemba",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Tenggara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Pamona Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Kota Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Kota Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Pesisir",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Pesisir Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "409",
            "kecamatan" => "Poso Pesisir Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Dolo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Dolo Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Dolo Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Gumbasa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Kinovaro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Kinovaru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Kulawi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Kulawi Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Lindu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Marawola",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Marawola Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Nokilalaki",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Palolo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Pipikoro",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Sigi Biromaru",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "410",
            "kecamatan" => "Tanambulava",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Ampana Kota",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Ampana Tete",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Batudaka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Ratolindo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Talatako",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Togean",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Tojo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Tojo Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Ulubongka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Una Una",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Walea Besar",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "411",
            "kecamatan" => "Walea Kepulauan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Baolan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Basidondo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Dako Pamean",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Dampal Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Dampal Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Dondo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Galang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Lampasio",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Ogodeide",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "412",
            "kecamatan" => "Tolitoli Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Mantikulore",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Palu Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Palu Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Palu Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Palu Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Tatanga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Tawaeli",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "413",
            "kecamatan" => "Ulujadi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kabaena Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Kepulauan Masaloka Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Lentarai Jaya S. (Lantari Jaya)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Mata Oleo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Mata Usu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Tenggara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Poleang Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Rarowatu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Rarowatu Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Rumbia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Rumbia Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "414",
            "kecamatan" => "Tontonunu (Tontonuwu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Kapontori",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Lasalimu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Lasalimu Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Pasar Wajo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Siontapia (Siontapina)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Wabula",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "415",
            "kecamatan" => "Wolowa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Batauga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Batu Atas",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Kadatua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Lapandewa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Sampolawa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Siompu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "416",
            "kecamatan" => "Siompu Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Gu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Lakudo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Mawasangka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Mawasangka Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Mawasangka Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Sangia Wambulu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "417",
            "kecamatan" => "Talaga Raya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Bonegunu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Kambowa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Kulisusu (Kalingsusu/Kalisusu)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Kulisusu Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Kulisusu Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "418",
            "kecamatan" => "Wakorumba Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Baula",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Iwoimendaa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Kolaka",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Latambaga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Polinggona",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Pomalaa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Samaturu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Tanggetada",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Toari",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Watubangga",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Wolo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "419",
            "kecamatan" => "Wundulako",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Aere",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Dangia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Ladongi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Lalolae",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Lambandia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Loea",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Mowewe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Poli Polia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Tinondo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Tirawuta",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Ueesi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "420",
            "kecamatan" => "Uluiwoi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Batu Putih",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Katoi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Kodeoha",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Lambai",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Lasusua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Ngapa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Pakue",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Pakue Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Pakue Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Porehu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Rante Angin",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Tiwu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Tolala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Watunohu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "421",
            "kecamatan" => "Wawo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Abuki",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Amonggedo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Anggaberi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Asinua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Besulutu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Bondoala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Kapoiala (Kapoyala)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Konawe",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Lalonggasumeeto",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Lambuya",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Latoma",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Meluhu",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Onembute",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Pondidaha",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Puriala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Routa",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Sampara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Soropia",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Tongauna",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Uepai (Uwepai)",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Unaaha",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Wawotobi",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "422",
            "kecamatan" => "Wonggeduku",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Barat",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Selatan",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Tengah",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Tenggara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Timur",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Timur Laut",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "423",
            "kecamatan" => "Wawonii Utara",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Andoolo",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Angata",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Baito",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Basala",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Benua",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Buke",
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Kolono",
        ]);

                $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Konda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Laeya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Lainea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Lalembuu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Landono"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Laonti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Moramo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Moramo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Mowila"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Palangga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Palangga Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Ranomeeto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Ranomeeto Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Tinanggea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "424",
            "kecamatan" => "Wolasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Andowia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Asera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Langgikima"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Lasolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Lembo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Molawe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Motui"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Oheo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Sawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "425",
            "kecamatan" => "Wiwirano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Batalaiwaru (Batalaiworu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Batukara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Bone (Bone Tondo)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Duruka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Kabangka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Kabawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Katobu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Kontu Kowuna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Kontunaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Lasalepa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Lohia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Maligano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Marobo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Napabalano"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Parigi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Pasi Kolaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Pasir Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Tongkuno"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Tongkuno Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Towea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Wakorumba Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "426",
            "kecamatan" => "Watopute"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Barangka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Kusambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Lawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Maginti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Napano Kusambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Sawerigadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Tiworo Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Tiworo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Tiworo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Tiworo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "427",
            "kecamatan" => "Wadaga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Binongko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Kaledupa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Kaledupa Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Togo Binongko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Tomia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Tomia Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Wangi-Wangi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "428",
            "kecamatan" => "Wangi-Wangi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Batupoaro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Betoambari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Bungi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Kokalukuna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Lea-Lea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Murhum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Sora Walio (Sorowalio)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "429",
            "kecamatan" => "Wolio"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Abeli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Baruga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Kadia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Kambu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Kendari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Kendari Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Mandonga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Poasia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Puuwatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "430",
            "kecamatan" => "Wua-Wua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Bilalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Bolaang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Bolaang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga Tenggara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Dumoga Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Lolak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Lolayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Passi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Passi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Poigar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "431",
            "kecamatan" => "Sang Tombolang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "432",
            "kecamatan" => "Bolaang Uki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "432",
            "kecamatan" => "Pinolosian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "432",
            "kecamatan" => "Pinolosian Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "432",
            "kecamatan" => "Pinolosian Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "432",
            "kecamatan" => "Posigadan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "433",
            "kecamatan" => "Kotabunan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "433",
            "kecamatan" => "Modayag"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "433",
            "kecamatan" => "Modayag Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "433",
            "kecamatan" => "Nuangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "433",
            "kecamatan" => "Tutuyan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Bintauna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Bolang Itang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Bolang Itang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Kaidipang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Pinogaluman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "434",
            "kecamatan" => "Sangkub"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Kendahe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Kepulauan Marore"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Manganitu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Manganitu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Nusa Tabukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tabukan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tabukan Selatan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tabukan Selatan Tenggara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tabukan Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tabukan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tahuna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tahuna Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tahuna Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tamako"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "435",
            "kecamatan" => "Tatoareng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Biaro"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Barat Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Barat Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Siau Timur Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Tagulandang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Tagulandang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "436",
            "kecamatan" => "Tagulandang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Beo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Beo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Beo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Damao (Damau)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Essang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Essang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Gemeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Kabaruan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Kalongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Lirung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Melonguane"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Melonguane Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Miangas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Moronge"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Nanusa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Pulutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Rainis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Salibabu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "437",
            "kecamatan" => "Tampan Amma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Eris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kakas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kakas Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kawangkoan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kawangkoan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kawangkoan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Kombi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Langowan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Langowan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Langowan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Langowan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Lembean Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Mandolang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Pineleng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Remboken"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Sonder"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tombariri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tombariri Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tombulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tompaso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tompaso Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tondano Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tondano Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tondano Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "438",
            "kecamatan" => "Tondano Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Amurang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Amurang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Amurang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Kumelembuai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Maesaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Modoinding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Motoling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Motoling Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Motoling Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Ranoyapo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Sinonsayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Suluun Tareran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Tareran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Tatapaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Tenga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Tompaso Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "439",
            "kecamatan" => "Tumpaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Belang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Pasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Pusomaen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Ratahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Ratahan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Ratatotok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Silian Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Tombatu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Tombatu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Tombatu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Touluaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "440",
            "kecamatan" => "Touluaan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Airmadidi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Dimembe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Kalawat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Kauditan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Kema"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Likupang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Likupang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Likupang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Talawaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "441",
            "kecamatan" => "Wori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Aertembaga (Bitung Timur)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Girian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Lembeh Selatan (Bitung Selatan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Lembeh Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Madidir (Bitung Tengah)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Maesa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Matuari (Bitung Barat)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "442",
            "kecamatan" => "Ranowulu (Bitung Utara)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "443",
            "kecamatan" => "Kotamobagu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "443",
            "kecamatan" => "Kotamobagu Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "443",
            "kecamatan" => "Kotamobagu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "443",
            "kecamatan" => "Kotamobagu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Bunaken"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Bunaken Kepulauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Malalayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Mapanget"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Paal Dua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Sario"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Singkil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Tikala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Tuminiting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Wanea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "444",
            "kecamatan" => "Wenang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "445",
            "kecamatan" => "Tomohon Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "445",
            "kecamatan" => "Tomohon Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "445",
            "kecamatan" => "Tomohon Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "445",
            "kecamatan" => "Tomohon Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "445",
            "kecamatan" => "Tomohon Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Ampek Nagari (IV Nagari )"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Banuhampu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Baso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Candung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "IV Angkat Candung (Ampek Angkek)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "IV Koto (Ampek Koto)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Kamang Magek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Lubuk Basung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Malakak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Matur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Palembayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Palupuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Sungai Pua (Puar)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Tanjung Mutiara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Tanjung Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "446",
            "kecamatan" => "Tilatang Kamang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Asam Jujuhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Koto Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Koto Besar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Koto Salak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Padang Laweh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Pulau Punjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Sembilan Koto"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Sitiung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Sungai Rumbai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Timpeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "447",
            "kecamatan" => "Tiumang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Pagai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Pagai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Siberut Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Siberut Barat Daya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Siberut Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Siberut Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Siberut Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Sikakap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Sipora Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "448",
            "kecamatan" => "Sipora Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Akabiluru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Bukik Barisan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Guguak (Gugu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Gunuang Omeh (Gunung Mas)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Harau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Kapur IX/Sembilan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Lareh Sago Halaban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Luak (Luhak)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Mungka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Pangkalan Koto Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Payakumbuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Situjuah Limo/Lima Nagari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "449",
            "kecamatan" => "Suliki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "2 X 11 Enam Lingkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "2 X 11 Kayu Tanam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Batang Anai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Batang Gasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Enam Lingkung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "IV Koto Aur Malintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Lubuk Alung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Nan Sabaris"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Padang Sago"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Patamuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Sintuk/Sintuak Toboh Gadang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Sungai Geringging/Garingging"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Sungai Limau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "Ulakan Tapakih/Tapakis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "V Koto Kampung Dalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "V Koto Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "450",
            "kecamatan" => "VII Koto Sungai Sarik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Bonjol"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Duo Koto (II Koto)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Lubuk Sikaping"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Mapat Tunggul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Mapat Tunggul Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Padang Gelugur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Panti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Rao"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Rao Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Rao Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Simpang Alahan Mati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "451",
            "kecamatan" => "Tigo Nagari (III Nagari)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Gunung Tuleh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Kinali"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Koto Balingka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Lembah Melintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Luhak Nan Duo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Pasaman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Ranah Batahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Sasak Ranah Pasisir/Pesisie"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Sei Beremas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Sungai Aur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "452",
            "kecamatan" => "Talamau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Airpura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Basa Ampek Balai Tapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Batang Kapas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Bayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "IV Jurai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "IV Nagari Bayang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Koto XI Tarusan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Lengayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Linggo Sari Baganti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Lunang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Pancung Soal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Ranah Ampek Hulu Tapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Ranah Pesisir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Silaut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "453",
            "kecamatan" => "Sutera"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "IV Nagari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Kamang Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Koto VII"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Kupitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Lubuak Tarok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Sijunjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Sumpur Kudus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "454",
            "kecamatan" => "Tanjung Gadang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Bukit Sundi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Danau Kembar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Gunung Talang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Hiliran Gumanti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "IX Koto Sungai Lasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Junjung Sirih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Kubung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Lembah Gumanti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Lembang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Pantai Cermin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Payung Sekaki"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "Tigo Lurah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "X Koto Diatas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "455",
            "kecamatan" => "X Koto Singkarak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Koto Parik Gadang Diateh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Pauh Duo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Sangir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Sangir Balai Janggo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Sangir Batang Hari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Sangir Jujuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "456",
            "kecamatan" => "Sungai Pagu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Batipuh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Batipuh Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Lima Kaum"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Lintau Buo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Lintau Buo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Padang Ganting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Pariangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Rambatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Salimpaung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Sepuluh Koto (X Koto)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Sungai Tarab"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Sungayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Tanjung Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "457",
            "kecamatan" => "Tanjung Emas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "458",
            "kecamatan" => "Aur Birugo Tigo Baleh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "458",
            "kecamatan" => "Guguk Panjang (Guguak Panjang)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "458",
            "kecamatan" => "Mandiangin Koto Selayan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Bungus Teluk Kabung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Koto Tangah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Kuranji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Lubuk Begalung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Lubuk Kilangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Nanggalo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Padang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Padang Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Padang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Padang Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "459",
            "kecamatan" => "Pauh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "460",
            "kecamatan" => "Padang Panjang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "460",
            "kecamatan" => "Padang Panjang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "461",
            "kecamatan" => "Pariaman Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "461",
            "kecamatan" => "Pariaman Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "461",
            "kecamatan" => "Pariaman Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "461",
            "kecamatan" => "Pariaman Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "462",
            "kecamatan" => "Lamposi Tigo Nagari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "462",
            "kecamatan" => "Payakumbuh Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "462",
            "kecamatan" => "Payakumbuh Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "462",
            "kecamatan" => "Payakumbuh Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "462",
            "kecamatan" => "Payakumbuh Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "463",
            "kecamatan" => "Barangin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "463",
            "kecamatan" => "Lembah Segar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "463",
            "kecamatan" => "Silungkang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "463",
            "kecamatan" => "Talawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "464",
            "kecamatan" => "Lubuk Sikarah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "464",
            "kecamatan" => "Tanjung Harapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Air Kumbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Air Salek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Banyuasin I"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Banyuasin II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Banyuasin III"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Betung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Makarti Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Muara Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Muara Sugihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Muara Telang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Pulau Rimau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Rambutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Rantau Bayur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Sembawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Suak Tapeh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Sumber Marga Telang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Talang Kelapa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Tanjung Lago"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "465",
            "kecamatan" => "Tungkal Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Lintang Kanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Muara Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Pasemah Air Keruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Pendopo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Pendopo Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Saling"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Sikap Dalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Talang Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Tebing Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "466",
            "kecamatan" => "Ulu Musi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Gumay Talang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Gumay Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Jarai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Kikim Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Kikim Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Kikim Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Kikim Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Kota Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Lahat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Merapi Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Merapi Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Merapi Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Muarapayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Mulak Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Pagar Gunung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Pajar Bulan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Pseksu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Pulau Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Sukamerindu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Tanjung Sakti Pumi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Tanjung Sakti Pumu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "467",
            "kecamatan" => "Tanjung Tebat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Belida Darat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Belimbing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Benakat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Gelumbang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Gunung Megang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Kelekar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Lawang Kidul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Lembak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Lubai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Lubai Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Muara Belida"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Muara Enim"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Rambang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Rambang Dangku"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Semende Darat Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Semende Darat Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Semende Darat Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Sungai Rotan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Tanjung Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "468",
            "kecamatan" => "Ujan Mas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Babat Supat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Babat Toman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Batanghari Leko"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Bayung Lencir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Keluang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Lais"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Lalan (Sungai Lalan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Lawang Wetan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Plakat Tinggi (Pelakat Tinggi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Sanga Desa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Sekayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Sungai Keruh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Sungai Lilin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "469",
            "kecamatan" => "Tungkal Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "BTS Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Jaya Loka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Megang Sakti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Muara Beliti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Muara Kelingi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Muara Lakitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Purwodadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Selangit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Sukakarya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Suku Tengah Lakitan Ulu Terawas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Sumber Harta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Tiang Pumpung Kepungut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Tuah Negeri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "470",
            "kecamatan" => "Tugumulyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Karang Dapo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Karang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Nibung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Rawas Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Rawas Ulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Rupit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "471",
            "kecamatan" => "Ulu Rawas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Indralaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Indralaya Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Indralaya Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Kandis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Lubuk Keliat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Muara Kuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Payaraman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Pemulutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Pemulutan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Pemulutan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Rambang Kuang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Rantau Alai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Rantau Panjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Sungai Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Tanjung Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "472",
            "kecamatan" => "Tanjung Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Air Sugihan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Cengal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Jejawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Kayu Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Lempuing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Lempuing Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Mesuji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Mesuji Makmur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Mesuji Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Pampangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Pangkalan Lampam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Pedamaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Pedamaran Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Sirah Pulau Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Sungai Menang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Tanjung Lubuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Teluk Gelam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "473",
            "kecamatan" => "Tulung Selapan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Baturaja Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Baturaja Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Lengkiti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Lubuk Batang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Lubuk Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Muara Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Pengandonan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Peninjauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Semidang Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Sinar Peninjauan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Sosoh Buay Rayap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "474",
            "kecamatan" => "Ulu Ogan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Banding Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buana Pemaca"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buay Pemaca"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buay Pematang Ribu Ranau Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buay Rawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buay Runjung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Buay Sandang Aji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Kisam Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Kisam Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Mekakau Ilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Muaradua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Muaradua Kisam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Pulau Beringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Runjung Agung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Simpang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Sindang Danau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Sungai Are"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Tiga Dihaji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "475",
            "kecamatan" => "Warkuk Ranau Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang III"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang Madang Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Belitang Mulya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Buay Madang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Buay Madang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Buay Pemuka Bangsa Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Buay Pemuka Peliung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Bunga Mayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Cempaka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Jayapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Madang Suku I"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Madang Suku II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Madang Suku III"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Martapura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Semendawai Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Semendawai Suku III"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "476",
            "kecamatan" => "Semendawai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "477",
            "kecamatan" => "Abab"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "477",
            "kecamatan" => "Penukal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "477",
            "kecamatan" => "Penukal Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "477",
            "kecamatan" => "Talang Ubi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "477",
            "kecamatan" => "Tanah Abang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Barat Dua (II)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Barat Satu (I)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Selatan Dua (II)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Selatan Satu (I)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Timur Dua (II)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Timur Satu (I)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Utara Dua (II)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "478",
            "kecamatan" => "Lubuk Linggau Utara Satu (I)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "479",
            "kecamatan" => "Dempo Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "479",
            "kecamatan" => "Dempo Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "479",
            "kecamatan" => "Dempo Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "479",
            "kecamatan" => "Pagar Alam Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "479",
            "kecamatan" => "Pagar Alam Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Alang-Alang Lebar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Bukit Kecil"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Gandus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Ilir Barat I"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Ilir Barat II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Ilir Timur I"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Ilir Timur II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Kalidoni"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Kemuning"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Kertapati"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Plaju"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Sako"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Seberang Ulu I"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Seberang Ulu II"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Sematang Borang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "480",
            "kecamatan" => "Sukarami"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Cambai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Prabumulih Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Prabumulih Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Prabumulih Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Prabumulih Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "481",
            "kecamatan" => "Rambang Kapak Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Aek Kuasan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Aek Ledong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Aek Songsongan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Air Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Air Joman"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Bandar Pasir Mandoge"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Bandar Pulau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Buntu Pane"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Kota Kisaran Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Kota Kisaran Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Meranti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Pulau Rakyat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Pulo Bandring"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Rahuning"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Rawang Panca Arga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Sei Dadap"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Sei Kepayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Sei Kepayang Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Sei Kepayang Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Setia Janji"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Silau Laut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Simpang Empat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Tanjung Balai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Teluk Dalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "482",
            "kecamatan" => "Tinggi Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Air Putih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Limapuluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Medang Deras"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Sei Balai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Sei Suka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Talawi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "483",
            "kecamatan" => "Tanjung Tiram"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Berampu (Brampu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Gunung Sitember"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Lae Parira"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Parbuluan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Pegagan Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Sidikalang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Siempat Nempu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Siempat Nempu Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Siempat Nempu Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Silahi Sabungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Silima Pungga-Pungga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Sitinjo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Sumbul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Tanah Pinem"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "484",
            "kecamatan" => "Tiga Lingga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Bangun Purba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Batang Kuis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Beringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Biru-Biru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Deli Tua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Galang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Gunung Meriah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Hamparan Perak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Kutalimbaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Labuhan Deli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Lubuk Pakam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Namo Rambe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Pagar Merbau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Pancur Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Pantai Labu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Patumbak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Percut Sei Tuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Sibolangit"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Sinembah Tanjung Muda Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Sinembah Tanjung Muda Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Sunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "485",
            "kecamatan" => "Tanjung Morawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Bakti Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Dolok Sanggul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Lintong Nihuta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Onan Ganjang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Pakkat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Paranginan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Parlilitan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Pollung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Sijama Polang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "486",
            "kecamatan" => "Tara Bintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Barus Jahe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Brastagi (Berastagi)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Dolat Rayat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Juhar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Kabanjahe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Kuta Buluh"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Laubaleng"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Mardinding"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Merdeka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Merek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Munte"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Nama Teran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Payung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Simpang Empat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Tiga Binanga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Tiga Panah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "487",
            "kecamatan" => "Tiganderket"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Bilah Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Bilah Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Bilah Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Panai Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Panai Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Panai Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Pangkatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Rantau Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "488",
            "kecamatan" => "Rantau Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "489",
            "kecamatan" => "Kampung Rakyat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "489",
            "kecamatan" => "Kota Pinang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "489",
            "kecamatan" => "Sei/Sungai Kanan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "489",
            "kecamatan" => "Silangkitang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "489",
            "kecamatan" => "Torgamba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Aek Kuo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Aek Natas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Kualuh Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Kualuh Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Kualuh Leidong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Kualuh Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Marbau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "490",
            "kecamatan" => "Na IX-X"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Babalan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Bahorok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Batang Serangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Besitang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Binjai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Brandan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Gebang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Hinai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Kuala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Kutambaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Padang Tualang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Pangkalan Susu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Pematang Jaya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Salapian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Sawit Seberang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Secanggang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Sei Binge (Bingai)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Sei Lepan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Selesai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Sirapit (Serapit)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Stabat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Tanjungpura"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "491",
            "kecamatan" => "Wampu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Batahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Batang Natal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Bukit Malintang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Huta Bargot"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Kotanopan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Lembah Sorik Marapi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Lingga Bayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Muara Batang Gadis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Muara Sipongi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Naga Juang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Natal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Pakantan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Panyabungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Panyabungan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Panyabungan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Panyabungan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Panyabungan Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Puncak Sorik Marapi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Ranto Baek"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Siabu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Sinunukan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Tambangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "492",
            "kecamatan" => "Ulu Pungkut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Bawolato"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Botomuzoi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Gido"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Hili Serangkai (Hilisaranggu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Hiliduho"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Idano Gawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Ma'u"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Sogae Adu (Sogaeadu)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Somolo-Molo (Samolo)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "493",
            "kecamatan" => "Ulugawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Lahomi (Gahori)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Lolofitu Moi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Mandrehe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Mandrehe Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Mandrehe Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Moro'o"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Sirombu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "494",
            "kecamatan" => "Ulu Moro'o (Ulu Narwo)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Amandraya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Aramo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Boronadu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Fanayama"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Gomo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Hibala"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Hilimegai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Hilisalawa'ahe (Hilisalawaahe)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Huruna"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Lahusa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Lolomatua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Lolowau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Maniamolo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Mazino"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Mazo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "O'o'u (Oou)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Onohazumba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Pulau-Pulau Batu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Pulau-Pulau Batu Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Pulau-Pulau Batu Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Pulau-Pulau Batu Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Sidua'ori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Simuk"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Somambawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Susua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Tanah Masa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Teluk Dalam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Toma"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Ulunoyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Ulususua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "495",
            "kecamatan" => "Umbunasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Afulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Alasa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Alasa Talumuzoi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Lahewa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Lahewa Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Lotu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Namohalu Esiwa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Sawo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Sitolu Ori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Tugala Oyo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "496",
            "kecamatan" => "Tuhemberua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Aek Nabara Barumun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Barumun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Barumun Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Barumun Tengah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Batang Lubu Sutam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Huristak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Huta Raja Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Lubuk Barumun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Sihapas Barumun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Sosa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Sosopan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "497",
            "kecamatan" => "Ulu Barumun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Batang Onang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Dolok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Dolok Sigompulon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Halongonan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Hulu Sihapas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Padang Bolak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Padang Bolak Julu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Portibi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "498",
            "kecamatan" => "Simangambat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Kerajaan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Pagindar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Pergetteng Getteng Sengkut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Salak"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Siempat Rube"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Sitellu Tali Urang Jehe"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Sitellu Tali Urang Julu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "499",
            "kecamatan" => "Tinada"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Harian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Nainggolan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Onan Runggu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Palipi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Pangururan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Ronggur Nihuta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Sianjur Mula Mula"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Simanindo"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "500",
            "kecamatan" => "Sitio-tio"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Bandar Khalifah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Bintang Bayu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Dolok Masihul"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Dolok Merawan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Kotarih"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Pantai Cermin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Pegajahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Perbaungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Sei Bamban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Sei Rampah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Serba Jadi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Silinda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Sipispis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Tanjung Beringin"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Tebing Syahbandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Tebing Tinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "501",
            "kecamatan" => "Teluk Mengkudu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Bandar Huluan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Bandar Masilam"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Bosar Maligas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Dolok Batu Nanggar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Dolok Panribuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Dolok Pardamean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Dolok Silau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Girsang Sipangan Bolon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Gunung Malela"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Gunung Maligas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Haranggaol Horison"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Hatonduhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Huta Bayu Raja"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Jawa Maraja Bah Jambi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Jorlang Hataran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Panei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Panombeian Panei"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Pematang Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Pematang Sidamanik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Pematang Silima Huta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Purba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Raya"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Raya Kahean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Siantar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Sidamanik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Silimakuta"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Silou Kahean"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Tanah Jawa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Tapian Dolok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "502",
            "kecamatan" => "Ujung Padang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Aek Bilah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Angkola Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Angkola Sangkunur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Angkola Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Angkola Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Arse"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Batang Angkola"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Batang Toru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Marancar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Muara Batang Toru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Saipar Dolok Hole"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Sayur Matinggi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Sipirok"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "503",
            "kecamatan" => "Tano Tombangan Angkola"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Andam Dewi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Badiri"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Barus"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Barus Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Kolang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Lumut"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Manduamas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Pandan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Pasaribu Tobing"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Pinangsori"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sarudik"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sibabangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sirandorung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sitahuis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sorkam"
        ]);

                $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sorkam Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Sosor Gadong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Suka Bangun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Tapian Nauli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "504",
            "kecamatan" => "Tukka"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Adian Koting"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Garoga"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Muara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Pagaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Pahae Jae"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Pahae Julu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Pangaribuan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Parmonangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Purbatua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Siatas Barita"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Siborong-Borong"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Simangumban"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Sipahutar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Sipoholon"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "505",
            "kecamatan" => "Tarutung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Ajibata"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Balige"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Bonatua Lunasi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Bor-Bor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Habinsaran"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Laguboti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Lumban Julu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Nassau"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Parmaksian"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Pintu Pohan Meranti"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Porsea"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Siantar Narumonda"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Sigumpar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Silaen"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Tampahan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "506",
            "kecamatan" => "Uluan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "507",
            "kecamatan" => "Binjai Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "507",
            "kecamatan" => "Binjai Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "507",
            "kecamatan" => "Binjai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "507",
            "kecamatan" => "Binjai Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "507",
            "kecamatan" => "Binjai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli Alo'oa"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli Idanoi"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "508",
            "kecamatan" => "Gunungsitoli Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Amplas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Area"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Baru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Belawan Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Deli"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Denai"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Helvetia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Johor"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Labuhan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Maimun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Marelan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Perjuangan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Petisah"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Polonia"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Selayang"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Sunggal"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Tembung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "509",
            "kecamatan" => "Medan Tuntungan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Angkola Julu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Batunadua"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Hutaimbaru"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Tenggara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "510",
            "kecamatan" => "Padang Sidempuan Utara (Padangsidimpuan)"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Barat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Marihat"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Marimbun"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Martoba"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Sitalasari"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "511",
            "kecamatan" => "Siantar Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "512",
            "kecamatan" => "Sibolga Kota"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "512",
            "kecamatan" => "Sibolga Sambas"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "512",
            "kecamatan" => "Sibolga Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "512",
            "kecamatan" => "Sibolga Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Datuk Bandar"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Datuk Bandar Timur"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Sei Tualang Raso"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Tanjung Balai Selatan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Tanjung Balai Utara"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "513",
            "kecamatan" => "Teluk Nibung"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "514",
            "kecamatan" => "Bajenis"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "514",
            "kecamatan" => "Padang Hilir"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "514",
            "kecamatan" => "Padang Hulu"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "514",
            "kecamatan" => "Rambutan"
        ]);

        $this->insert('{{%kecamatan}}', [
            "kd_kabkot" => "514",
            "kecamatan" => "Tebing Tinggi Kota"
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%kabupaten_kota}}`
        $this->dropForeignKey(
            '{{%fk-kecamatan-kd_kabkot}}',
            '{{%kecamatan}}'
        );

        // drops index for column `kd_kabkot`
        $this->dropIndex(
            '{{%idx-kecamatan-kd_kabkot}}',
            '{{%kecamatan}}'
        );

        $this->dropTable('{{%kecamatan}}');
    }
}
