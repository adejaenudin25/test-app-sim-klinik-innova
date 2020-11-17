<?php

namespace modules\master\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\master\models\Kelurahan;

/**
 * KelurahanSearch represents the model behind the search form of `modules\master\models\Kelurahan`.
 */
class KelurahanSearch extends Kelurahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_kecamatan'], 'integer'],
            [['kelurahan', 'kd_pos'], 'safe'],
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
        $query = Kelurahan::find();

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
            'kd_kecamatan' => $this->kd_kecamatan,
        ]);

        $query->andFilterWhere(['ilike', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['ilike', 'kd_pos', $this->kd_pos]);

        return $dataProvider;
    }
}
