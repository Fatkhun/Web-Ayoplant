<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['first_name', 'last_name', 'place_of_birth', 'birthdate', 'gender', 'pic', 'bio', 'job_desc', 'fb', 'ig', 'ln', 'url', 'public_email', 'created_at', 'updated_at'], 'safe'],
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
        $query = Profile::find();

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
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'birthdate', $this->birthdate])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'bio', $this->bio])
            ->andFilterWhere(['like', 'job_desc', $this->job_desc])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'ig', $this->ig])
            ->andFilterWhere(['like', 'ln', $this->ln])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'public_email', $this->public_email]);

        return $dataProvider;
    }
}
