<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kabupaten_kota}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%provinsi}}`
 */
class m201113_102202_create_kabupaten_kota_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kabupaten_kota}}', [
            'id' => $this->primaryKey(),
            'kd_provinsi' => $this->integer()->notNull(),
            'kabkot' => $this->string(100)->notNull(),
            'ibukota' => $this->string(100),
            'k_bsni' => $this->string(3),
        ]);

        // creates index for column `kd_provinsi`
        $this->createIndex(
            '{{%idx-kabupaten_kota-kd_provinsi}}',
            '{{%kabupaten_kota}}',
            'kd_provinsi'
        );

        // add foreign key for table `{{%provinsi}}`
        $this->addForeignKey(
            '{{%fk-kabupaten_kota-kd_provinsi}}',
            '{{%kabupaten_kota}}',
            'kd_provinsi',
            '{{%provinsi}}',
            'id',
            'CASCADE'
        );

        // insert data row
        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Barat',
            'ibukota' => 'Meulaboh',
            'k_bsni' => 'MBO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Barat Daya',
            'ibukota' => 'Blangpidie',
            'k_bsni' => 'BPD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Besar',
            'ibukota' => 'Jantho',
            'k_bsni' => 'JTH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Jaya',
            'ibukota' => 'Calang',
            'k_bsni' => 'CAG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Selatan',
            'ibukota' => 'Tapak Tuan',
            'k_bsni' => 'TTN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Singkil',
            'ibukota' => 'Singkil',
            'k_bsni' => 'SKL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Tamiang',
            'ibukota' => 'Karang Baru',
            'k_bsni' => 'KRB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Tengah',
            'ibukota' => 'Takengon',
            'k_bsni' => 'TKN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Tenggara',
            'ibukota' => 'Kutacane',
            'k_bsni' => 'KTN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Timur',
            'ibukota' => 'Langsa',
            'k_bsni' => 'LGS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Aceh Utara',
            'ibukota' => 'Lhoksukon',
            'k_bsni' => 'LSK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Bener Meriah',
            'ibukota' => 'Simpang Tiga Redelong',
            'k_bsni' => 'STR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Bireuen',
            'ibukota' => 'Bireuen',
            'k_bsni' => 'BIR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Gayo Lues',
            'ibukota' => 'Blangkejeren',
            'k_bsni' => 'BKJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Nagan Raya',
            'ibukota' => 'Suka Makmue',
            'k_bsni' => 'SKM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Pidie',
            'ibukota' => 'Sigli',
            'k_bsni' => 'SGI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Pidie Jaya',
            'ibukota' => 'Meureundu',
            'k_bsni' => 'MRN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kabupaten Simeulue',
            'ibukota' => 'Sinabang',
            'k_bsni' => 'SNB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kota Banda Aceh',
            'ibukota' => 'Banda Aceh',
            'k_bsni' => 'BNA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kota Langsa',
            'ibukota' => 'Langsa',
            'k_bsni' => 'LGS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kota Lhokseumawe',
            'ibukota' => 'Lhokseumawe',
            'k_bsni' => 'LSM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kota Sabang',
            'ibukota' => 'Sabang',
            'k_bsni' => 'SAB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '1',
            'kabkot' => 'Kota Subulussalam',
            'ibukota' => 'Subulussalam',
            'k_bsni' => 'SUS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Badung',
            'ibukota' => 'Mengwi',
            'k_bsni' => 'MGW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Bangli',
            'ibukota' => 'Bangli',
            'k_bsni' => 'BLI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Buleleng',
            'ibukota' => 'Singaraja',
            'k_bsni' => 'SGR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Gianyar',
            'ibukota' => 'Gianyar',
            'k_bsni' => 'GIN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Jembrana',
            'ibukota' => 'Negara',
            'k_bsni' => 'NGA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Karangasem',
            'ibukota' => 'Karangasem',
            'k_bsni' => 'KRA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Klungkung',
            'ibukota' => 'Semarapura',
            'k_bsni' => 'SRP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kabupaten Tabanan',
            'ibukota' => 'Tabanan',
            'k_bsni' => 'TAB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '17',
            'kabkot' => 'Kota Denpasar',
            'ibukota' => 'Denpasar',
            'k_bsni' => 'DPR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Bangka',
            'ibukota' => 'Sungai Liat',
            'k_bsni' => 'SGL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Bangka Barat',
            'ibukota' => 'Mentok',
            'k_bsni' => 'MTK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Bangka Selatan',
            'ibukota' => 'Toboali',
            'k_bsni' => 'TBL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Bangka Tengah',
            'ibukota' => 'Koba',
            'k_bsni' => 'KBA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Belitung',
            'ibukota' => 'Tanjung Pandan',
            'k_bsni' => 'TDN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kabupaten Belitung Timur',
            'ibukota' => 'Manggar',
            'k_bsni' => 'MGR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '9',
            'kabkot' => 'Kota Pangkal Pinang',
            'ibukota' => 'Pangkal Pinang',
            'k_bsni' => 'PGP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kabupaten Lebak',
            'ibukota' => 'Rangkas Bitung',
            'k_bsni' => 'RKB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kabupaten Pandeglang',
            'ibukota' => 'Pandeglang',
            'k_bsni' => 'PDG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kabupaten Serang',
            'ibukota' => 'Serang',
            'k_bsni' => 'SRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kabupaten Tangerang',
            'ibukota' => 'Tigaraksa',
            'k_bsni' => 'TGR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kota Cilegon',
            'ibukota' => 'Cilegon',
            'k_bsni' => 'CLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kota Serang',
            'ibukota' => 'Serang',
            'k_bsni' => 'SRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kota Tangerang',
            'ibukota' => 'Tangerang',
            'k_bsni' => 'TNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '16',
            'kabkot' => 'Kota Tangerang Selatan',
            'ibukota' => 'Ciputat',
            'k_bsni' => 'CPT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Bengkulu Selatan',
            'ibukota' => 'Manna',
            'k_bsni' => 'MNA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Bengkulu Tengah',
            'ibukota' => 'Karang Tinggi',
            'k_bsni' => 'KRT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Bengkulu Utara',
            'ibukota' => 'Arga Makmur',
            'k_bsni' => 'AGM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Kaur',
            'ibukota' => 'Bintuhan',
            'k_bsni' => 'BHN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Kepahiang',
            'ibukota' => 'Kepahiang',
            'k_bsni' => 'KPH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Lebong',
            'ibukota' => 'Tubei',
            'k_bsni' => 'TUB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Muko Muko',
            'ibukota' => 'Mukomuko',
            'k_bsni' => 'MKM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Rejang Lebong',
            'ibukota' => 'Curup',
            'k_bsni' => 'CRP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kabupaten Seluma',
            'ibukota' => 'Tais',
            'k_bsni' => 'TAS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '7',
            'kabkot' => 'Kota Bengkulu',
            'ibukota' => 'Bengkulu',
            'k_bsni' => 'BGL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '14',
            'kabkot' => 'Kabupaten Bantul',
            'ibukota' => 'Bantul',
            'k_bsni' => 'BTL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '14',
            'kabkot' => 'Kabupaten Gunung Kidul',
            'ibukota' => 'Wonosari',
            'k_bsni' => 'WNO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '14',
            'kabkot' => 'Kabupaten Kulon Progo',
            'ibukota' => 'Wates',
            'k_bsni' => 'WAT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '14',
            'kabkot' => 'Kabupaten Sleman',
            'ibukota' => 'Sleman',
            'k_bsni' => 'SMN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '14',
            'kabkot' => 'Kota Yogyakarta',
            'ibukota' => 'Yogyakarta',
            'k_bsni' => 'YYK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kabupaten Adm. Kepulauan Seribu',
            'ibukota' => 'Kepulauan Seribu Utara',
            'k_bsni' => 'KSU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kota Adm. Jakarta Barat',
            'ibukota' => 'Grogol Petamburan',
            'k_bsni' => 'GGP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kota Adm. Jakarta Pusat',
            'ibukota' => 'Tanah Abang',
            'k_bsni' => 'TNA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kota Adm. Jakarta Selatan',
            'ibukota' => 'Kebayoran Baru',
            'k_bsni' => 'KYB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kota Adm. Jakarta Timur',
            'ibukota' => 'Cakung',
            'k_bsni' => 'CKG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '11',
            'kabkot' => 'Kota Adm. Jakarta Utara',
            'ibukota' => 'Tanjung Priok',
            'k_bsni' => 'TJP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kabupaten Boalemo',
            'ibukota' => 'Tilamuta',
            'k_bsni' => 'TMT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kabupaten Bone Bolango',
            'ibukota' => 'Suwawa',
            'k_bsni' => 'SWW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kabupaten Gorontalo',
            'ibukota' => 'Limboto',
            'k_bsni' => 'LBT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kabupaten Gorontalo Utara',
            'ibukota' => 'Kwandang',
            'k_bsni' => 'KWD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kabupaten Pohuwato',
            'ibukota' => 'Marisa',
            'k_bsni' => 'MAR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '29',
            'kabkot' => 'Kota Gorontalo',
            'ibukota' => 'Gorontalo',
            'k_bsni' => 'GTO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Batanghari',
            'ibukota' => 'Muara Bulian',
            'k_bsni' => 'MBN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Bungo',
            'ibukota' => 'Muara Bungo',
            'k_bsni' => 'MRB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Kerinci',
            'ibukota' => 'Sungai Penuh',
            'k_bsni' => 'SPN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Merangin',
            'ibukota' => 'Bangko',
            'k_bsni' => 'BKO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Muaro Jambi',
            'ibukota' => 'Sengeti',
            'k_bsni' => 'SNT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Sarolangun',
            'ibukota' => 'Sarolangun',
            'k_bsni' => 'SRL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Tanjung Jabung Barat',
            'ibukota' => 'Kuala Tungkal',
            'k_bsni' => 'KLT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Tanjung Jabung Timur',
            'ibukota' => 'Muara Sabak',
            'k_bsni' => 'MSK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kabupaten Tebo',
            'ibukota' => 'Muara Tebo',
            'k_bsni' => 'MRT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kota Jambi',
            'ibukota' => 'Jambi',
            'k_bsni' => 'JMB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '5',
            'kabkot' => 'Kota Sungai Penuh',
            'ibukota' => 'Sungai Penuh',
            'k_bsni' => 'SPN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Bandung',
            'ibukota' => 'Soreang',
            'k_bsni' => 'SOR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Bandung Barat',
            'ibukota' => 'Ngamprah',
            'k_bsni' => 'NPH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Bekasi',
            'ibukota' => 'Cikarang',
            'k_bsni' => 'CKR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Bogor',
            'ibukota' => 'Cibinong',
            'k_bsni' => 'CBI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Ciamis',
            'ibukota' => 'Ciamis',
            'k_bsni' => 'CMS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Cianjur',
            'ibukota' => 'Cianjur',
            'k_bsni' => 'CJR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Cirebon',
            'ibukota' => 'Sumber',
            'k_bsni' => 'SBR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Garut',
            'ibukota' => 'Garut',
            'k_bsni' => 'GRT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Indramayu',
            'ibukota' => 'Indramayu',
            'k_bsni' => 'IDM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Karawang',
            'ibukota' => 'Karawang',
            'k_bsni' => 'KWG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Kuningan',
            'ibukota' => 'Kuningan',
            'k_bsni' => 'KNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Majalengka',
            'ibukota' => 'Majalengka',
            'k_bsni' => 'MJL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Pangandaran',
            'ibukota' => 'Parigi',
            'k_bsni' => 'PAG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Purwakarta',
            'ibukota' => 'Purwakarta',
            'k_bsni' => 'PWK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Subang',
            'ibukota' => 'Subang',
            'k_bsni' => 'SNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Sukabumi',
            'ibukota' => 'Sukabumi',
            'k_bsni' => 'SBM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Sumedang',
            'ibukota' => 'Sumedang',
            'k_bsni' => 'SMD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kabupaten Tasikmalaya',
            'ibukota' => 'Singaparna',
            'k_bsni' => 'SPA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Bandung',
            'ibukota' => 'Bandung',
            'k_bsni' => 'BDG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Banjar',
            'ibukota' => 'Banjar',
            'k_bsni' => 'BJR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Bekasi',
            'ibukota' => 'Bekasi',
            'k_bsni' => 'BKS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Bogor',
            'ibukota' => 'Bogor',
            'k_bsni' => 'BGR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Cimahi',
            'ibukota' => 'Cimahi',
            'k_bsni' => 'CMH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Cirebon',
            'ibukota' => 'Cirebon',
            'k_bsni' => 'CBN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Depok',
            'ibukota' => 'Depok',
            'k_bsni' => 'DPK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Sukabumi',
            'ibukota' => 'Sukabumi',
            'k_bsni' => 'SKB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '12',
            'kabkot' => 'Kota Tasikmalaya',
            'ibukota' => 'Tasikmalaya',
            'k_bsni' => 'TSM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Banjarnegara',
            'ibukota' => 'Banjarnegara',
            'k_bsni' => 'BNR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Banyumas',
            'ibukota' => 'Purwokerto',
            'k_bsni' => 'PWT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Batang',
            'ibukota' => 'Batang',
            'k_bsni' => 'BTG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Blora',
            'ibukota' => 'Blora',
            'k_bsni' => 'BLA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Boyolali',
            'ibukota' => 'Boyolali',
            'k_bsni' => 'BYL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Brebes',
            'ibukota' => 'Brebes',
            'k_bsni' => 'BBS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Cilacap',
            'ibukota' => 'Cilacap',
            'k_bsni' => 'CLP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Demak',
            'ibukota' => 'Demak',
            'k_bsni' => 'DMK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Grobogan',
            'ibukota' => 'Purwodadi',
            'k_bsni' => 'PWD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Jepara',
            'ibukota' => 'Jepara',
            'k_bsni' => 'JPA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Karanganyar',
            'ibukota' => 'Karanganyar',
            'k_bsni' => 'KRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Kebumen',
            'ibukota' => 'Kebumen',
            'k_bsni' => 'KBM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Kendal',
            'ibukota' => 'Kendal',
            'k_bsni' => 'KDL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Klaten',
            'ibukota' => 'Klaten',
            'k_bsni' => 'KLN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Kudus',
            'ibukota' => 'Kudus',
            'k_bsni' => 'KDS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Magelang',
            'ibukota' => 'Mungkid',
            'k_bsni' => 'MKD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Pati',
            'ibukota' => 'Pati',
            'k_bsni' => 'PTI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Pekalongan',
            'ibukota' => 'Kajen',
            'k_bsni' => 'KJN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Pemalang',
            'ibukota' => 'Pemalang',
            'k_bsni' => 'PML'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Purbalingga',
            'ibukota' => 'Purbalingga',
            'k_bsni' => 'PBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Purworejo',
            'ibukota' => 'Purworejo',
            'k_bsni' => 'PWR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Rembang',
            'ibukota' => 'Rembang',
            'k_bsni' => 'RBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Semarang',
            'ibukota' => 'Ungaran',
            'k_bsni' => 'UNR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Sragen',
            'ibukota' => 'Sragen',
            'k_bsni' => 'SGN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Sukoharjo',
            'ibukota' => 'Sukoharjo',
            'k_bsni' => 'SKH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Tegal',
            'ibukota' => 'Slawi',
            'k_bsni' => 'SLW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Temanggung',
            'ibukota' => 'Temanggung',
            'k_bsni' => 'TMG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Wonogiri',
            'ibukota' => 'Wonogiri',
            'k_bsni' => 'WNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kabupaten Wonosobo',
            'ibukota' => 'Wonosobo',
            'k_bsni' => 'WSB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Magelang',
            'ibukota' => 'Magelang',
            'k_bsni' => 'MGG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Pekalongan',
            'ibukota' => 'Pekalongan',
            'k_bsni' => 'PKL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Salatiga',
            'ibukota' => 'Salatiga',
            'k_bsni' => 'SLT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Semarang',
            'ibukota' => 'Semarang',
            'k_bsni' => 'SMG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Surakarta (Solo)',
            'ibukota' => 'Surakarta',
            'k_bsni' => 'SKT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '13',
            'kabkot' => 'Kota Tegal',
            'ibukota' => 'Tegal',
            'k_bsni' => 'TGL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Bangkalan',
            'ibukota' => 'Bangkalan',
            'k_bsni' => 'BKL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Banyuwangi',
            'ibukota' => 'Banyuwangi',
            'k_bsni' => 'BYW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Blitar',
            'ibukota' => 'Kanigoro',
            'k_bsni' => 'KNR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Bojonegoro',
            'ibukota' => 'Bojonegoro',
            'k_bsni' => 'BJN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Bondowoso',
            'ibukota' => 'Bondowoso',
            'k_bsni' => 'BDW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Gresik',
            'ibukota' => 'Gresik',
            'k_bsni' => 'GSK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Jember',
            'ibukota' => 'Jember',
            'k_bsni' => 'JMR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Jombang',
            'ibukota' => 'Jombang',
            'k_bsni' => 'JBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Kediri',
            'ibukota' => 'Kediri',
            'k_bsni' => 'KDR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Lamongan',
            'ibukota' => 'Lamongan',
            'k_bsni' => 'LMG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Lumajang',
            'ibukota' => 'Lumajang',
            'k_bsni' => 'LMJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Madiun',
            'ibukota' => 'Mejayan',
            'k_bsni' => 'MJY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Magetan',
            'ibukota' => 'Magetan',
            'k_bsni' => 'MGT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Malang',
            'ibukota' => 'Kepanjen',
            'k_bsni' => 'KPN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Mojokerto',
            'ibukota' => 'Mojokerto',
            'k_bsni' => 'MJK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Nganjuk',
            'ibukota' => 'Nganjuk',
            'k_bsni' => 'NJK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Ngawi',
            'ibukota' => 'Ngawi',
            'k_bsni' => 'NGW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Pacitan',
            'ibukota' => 'Pacitan',
            'k_bsni' => 'PCT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Pamekasan',
            'ibukota' => 'Pamekasan',
            'k_bsni' => 'PMK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Pasuruan',
            'ibukota' => 'Pasuruan',
            'k_bsni' => 'PSR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Ponorogo',
            'ibukota' => 'Ponorogo',
            'k_bsni' => 'PNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Probolinggo',
            'ibukota' => 'Kraksaan',
            'k_bsni' => 'KRS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Sampang',
            'ibukota' => 'Sampang',
            'k_bsni' => 'SPG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Sidoarjo',
            'ibukota' => 'Sidoarjo',
            'k_bsni' => 'SDA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Situbondo',
            'ibukota' => 'Situbondo',
            'k_bsni' => 'SIT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Sumenep',
            'ibukota' => 'Sumenep',
            'k_bsni' => 'SMP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Trenggalek',
            'ibukota' => 'Trenggalek',
            'k_bsni' => 'TRK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Tuban',
            'ibukota' => 'Tuban',
            'k_bsni' => 'TBN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kabupaten Tulungagung',
            'ibukota' => 'Tulungagung',
            'k_bsni' => 'TLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Batu',
            'ibukota' => 'Batu',
            'k_bsni' => 'BTU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Blitar',
            'ibukota' => 'Blitar',
            'k_bsni' => 'BLT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Kediri',
            'ibukota' => 'Kediri',
            'k_bsni' => 'KDR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Madiun',
            'ibukota' => 'Madiun',
            'k_bsni' => 'MAD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Malang',
            'ibukota' => 'Malang',
            'k_bsni' => 'MLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Mojokerto',
            'ibukota' => 'Mojokerto',
            'k_bsni' => 'MJK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Pasuruan',
            'ibukota' => 'Pasuruan',
            'k_bsni' => 'PSN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Probolinggo',
            'ibukota' => 'Probolinggo',
            'k_bsni' => 'PBL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '15',
            'kabkot' => 'Kota Surabaya',
            'ibukota' => 'Surabaya',
            'k_bsni' => 'SBY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Bengkayang',
            'ibukota' => 'Bengkayang',
            'k_bsni' => 'BEK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Kapuas Hulu',
            'ibukota' => 'Putussibau',
            'k_bsni' => 'PTS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Kayong Utara',
            'ibukota' => 'Sukadane',
            'k_bsni' => 'SKD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Ketapang',
            'ibukota' => 'Ketapang',
            'k_bsni' => 'KTP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Kubu Raya',
            'ibukota' => 'Sungai Raya',
            'k_bsni' => 'SRY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Landak',
            'ibukota' => 'Ngabang',
            'k_bsni' => 'NBA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Melawi',
            'ibukota' => 'Nanga Pinoh',
            'k_bsni' => 'NGP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Mempawah',
            'ibukota' => 'Mempawah',
            'k_bsni' => 'MPW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Sambas',
            'ibukota' => 'Sambas',
            'k_bsni' => 'SBS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Sanggau',
            'ibukota' => 'Sanggau',
            'k_bsni' => 'SAG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Sekadau',
            'ibukota' => 'Sekadau',
            'k_bsni' => 'SED'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kabupaten Sintang',
            'ibukota' => 'Sintang',
            'k_bsni' => 'STG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kota Pontianak',
            'ibukota' => 'Pontianak',
            'k_bsni' => 'PTK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '20',
            'kabkot' => 'Kota Singkawang',
            'ibukota' => 'Singkawang',
            'k_bsni' => 'SKW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Balangan',
            'ibukota' => 'Paringin',
            'k_bsni' => 'PRN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Banjar',
            'ibukota' => 'Martapura',
            'k_bsni' => 'MTP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Barito Kuala',
            'ibukota' => 'Marabahan',
            'k_bsni' => 'MRH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Hulu Sungai Selatan',
            'ibukota' => 'Kandangan',
            'k_bsni' => 'KGN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Hulu Sungai Tengah',
            'ibukota' => 'Barabai',
            'k_bsni' => 'BRB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Hulu Sungai Utara',
            'ibukota' => 'Amuntai',
            'k_bsni' => 'AMT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Kotabaru',
            'ibukota' => 'Kotabaru',
            'k_bsni' => 'KBR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Tabalong',
            'ibukota' => 'Tanjung',
            'k_bsni' => 'TJG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Tanah Bumbu',
            'ibukota' => 'Batulicin',
            'k_bsni' => 'BLN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Tanah Laut',
            'ibukota' => 'Pelaihari',
            'k_bsni' => 'PLI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kabupaten Tapin',
            'ibukota' => 'Rantau',
            'k_bsni' => 'RTA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kota Banjarbaru',
            'ibukota' => 'Banjarbaru',
            'k_bsni' => 'BJB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '22',
            'kabkot' => 'Kota Banjarmasin',
            'ibukota' => 'Banjarmasin',
            'k_bsni' => 'BJM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Barito Selatan',
            'ibukota' => 'Buntok',
            'k_bsni' => 'BNT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Barito Timur',
            'ibukota' => 'Tamiang Layang',
            'k_bsni' => 'TML'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Barito Utara',
            'ibukota' => 'Muara Teweh',
            'k_bsni' => 'MTW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Gunung Mas',
            'ibukota' => 'Kuala Kurun',
            'k_bsni' => 'KKN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Kapuas',
            'ibukota' => 'Kuala Kapuas',
            'k_bsni' => 'KLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Katingan',
            'ibukota' => 'Kasongan',
            'k_bsni' => 'KSN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Kotawaringin Barat',
            'ibukota' => 'Pangkalan Bun',
            'k_bsni' => 'PBU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Kotawaringin Timur',
            'ibukota' => 'Sampit',
            'k_bsni' => 'SPT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Lamandau',
            'ibukota' => 'Nanga Bulik',
            'k_bsni' => 'NGB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Murung Raya',
            'ibukota' => 'Puruk Cahu',
            'k_bsni' => 'PRC'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Pulang Pisau',
            'ibukota' => 'Pulang Pisau',
            'k_bsni' => 'PPS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Seruyan',
            'ibukota' => 'Kuala Pembuang',
            'k_bsni' => 'KLP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kabupaten Sukamara',
            'ibukota' => 'Sukamara',
            'k_bsni' => 'SKR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '21',
            'kabkot' => 'Kota Palangka Raya',
            'ibukota' => 'Palangkaraya',
            'k_bsni' => 'PLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Berau',
            'ibukota' => 'Tanjung Redeb',
            'k_bsni' => 'TNR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Kutai Barat',
            'ibukota' => 'Sendawar',
            'k_bsni' => 'SDW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Kutai Kartanegara',
            'ibukota' => 'Tenggarong',
            'k_bsni' => 'TRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Kutai Timur',
            'ibukota' => 'Sanggatta',
            'k_bsni' => 'SGT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Mahakam Ulu',
            'ibukota' => 'Ujoh Bilang',
            'k_bsni' => 'UJB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Paser',
            'ibukota' => 'Tanah Grogot',
            'k_bsni' => 'TGT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kabupaten Penajam Paser Utara',
            'ibukota' => 'Penajam',
            'k_bsni' => 'PNJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kota Balikpapan',
            'ibukota' => 'Balikpapan',
            'k_bsni' => 'BPP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kota Bontang',
            'ibukota' => 'Bontang',
            'k_bsni' => 'BON'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '23',
            'kabkot' => 'Kota Samarinda',
            'ibukota' => 'Samarinda',
            'k_bsni' => 'SMR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Bulungan (Bulongan)',
            'ibukota' => 'Tanjung Selor',
            'k_bsni' => 'TJS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Malinau',
            'ibukota' => 'Malinau',
            'k_bsni' => 'MLN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Nunukan',
            'ibukota' => 'Nunukan',
            'k_bsni' => 'NNK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Tana Tidung',
            'ibukota' => 'Tideng Pale',
            'k_bsni' => 'TDP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kota Tarakan',
            'ibukota' => 'Tarakan',
            'k_bsni' => 'TAR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kabupaten Bintan',
            'ibukota' => 'Bandar Seri Bentan',
            'k_bsni' => 'BSB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kabupaten Karimun',
            'ibukota' => 'Tanjung Balai Karimun',
            'k_bsni' => 'TBK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kabupaten Kepulauan Anambas',
            'ibukota' => 'Tarempa',
            'k_bsni' => 'TRP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kabupaten Lingga',
            'ibukota' => 'Daik Lingga',
            'k_bsni' => 'DKL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kabupaten Natuna',
            'ibukota' => 'Ranai',
            'k_bsni' => 'RAN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kota Batam',
            'ibukota' => 'Batam',
            'k_bsni' => 'BTM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '10',
            'kabkot' => 'Kota Tanjung Pinang',
            'ibukota' => 'Tanjung Pinang',
            'k_bsni' => 'TPG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Lampung Barat',
            'ibukota' => 'Liwa',
            'k_bsni' => 'LIW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Lampung Selatan',
            'ibukota' => 'Kalianda',
            'k_bsni' => 'KLA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Lampung Tengah',
            'ibukota' => 'Gunung Sugih',
            'k_bsni' => 'GNS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Lampung Timur',
            'ibukota' => 'Sukadana',
            'k_bsni' => 'SDN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Lampung Utara',
            'ibukota' => 'Kotabumi',
            'k_bsni' => 'KTB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Mesuji',
            'ibukota' => 'Mesuji',
            'k_bsni' => 'MSJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Pesawaran',
            'ibukota' => 'Gedong Tataan',
            'k_bsni' => 'GDT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Pesisir Barat',
            'ibukota' => 'Krui',
            'k_bsni' => 'KRU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Pringsewu',
            'ibukota' => 'Pringsewu',
            'k_bsni' => 'PRW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Tanggamus',
            'ibukota' => 'Kota Agung',
            'k_bsni' => 'KOT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Tulang Bawang',
            'ibukota' => 'Menggala',
            'k_bsni' => 'MGL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Tulang Bawang Barat',
            'ibukota' => 'Tulang Bawang Tengah',
            'k_bsni' => 'TWG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kabupaten Way Kanan',
            'ibukota' => 'Blambangan Umpu',
            'k_bsni' => 'BBU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kota Bandar Lampung',
            'ibukota' => 'Bandar Lampung',
            'k_bsni' => 'BDL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '8',
            'kabkot' => 'Kota Metro',
            'ibukota' => 'Metro',
            'k_bsni' => 'MET'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Buru',
            'ibukota' => 'Namlea',
            'k_bsni' => 'NLA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Buru Selatan',
            'ibukota' => 'Namrole',
            'k_bsni' => 'NMR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Kepulauan Aru',
            'ibukota' => 'Dobo',
            'k_bsni' => 'DOB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Maluku Barat Daya',
            'ibukota' => 'Tiakur',
            'k_bsni' => 'TKR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Maluku Tengah',
            'ibukota' => 'Masohi',
            'k_bsni' => 'MSH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Maluku Tenggara',
            'ibukota' => 'Tual',
            'k_bsni' => 'TUL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Maluku Tenggara Barat',
            'ibukota' => 'Saumlaki',
            'k_bsni' => 'SML'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Seram Bagian Barat',
            'ibukota' => 'Dataran Hunipopu',
            'k_bsni' => 'DRH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kabupaten Seram Bagian Timur',
            'ibukota' => 'Dataran Hunimoa',
            'k_bsni' => 'DTH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kota Ambon',
            'ibukota' => 'Ambon',
            'k_bsni' => 'AMB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '31',
            'kabkot' => 'Kota Tual',
            'ibukota' => 'Tual',
            'k_bsni' => 'TUL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Halmahera Barat',
            'ibukota' => 'Jailolo',
            'k_bsni' => 'JLL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Halmahera Selatan',
            'ibukota' => 'Labuha',
            'k_bsni' => 'LBA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Halmahera Tengah',
            'ibukota' => 'Weda',
            'k_bsni' => 'WED'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Halmahera Timur',
            'ibukota' => 'Maba',
            'k_bsni' => 'MAB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Halmahera Utara',
            'ibukota' => 'Tobelo',
            'k_bsni' => 'TOB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Kepulauan Sula',
            'ibukota' => 'Sanana',
            'k_bsni' => 'SNN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Pulau Morotai',
            'ibukota' => 'Daruba',
            'k_bsni' => 'DRB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kabupaten Pulau Taliabu',
            'ibukota' => 'Bobong',
            'k_bsni' => 'BOB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kota Ternate',
            'ibukota' => 'Ternate',
            'k_bsni' => 'TTE'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '32',
            'kabkot' => 'Kota Tidore Kepulauan',
            'ibukota' => 'Tidore',
            'k_bsni' => 'TDR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Bima',
            'ibukota' => 'Woha',
            'k_bsni' => 'WHO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Dompu',
            'ibukota' => 'Dompu',
            'k_bsni' => 'DPU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Lombok Barat',
            'ibukota' => 'Gerung',
            'k_bsni' => 'GRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Lombok Tengah',
            'ibukota' => 'Praya',
            'k_bsni' => 'PYA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Lombok Timur',
            'ibukota' => 'Selong',
            'k_bsni' => 'SEL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Lombok Utara',
            'ibukota' => 'Tanjung',
            'k_bsni' => 'TJN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Sumbawa',
            'ibukota' => 'Sumbawa Besar',
            'k_bsni' => 'SBW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kabupaten Sumbawa Barat',
            'ibukota' => 'Taliwang',
            'k_bsni' => 'TLW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kota Bima',
            'ibukota' => 'Bima',
            'k_bsni' => 'BIM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '18',
            'kabkot' => 'Kota Mataram',
            'ibukota' => 'Mataram',
            'k_bsni' => 'MTR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Alor',
            'ibukota' => 'Kalabahi',
            'k_bsni' => 'KLB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Belu',
            'ibukota' => 'Atambua',
            'k_bsni' => 'ATB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Ende',
            'ibukota' => 'Ende',
            'k_bsni' => 'END'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Flores Timur',
            'ibukota' => 'Larantuka',
            'k_bsni' => 'LRT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Kupang',
            'ibukota' => 'Kupang',
            'k_bsni' => 'KPG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Lembata',
            'ibukota' => 'Lewoleba',
            'k_bsni' => 'LWB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Malaka',
            'ibukota' => 'Betun',
            'k_bsni' => 'BTN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Manggarai',
            'ibukota' => 'Ruteng',
            'k_bsni' => 'RTG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Manggarai Barat',
            'ibukota' => 'Labuan Bajo',
            'k_bsni' => 'LBJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Manggarai Timur',
            'ibukota' => 'Borong',
            'k_bsni' => 'BRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Nagekeo',
            'ibukota' => 'Mbay',
            'k_bsni' => 'MBY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Ngada',
            'ibukota' => 'Bajawa',
            'k_bsni' => 'BJW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Rote Ndao',
            'ibukota' => 'Baa',
            'k_bsni' => 'BAA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sabu Raijua',
            'ibukota' => 'Sabu Barat',
            'k_bsni' => 'SBB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sikka',
            'ibukota' => 'Maumere',
            'k_bsni' => 'MME'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sumba Barat',
            'ibukota' => 'Waikabubak',
            'k_bsni' => 'WKB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sumba Barat Daya',
            'ibukota' => 'Tambolaka',
            'k_bsni' => 'TAM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sumba Tengah',
            'ibukota' => 'Waibakul',
            'k_bsni' => 'WBL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Sumba Timur',
            'ibukota' => 'Waingapu',
            'k_bsni' => 'WGP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Timor Tengah Selatan',
            'ibukota' => 'Soe',
            'k_bsni' => 'SOE'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kabupaten Timor Tengah Utara',
            'ibukota' => 'Kefamenanu',
            'k_bsni' => 'KFM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '19',
            'kabkot' => 'Kota Kupang',
            'ibukota' => 'Kupang',
            'k_bsni' => 'KPG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Asmat',
            'ibukota' => 'Agats',
            'k_bsni' => 'AGT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Biak Numfor',
            'ibukota' => 'Biak',
            'k_bsni' => 'BIK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Boven Digoel',
            'ibukota' => 'Tanah Merah',
            'k_bsni' => 'TMR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Deiyai (Deliyai)',
            'ibukota' => 'Tigi',
            'k_bsni' => 'TIG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Dogiyai',
            'ibukota' => 'Kigamani',
            'k_bsni' => 'KGM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Intan Jaya',
            'ibukota' => 'Sugapa',
            'k_bsni' => 'SGP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Jayapura',
            'ibukota' => 'Jayapura',
            'k_bsni' => 'JAP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Jayawijaya',
            'ibukota' => 'Wamena',
            'k_bsni' => 'WAM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Keerom',
            'ibukota' => 'Waris',
            'k_bsni' => 'WRS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
            'ibukota' => 'Serui',
            'k_bsni' => 'SRU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Lanny Jaya',
            'ibukota' => 'Tiom',
            'k_bsni' => 'TOM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Mamberamo Raya',
            'ibukota' => 'Burmeso',
            'k_bsni' => 'BRM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Mamberamo Tengah',
            'ibukota' => 'Kobakma',
            'k_bsni' => 'KBK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Mappi',
            'ibukota' => 'Kepi',
            'k_bsni' => 'KEP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Merauke',
            'ibukota' => 'Merauke',
            'k_bsni' => 'MRK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Mimika',
            'ibukota' => 'Timika',
            'k_bsni' => 'TIM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Nabire',
            'ibukota' => 'Nabire',
            'k_bsni' => 'NAB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Nduga',
            'ibukota' => 'Kenyam',
            'k_bsni' => 'KYM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Paniai',
            'ibukota' => 'Enarotali',
            'k_bsni' => 'ERT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Pegunungan Bintang',
            'ibukota' => 'Oksibil',
            'k_bsni' => 'OSB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Puncak',
            'ibukota' => 'Ilaga',
            'k_bsni' => 'ILG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Puncak Jaya',
            'ibukota' => 'Mulia',
            'k_bsni' => 'MUL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Sarmi',
            'ibukota' => 'Sarmi',
            'k_bsni' => 'SMI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Supiori',
            'ibukota' => 'Sorendiweri',
            'k_bsni' => 'SRW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Tolikara',
            'ibukota' => 'Karubaga',
            'k_bsni' => 'KBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Waropen',
            'ibukota' => 'Botawa',
            'k_bsni' => 'BTW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Yahukimo',
            'ibukota' => 'Sumohai',
            'k_bsni' => 'SMH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kabupaten Yalimo',
            'ibukota' => 'Elelim',
            'k_bsni' => 'ELL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '33',
            'kabkot' => 'Kota Jayapura',
            'ibukota' => 'Jayapura',
            'k_bsni' => 'JAP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Fakfak',
            'ibukota' => 'Fak Fak',
            'k_bsni' => 'FFK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Kaimana',
            'ibukota' => 'Kaimana',
            'k_bsni' => 'KMN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Manokwari',
            'ibukota' => 'Manokwari',
            'k_bsni' => 'MNK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Manokwari Selatan',
            'ibukota' => 'Ransiki',
            'k_bsni' => 'RNK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Maybrat',
            'ibukota' => 'Aifat',
            'k_bsni' => 'AFT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Pegunungan Arfak',
            'ibukota' => 'Anggi',
            'k_bsni' => 'ANG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Raja Ampat',
            'ibukota' => 'Waisai',
            'k_bsni' => 'WAS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Sorong',
            'ibukota' => 'Aimas',
            'k_bsni' => 'AMS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Sorong Selatan',
            'ibukota' => 'Teminabuan',
            'k_bsni' => 'TMB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Tambrauw',
            'ibukota' => 'Fef',
            'k_bsni' => 'FEF'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Teluk Bintuni',
            'ibukota' => 'Bintuni',
            'k_bsni' => 'BTI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kabupaten Teluk Wondama',
            'ibukota' => 'Rasiei',
            'k_bsni' => 'RAS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '34',
            'kabkot' => 'Kota Sorong',
            'ibukota' => 'Sorong',
            'k_bsni' => 'SON'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Bengkalis',
            'ibukota' => 'Bengkalis',
            'k_bsni' => 'BLS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Indragiri Hilir',
            'ibukota' => 'Tembilahan',
            'k_bsni' => 'TBH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Indragiri Hulu',
            'ibukota' => 'Rengat',
            'k_bsni' => 'RGT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Kampar',
            'ibukota' => 'Bangkinang',
            'k_bsni' => 'BKN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Kepulauan Meranti',
            'ibukota' => 'Tebing Tinggi',
            'k_bsni' => 'TTG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Kuantan Singingi',
            'ibukota' => 'Teluk Kuantan',
            'k_bsni' => 'TLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Pelalawan',
            'ibukota' => 'Pangkalan Kerinci',
            'k_bsni' => 'PKK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Rokan Hilir',
            'ibukota' => 'Ujung Tanjung',
            'k_bsni' => 'UJT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Rokan Hulu',
            'ibukota' => 'Pasir Pengarairan',
            'k_bsni' => 'PRP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kabupaten Siak',
            'ibukota' => 'Siak Sriindrapura',
            'k_bsni' => 'SAK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kota Dumai',
            'ibukota' => 'Dumai',
            'k_bsni' => 'DUM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '4',
            'kabkot' => 'Kota Pekanbaru',
            'ibukota' => 'Pekanbaru',
            'k_bsni' => 'PBR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Majene',
            'ibukota' => 'Majene',
            'k_bsni' => 'MJN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Mamasa',
            'ibukota' => 'Mamasa',
            'k_bsni' => 'MMS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Mamuju',
            'ibukota' => 'Mamuju',
            'k_bsni' => 'MAM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Mamuju Tengah',
            'ibukota' => 'Tobadak',
            'k_bsni' => 'TBD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Mamuju Utara',
            'ibukota' => 'Pasangkayu',
            'k_bsni' => 'PKY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '30',
            'kabkot' => 'Kabupaten Polewali Mandar',
            'ibukota' => 'Polewali',
            'k_bsni' => 'PLW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Bantaeng',
            'ibukota' => 'Bantaeng',
            'k_bsni' => 'BAN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Barru',
            'ibukota' => 'Barru',
            'k_bsni' => 'BAR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Bone',
            'ibukota' => 'Watampone',
            'k_bsni' => 'WTP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Bulukumba',
            'ibukota' => 'Bulukumba',
            'k_bsni' => 'BLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Enrekang',
            'ibukota' => 'Enrekang',
            'k_bsni' => 'ENR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Gowa',
            'ibukota' => 'Sungguminasa',
            'k_bsni' => 'SGM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Jeneponto',
            'ibukota' => 'Jeneponto',
            'k_bsni' => 'JNP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Selayar (Kepulauan Selayar)',
            'ibukota' => 'Benteng',
            'k_bsni' => 'BEN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Luwu',
            'ibukota' => 'Palopo',
            'k_bsni' => 'PLP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Luwu Timur',
            'ibukota' => 'Malili',
            'k_bsni' => 'MLL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Luwu Utara',
            'ibukota' => 'Masamba',
            'k_bsni' => 'MSB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Maros',
            'ibukota' => 'Maros',
            'k_bsni' => 'MRS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Pangkajene Kepulauan',
            'ibukota' => 'Pangkajene',
            'k_bsni' => 'PKJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Pinrang',
            'ibukota' => 'Pinrang',
            'k_bsni' => 'PIN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Sidenreng Rappang (Sidrap)',
            'ibukota' => 'Sidenreng',
            'k_bsni' => 'SDR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Sinjai',
            'ibukota' => 'Sinjai',
            'k_bsni' => 'SNJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Soppeng',
            'ibukota' => 'Watan Soppeng',
            'k_bsni' => 'WNS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Takalar',
            'ibukota' => 'Takalar',
            'k_bsni' => 'TKA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Tana Toraja',
            'ibukota' => 'Makale',
            'k_bsni' => 'MAK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Toraja Utara',
            'ibukota' => 'Rantepao',
            'k_bsni' => 'RTP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kabupaten Wajo',
            'ibukota' => 'Sengkang',
            'k_bsni' => 'SKG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kota Makassar',
            'ibukota' => 'Makassar',
            'k_bsni' => 'MKS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kota Palopo',
            'ibukota' => 'Palopo',
            'k_bsni' => 'PLP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '27',
            'kabkot' => 'Kota Parepare',
            'ibukota' => 'Pare Pare',
            'k_bsni' => 'PRE'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Banggai',
            'ibukota' => 'Luwuk',
            'k_bsni' => 'LWK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Banggai Kepulauan',
            'ibukota' => 'Salakan',
            'k_bsni' => 'SKN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Banggai Laut',
            'ibukota' => 'Banggai',
            'k_bsni' => 'BGI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Buol',
            'ibukota' => 'Buol',
            'k_bsni' => 'BUL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Donggala',
            'ibukota' => 'Donggala',
            'k_bsni' => 'DGL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Morowali',
            'ibukota' => 'Bungku',
            'k_bsni' => 'BGK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Morowali Utara',
            'ibukota' => 'Kolonodale',
            'k_bsni' => 'KND'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Parigi Moutong',
            'ibukota' => 'Parigi',
            'k_bsni' => 'PRG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Poso',
            'ibukota' => 'Poso',
            'k_bsni' => 'PSO'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Sigi',
            'ibukota' => 'Sigi Biromaru',
            'k_bsni' => 'SGB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Tojo Una-Una',
            'ibukota' => 'Ampana',
            'k_bsni' => 'APN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kabupaten Toli-Toli',
            'ibukota' => 'Toli Toli',
            'k_bsni' => 'TLI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '26',
            'kabkot' => 'Kota Palu',
            'ibukota' => 'Palu',
            'k_bsni' => 'PAL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Bombana',
            'ibukota' => 'Rumbia',
            'k_bsni' => 'RMB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Buton',
            'ibukota' => 'Pasar Wajo',
            'k_bsni' => 'PSW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Buton Selatan',
            'ibukota' => 'Batauga',
            'k_bsni' => 'BAG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Buton Tengah',
            'ibukota' => 'Labungkari',
            'k_bsni' => 'LBK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Buton Utara',
            'ibukota' => 'Buranga',
            'k_bsni' => 'BNG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Kolaka',
            'ibukota' => 'Kolaka',
            'k_bsni' => 'KKA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Kolaka Timur',
            'ibukota' => 'Tirawuta',
            'k_bsni' => 'TRW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Kolaka Utara',
            'ibukota' => 'Lasusua',
            'k_bsni' => 'LSS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Konawe',
            'ibukota' => 'Unaaha',
            'k_bsni' => 'UNH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Konawe Kepulauan',
            'ibukota' => 'Langara',
            'k_bsni' => 'LGR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Konawe Selatan',
            'ibukota' => 'Andoolo',
            'k_bsni' => 'ADL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Konawe Utara',
            'ibukota' => 'Wanggudu',
            'k_bsni' => 'WGD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Muna',
            'ibukota' => 'Raha',
            'k_bsni' => 'RAH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Muna Barat',
            'ibukota' => 'Sawerigadi',
            'k_bsni' => 'SWG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kabupaten Wakatobi',
            'ibukota' => 'Wangi Wangi',
            'k_bsni' => 'WGW'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kota Baubau',
            'ibukota' => 'Bau-Bau',
            'k_bsni' => 'BAU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '28',
            'kabkot' => 'Kota Kendari',
            'ibukota' => 'Kendari',
            'k_bsni' => 'KDI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Bolaang Mongondow',
            'ibukota' => 'Lolak',
            'k_bsni' => 'LLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Bolaang Mongondow Selatan',
            'ibukota' => 'Bolaang Uki',
            'k_bsni' => 'BLU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Bolaang Mongondow Timur',
            'ibukota' => 'Tutuyan',
            'k_bsni' => 'TTY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Bolaang Mongondow Utara',
            'ibukota' => 'Boroko',
            'k_bsni' => 'BRK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Kepulauan Sangihe',
            'ibukota' => 'Tahuna',
            'k_bsni' => 'THN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)',
            'ibukota' => 'Ondong Siau',
            'k_bsni' => 'ODS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Kepulauan Talaud',
            'ibukota' => 'Melongguane',
            'k_bsni' => 'MGN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Minahasa',
            'ibukota' => 'Tondano',
            'k_bsni' => 'TNN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Minahasa Selatan',
            'ibukota' => 'Amurang',
            'k_bsni' => 'AMR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Minahasa Tenggara',
            'ibukota' => 'Ratahan',
            'k_bsni' => 'RTN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kabupaten Minahasa Utara',
            'ibukota' => 'Air Madidi',
            'k_bsni' => 'ARM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kota Bitung',
            'ibukota' => 'Bitung',
            'k_bsni' => 'BIT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kota Kotamobagu',
            'ibukota' => 'Kotamobagu',
            'k_bsni' => 'KTG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kota Manado',
            'ibukota' => 'Manado',
            'k_bsni' => 'MND'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '25',
            'kabkot' => 'Kota Tomohon',
            'ibukota' => 'Tomohon',
            'k_bsni' => 'TMH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Agam',
            'ibukota' => 'Lubuk Basung',
            'k_bsni' => 'LBB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Dharmasraya',
            'ibukota' => 'Pulau Punjung',
            'k_bsni' => 'PLJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Kepulauan Mentawai',
            'ibukota' => 'Tuapejat',
            'k_bsni' => 'TPT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Lima Puluh Kota',
            'ibukota' => 'Sarilamak',
            'k_bsni' => 'SRK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Padang Pariaman',
            'ibukota' => 'Nagari Parit Malintang',
            'k_bsni' => 'NPM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Pasaman',
            'ibukota' => 'Lubuk Sikaping',
            'k_bsni' => 'LBS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Pasaman Barat',
            'ibukota' => 'Simpang Empat',
            'k_bsni' => 'SPE'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Pesisir Selatan',
            'ibukota' => 'Painan',
            'k_bsni' => 'PNN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
            'ibukota' => 'Muaro Sijunjung',
            'k_bsni' => 'MRJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Solok',
            'ibukota' => 'Arosuka',
            'k_bsni' => 'ARS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Solok Selatan',
            'ibukota' => 'Padang Aro',
            'k_bsni' => 'PDA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kabupaten Tanah Datar',
            'ibukota' => 'Batusangkar',
            'k_bsni' => 'BSK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Bukittinggi',
            'ibukota' => 'Bukittinggi',
            'k_bsni' => 'BKT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Padang',
            'ibukota' => 'Padang',
            'k_bsni' => 'PAD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Padang Panjang',
            'ibukota' => 'Padang Panjang',
            'k_bsni' => 'PDP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Pariaman',
            'ibukota' => 'Pariaman',
            'k_bsni' => 'PMN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Payakumbuh',
            'ibukota' => 'Payakumbuh',
            'k_bsni' => 'PYH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Sawahlunto',
            'ibukota' => 'Sawahlunto',
            'k_bsni' => 'SWL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '3',
            'kabkot' => 'Kota Solok',
            'ibukota' => 'Solok',
            'k_bsni' => 'SLK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Banyuasin',
            'ibukota' => 'Pangkalan Balai',
            'k_bsni' => 'PKB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Empat Lawang',
            'ibukota' => 'Tebing Tinggi',
            'k_bsni' => 'TBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Lahat',
            'ibukota' => 'Lahat',
            'k_bsni' => 'LHT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Muara Enim',
            'ibukota' => 'Muara Enim',
            'k_bsni' => 'MRE'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Musi Banyuasin',
            'ibukota' => 'Sekayu',
            'k_bsni' => 'SKY'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Musi Rawas',
            'ibukota' => 'Muarabeliti',
            'k_bsni' => 'MBL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Musi Rawas Utara',
            'ibukota' => 'Rupit',
            'k_bsni' => 'RPT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Ogan Ilir',
            'ibukota' => 'Indralaya',
            'k_bsni' => 'IDL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Ogan Komering Ilir',
            'ibukota' => 'Kayu Agung',
            'k_bsni' => 'KAG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Ogan Komering Ulu',
            'ibukota' => 'Baturaja',
            'k_bsni' => 'BTA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Ogan Komering Ulu Selatan (Oku Selatan)',
            'ibukota' => 'Muaradua',
            'k_bsni' => 'MRD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Ogan Komering Ulu Timur (Oku Timur)',
            'ibukota' => 'Martapura',
            'k_bsni' => 'MPR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kabupaten Penukal Abab Lematang Ilir',
            'ibukota' => 'Talang Ubi',
            'k_bsni' => 'TLB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kota Lubuk Linggau',
            'ibukota' => 'Lubuk Linggau',
            'k_bsni' => 'LLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kota Pagar Alam',
            'ibukota' => 'Pagar Alam',
            'k_bsni' => 'PGA'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kota Palembang',
            'ibukota' => 'Pelembang',
            'k_bsni' => 'PLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '6',
            'kabkot' => 'Kota Prabumulih',
            'ibukota' => 'Prabumulih',
            'k_bsni' => 'PBM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Asahan',
            'ibukota' => 'Kisaran',
            'k_bsni' => 'KIS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Batu Bara',
            'ibukota' => 'Lima Puluh',
            'k_bsni' => 'LMP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Dairi',
            'ibukota' => 'Sidikalang',
            'k_bsni' => 'SDK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Deli Serdang',
            'ibukota' => 'Lubuk Pakam',
            'k_bsni' => 'LBP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Humbang Hasundutan',
            'ibukota' => 'Dolok Sanggul',
            'k_bsni' => 'DLS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Karo',
            'ibukota' => 'Kabanjahe',
            'k_bsni' => 'KBJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Labuhanbatu',
            'ibukota' => 'Rantau Prapat',
            'k_bsni' => 'RAP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Labuhanbatu Selatan',
            'ibukota' => 'Kota Pinang',
            'k_bsni' => 'KPI'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Labuhanbatu Utara',
            'ibukota' => 'Aek Kanopan',
            'k_bsni' => 'AKK'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Langkat',
            'ibukota' => 'Stabat',
            'k_bsni' => 'STB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Mandailing Natal',
            'ibukota' => 'Panyabungan',
            'k_bsni' => 'PYB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Nias',
            'ibukota' => 'Gunungsitoli',
            'k_bsni' => 'GST'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Nias Barat',
            'ibukota' => 'Lahomi',
            'k_bsni' => 'LHM'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Nias Selatan',
            'ibukota' => 'Teluk Dalam',
            'k_bsni' => 'TLD'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Nias Utara',
            'ibukota' => 'Lotu',
            'k_bsni' => 'LTU'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Padang Lawas',
            'ibukota' => 'Sibuhuan',
            'k_bsni' => 'SBH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Padang Lawas Utara',
            'ibukota' => 'Gunung Tua',
            'k_bsni' => 'GNT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Pakpak Bharat',
            'ibukota' => 'Salak',
            'k_bsni' => 'SAL'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Samosir',
            'ibukota' => 'Pangururan',
            'k_bsni' => 'PRR'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Serdang Bedagai',
            'ibukota' => 'Sei Rampah',
            'k_bsni' => 'SRH'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Simalungun',
            'ibukota' => 'Pematang Siantar',
            'k_bsni' => 'PMS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Tapanuli Selatan',
            'ibukota' => 'Padang Sidempuan',
            'k_bsni' => 'PSP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Tapanuli Tengah',
            'ibukota' => 'Sibolga',
            'k_bsni' => 'SBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Tapanuli Utara',
            'ibukota' => 'Tarutung',
            'k_bsni' => 'TRT'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kabupaten Toba Samosir',
            'ibukota' => 'Balige',
            'k_bsni' => 'BLG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Binjai',
            'ibukota' => 'Binjai',
            'k_bsni' => 'BNJ'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Gunungsitoli',
            'ibukota' => 'Gunungsitoli',
            'k_bsni' => 'GST'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Medan',
            'ibukota' => 'Medan',
            'k_bsni' => 'MDN'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Padang Sidempuan',
            'ibukota' => 'Padang Sidempuan',
            'k_bsni' => 'PSP'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Pematangsiantar',
            'ibukota' => 'Pematangsiantar',
            'k_bsni' => 'PMS'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Sibolga',
            'ibukota' => 'Sibolga',
            'k_bsni' => 'SBG'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Tanjung Balai',
            'ibukota' => 'Tanjung Balai',
            'k_bsni' => 'TJB'
        ]);

        $this->insert('{{%kabupaten_kota}}', [
            'kd_provinsi' => '2',
            'kabkot' => 'Kota Tebing Tinggi',
            'ibukota' => 'Tebing Tinggi',
            'k_bsni' => 'TBT'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%provinsi}}`
        $this->dropForeignKey(
            '{{%fk-kabupaten_kota-kd_provinsi}}',
            '{{%kabupaten_kota}}'
        );

        // drops index for column `kd_provinsi`
        $this->dropIndex(
            '{{%idx-kabupaten_kota-kd_provinsi}}',
            '{{%kabupaten_kota}}'
        );

        $this->dropTable('{{%kabupaten_kota}}');
    }
}
