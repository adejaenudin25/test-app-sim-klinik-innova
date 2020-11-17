<?php

namespace modules\master\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\master\models\AptObat;

/**
 * AptObatSearch represents the model behind the search form of `modules\master\models\AptObat`.
 */
class AptObatSearch extends AptObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_satuan', 'kd_satuan_besar', 'generic', 'fractions', 'dpho', 'tag', 'aktif', 'kd_pabrik', 'generik'], 'integer'],
            [['nama_obat', 'ket_obat', 'data_owner'], 'safe'],
            [['mg'], 'number'],
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
        $query = AptObat::find();

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
            'kd_satuan' => $this->kd_satuan,
            'kd_satuan_besar' => $this->kd_satuan_besar,
            'generic' => $this->generic,
            'fractions' => $this->fractions,
            'mg' => $this->mg,
            'dpho' => $this->dpho,
            'tag' => $this->tag,
            'aktif' => $this->aktif,
            'kd_pabrik' => $this->kd_pabrik,
            'generik' => $this->generik,
        ]);

        $query->andFilterWhere(['ilike', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['ilike', 'ket_obat', $this->ket_obat])
            ->andFilterWhere(['ilike', 'data_owner', $this->data_owner]);

        return $dataProvider;
    }
}
