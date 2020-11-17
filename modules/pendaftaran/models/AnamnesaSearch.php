<?php

namespace modules\pendaftaran\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\pendaftaran\models\Anamnesa;

/**
 * AnamnesaSearch represents the model behind the search form of `modules\pendaftaran\models\Anamnesa`.
 */
class AnamnesaSearch extends Anamnesa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_kunjungan', 'tinggi_badan', 'berat_badan', 'suhu', 'is_hamil', 'is_merokok', 'is_alkohol', 'is_kurang_vegetarian', 'kd_dokter'], 'integer'],
            [['keluhan_utama', 'lama_sakit', 'keluhan_tambahan', 'alergi_obat', 'alergi_makanan', 'alergi_lainnya', 'edukasi', 'terapi', 'rencana', 'observasi', 'keterangan', 'dokter', 'tgl_anamnesa'], 'safe'],
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
        $query = Anamnesa::find();

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
            'kd_kunjungan' => $this->kd_kunjungan,
            'tinggi_badan' => $this->tinggi_badan,
            'berat_badan' => $this->berat_badan,
            'suhu' => $this->suhu,
            'is_hamil' => $this->is_hamil,
            'is_merokok' => $this->is_merokok,
            'is_alkohol' => $this->is_alkohol,
            'is_kurang_vegetarian' => $this->is_kurang_vegetarian,
            'kd_dokter' => $this->kd_dokter,
            'tgl_anamnesa' => $this->tgl_anamnesa,
        ]);

        $query->andFilterWhere(['ilike', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['ilike', 'lama_sakit', $this->lama_sakit])
            ->andFilterWhere(['ilike', 'keluhan_tambahan', $this->keluhan_tambahan])
            ->andFilterWhere(['ilike', 'alergi_obat', $this->alergi_obat])
            ->andFilterWhere(['ilike', 'alergi_makanan', $this->alergi_makanan])
            ->andFilterWhere(['ilike', 'alergi_lainnya', $this->alergi_lainnya])
            ->andFilterWhere(['ilike', 'edukasi', $this->edukasi])
            ->andFilterWhere(['ilike', 'terapi', $this->terapi])
            ->andFilterWhere(['ilike', 'rencana', $this->rencana])
            ->andFilterWhere(['ilike', 'observasi', $this->observasi])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'dokter', $this->dokter]);

        return $dataProvider;
    }
}
