<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_pasien".
 *
 * @property int $id
 * @property int $kd_kelurahan
 * @property string $nama
 * @property string $no_kk
 * @property string $nik
 * @property string $pekerjaan
 * @property string $jenis_kelamin
 * @property string $tgl_lahir
 * @property string $tempat_lahir
 * @property string $gol_darah
 * @property string $handphone
 * @property string $alamat
 * @property string $rt
 * @property string $rw
 * @property string $agama
 * @property string $pendidikan
 * @property string $status_marital
 * @property string $status_keluarga
 * @property string $wni
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $ktp_alamat
 * @property string $ktp_kd_kelurahan
 * @property string $ktp_rt
 * @property string $ktp_rw
 *
 * @property Kunjungan[] $kunjungans
 * @property Kelurahan $kdKelurahan
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kelurahan'], 'required'],
            [['kd_kelurahan'], 'default', 'value' => null],
            [['kd_kelurahan'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'pekerjaan'], 'string', 'max' => 30],
            [['no_kk', 'nik'], 'string', 'max' => 16],
            [['jenis_kelamin'], 'string', 'max' => 4],
            [['tempat_lahir', 'handphone', 'pendidikan', 'status_keluarga'], 'string', 'max' => 15],
            [['gol_darah'], 'string', 'max' => 2],
            [['alamat', 'ktp_alamat'], 'string', 'max' => 50],
            [['rt', 'rw', 'ktp_rt', 'ktp_rw'], 'string', 'max' => 3],
            [['agama', 'status_marital'], 'string', 'max' => 10],
            [['wni'], 'string', 'max' => 9],
            [['nama_ayah', 'nama_ibu'], 'string', 'max' => 20],
            [['ktp_kd_kelurahan'], 'string', 'max' => 11],
            [['kd_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['kd_kelurahan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_kelurahan' => 'Kd Kelurahan',
            'nama' => 'Nama',
            'no_kk' => 'No Kk',
            'nik' => 'Nik',
            'pekerjaan' => 'Pekerjaan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tgl_lahir' => 'Tgl Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'gol_darah' => 'Gol Darah',
            'handphone' => 'Handphone',
            'alamat' => 'Alamat',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'status_marital' => 'Status Marital',
            'status_keluarga' => 'Status Keluarga',
            'wni' => 'Wni',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'ktp_alamat' => 'Ktp Alamat',
            'ktp_kd_kelurahan' => 'Ktp Kd Kelurahan',
            'ktp_rt' => 'Ktp Rt',
            'ktp_rw' => 'Ktp Rw',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKunjungans()
    {
        return $this->hasMany(Kunjungan::className(), ['kd_pasien' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKelurahan()
    {
        return $this->hasOne(Kelurahan::className(), ['id' => 'kd_kelurahan']);
    }
}
