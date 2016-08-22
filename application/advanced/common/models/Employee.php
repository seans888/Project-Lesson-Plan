<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $emp_id_num
 * @property integer $emp_job
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_mname
 *
 * @property Job $empJob
 * @property Grade[] $grades
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
            [['emp_id_num', 'emp_job', 'emp_fname', 'emp_lname', 'emp_mname'], 'required'],
            [['emp_id_num', 'emp_job'], 'integer'],
            [['emp_fname', 'emp_lname', 'emp_mname'], 'string', 'max' => 45],
            [['emp_job'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['emp_job' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_id_num' => 'Emp Id Num',
            'emp_job' => 'Emp Job',
            'emp_fname' => 'Emp Fname',
            'emp_lname' => 'Emp Lname',
            'emp_mname' => 'Emp Mname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpJob()
    {
        return $this->hasOne(Job::className(), ['id' => 'emp_job']);
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
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['advise_emp_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['teach_emp_id' => 'id']);
    }
}
