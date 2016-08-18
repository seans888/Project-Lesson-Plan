<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $emp_id
 * @property string $emp_job
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_mname
 *
 * @property Grade[] $grades
 * @property Log[] $logs
 * @property Section[] $sections
 * @property Subject[] $subjects
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_id', 'emp_job', 'emp_fname', 'emp_lname'], 'required'],
            [['id', 'emp_id'], 'integer'],
            [['emp_job', 'emp_fname', 'emp_lname', 'emp_mname'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_id' => 'Emp ID',
            'emp_job' => 'Emp Job',
            'emp_fname' => 'Emp Fname',
            'emp_lname' => 'Emp Lname',
            'emp_mname' => 'Emp Mname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['emp_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Log::className(), ['emp_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['advise_emp_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['emp_id' => 'id']);
    }
}
