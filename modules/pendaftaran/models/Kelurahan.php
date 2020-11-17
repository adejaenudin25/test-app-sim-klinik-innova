<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_kelurahan".
 *
 * @property int $id
 * @property int $kd_kecamatan
 * @property string $kelurahan
 * @property string $kd_pos
 *
 * @property Kecamatan $kdKecamatan
 * @property Pasien[] $pasiens
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_kelurahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kecamatan'], 'required'],
            [['kd_kecamatan'], 'default', 'value' => null],
            [['kd_kecamatan'], 'integer'],
            [['kelurahan'], 'string', 'max' => 30],
            [['kd_pos'], 'string', 'max' => 5],
            [['kd_kecamatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['kd_kecamatan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_kecamatan' => 'Kd Kecamatan',
            'kelurahan' => 'Kelurahan',
            'kd_pos' => 'Kd Pos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id' => 'kd_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_kelurahan' => 'id']);
    }
}
