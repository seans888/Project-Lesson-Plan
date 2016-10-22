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
            [['id', 'stud_id_num', 'sec_id', 'mothers_contact_number', 'fathers_contact_number', 'guardians_contact_number'], 'integer'],
            [['stud_fname', 'stud_lname', 'stud_mname', 'email', 'mothers_name', 'fathers_name', 'guardians_name', 'nationality', 'gender', 'birthdate', 'religion', 'birth_place'], 'safe'],
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
            'mothers_contact_number' => $this->mothers_contact_number,
            'fathers_contact_number' => $this->fathers_contact_number,
            'guardians_contact_number' => $this->guardians_contact_number,
            'birthdate' => $this->birthdate,
        ]);

        $query->andFilterWhere(['like', 'stud_fname', $this->stud_fname])
            ->andFilterWhere(['like', 'stud_lname', $this->stud_lname])
            ->andFilterWhere(['like', 'stud_mname', $this->stud_mname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mothers_name', $this->mothers_name])
            ->andFilterWhere(['like', 'fathers_name', $this->fathers_name])
            ->andFilterWhere(['like', 'guardians_name', $this->guardians_name])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place]);

        return $dataProvider;
    }
}
