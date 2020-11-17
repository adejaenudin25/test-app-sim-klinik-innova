<?php

namespace modules\pendaftaran\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\pendaftaran\models\Kunjungan;

/**
 * KunjunganSearch represents the model behind the search form of `modules\pendaftaran\models\Kunjungan`.
 */
class KunjunganSearch extends Kunjungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_unit', 'kd_pasien', 'kd_dokter'], 'integer'],
            [['tgl_daftar', 'status_kunjungan'], 'safe'],
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
        $query = Kunjungan::find();

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
            'kd_unit' => $this->kd_unit,
            'kd_pasien' => $this->kd_pasien,
            'tgl_daftar' => $this->tgl_daftar,
            'kd_dokter' => $this->kd_dokter,
        ]);

        $query->andFilterWhere(['ilike', 'status_kunjungan', $this->status_kunjungan]);

        return $dataProvider;
    }
}
