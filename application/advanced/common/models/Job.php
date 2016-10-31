<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $id
 * @property string $job_description
 * @property string $job_definition
 *
 * @property Employee[] $employees
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_description'], 'required'],
            [['job_description'], 'string', 'max' => 35],
            [['job_definition'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_description' => 'Job Description',
            'job_definition' => 'Job Definition',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['emp_job' => 'id']);
    }
}
