<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Harga;

/**
 * HargaSearch represents the model behind the search form about `frontend\models\Harga`.
 */
class HargaSearch extends Harga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenis_kendaraan', 'harga', 'status', 'approval'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Harga::find();

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
            'jenis_kendaraan' => $this->jenis_kendaraan,
            'harga' => $this->harga,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'status' => $this->status,
            'approval' => $this->approval,
        ]);

        return $dataProvider;
    }
}
