<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SectionSchedule;

/**
 * SectionScheduleSearch represents the model behind the search form about `common\models\SectionSchedule`.
 */
class SectionScheduleSearch extends SectionSchedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_name', 'subject', 'subject_time_start', 'subject_time_end'], 'integer'],
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
        $query = SectionSchedule::find();

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
            'section_name' => $this->section_name,
            'subject' => $this->subject,
            'subject_time_start' => $this->subject_time_start,
            'subject_time_end' => $this->subject_time_end,
        ]);

        return $dataProvider;
    }
}