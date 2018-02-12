<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Encyclopedia;

/**
 * EncyclopediaSearch represents the model behind the search form about `app\models\Encyclopedia`.
 */
class EncyclopediaSearch extends Encyclopedia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pedia'], 'integer'],
            [['name_pedia', 'category', 'article'], 'safe'],
            [['ph_pedia', 'temp_pedia'], 'number'],
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
        $query = Encyclopedia::find();

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
            'id_pedia' => $this->id_pedia,
            'ph_pedia' => $this->ph_pedia,
            'temp_pedia' => $this->temp_pedia,
        ]);

        $query->andFilterWhere(['like', 'name_pedia', $this->name_pedia])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'article', $this->article]);

        return $dataProvider;
    }
}
