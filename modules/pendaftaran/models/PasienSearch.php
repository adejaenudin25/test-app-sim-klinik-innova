<?php

namespace modules\pendaftaran\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\pendaftaran\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `modules\pendaftaran\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_kelurahan'], 'integer'],
            [['nama', 'no_kk', 'nik', 'pekerjaan', 'jenis_kelamin', 'tgl_lahir', 'tempat_lahir', 'gol_darah', 'handphone', 'alamat', 'rt', 'rw', 'agama', 'pendidikan', 'status_marital', 'status_keluarga', 'wni', 'nama_ayah', 'nama_ibu', 'ktp_alamat', 'ktp_kd_kelurahan', 'ktp_rt', 'ktp_rw'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'kd_kelurahan' => $this->kd_kelurahan,
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'no_kk', $this->no_kk])
            ->andFilterWhere(['ilike', 'nik', $this->nik])
            ->andFilterWhere(['ilike', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['ilike', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'gol_darah', $this->gol_darah])
            ->andFilterWhere(['ilike', 'handphone', $this->handphone])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'rt', $this->rt])
            ->andFilterWhere(['ilike', 'rw', $this->rw])
            ->andFilterWhere(['ilike', 'agama', $this->agama])
            ->andFilterWhere(['ilike', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['ilike', 'status_marital', $this->status_marital])
            ->andFilterWhere(['ilike', 'status_keluarga', $this->status_keluarga])
            ->andFilterWhere(['ilike', 'wni', $this->wni])
            ->andFilterWhere(['ilike', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['ilike', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['ilike', 'ktp_alamat', $this->ktp_alamat])
            ->andFilterWhere(['ilike', 'ktp_kd_kelurahan', $this->ktp_kd_kelurahan])
            ->andFilterWhere(['ilike', 'ktp_rt', $this->ktp_rt])
            ->andFilterWhere(['ilike', 'ktp_rw', $this->ktp_rw]);

        return $dataProvider;
    }
}
