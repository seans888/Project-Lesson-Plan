<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Student;

/**
 * StudentSearch represents the model behind the search form about `common\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stud_id_num', 'sec_id'], 'integer'],
            [['stud_fname', 'stud_lname', 'stud_mname', 'email'], 'safe'],
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
        $query = Student::find();

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
            'stud_id_num' => $this->stud_id_num,
            'sec_id' => $this->sec_id,
        ]);

        $query->andFilterWhere(['like', 'stud_fname', $this->stud_fname])
            ->andFilterWhere(['like', 'stud_lname', $this->stud_lname])
            ->andFilterWhere(['like', 'stud_mname', $this->stud_mname])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}