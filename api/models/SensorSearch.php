<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sensor;

/**
 * SensorSearch represents the model behind the search form about `app\models\Sensor`.
 */
class SensorSearch extends Sensor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sensor', 'kode_sensor'], 'integer'],
            [['ph_sensor', 'temp_sensor'], 'number'],
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
        $query = Sensor::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_sensor' => $this->id_sensor,
            'kode_sensor' => $this->kode_sensor,
            'ph_sensor' => $this->ph_sensor,
            'temp_sensor' => $this->temp_sensor,
        ]);

        return $dataProvider;
    }
}
