<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $emp_id
 * @property string $emp_job
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_mname
 *
 * @property User $emp
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
            [['emp_id', 'emp_job', 'emp_fname', 'emp_lname'], 'required'],
            [['emp_id'], 'integer'],
            [['emp_job', 'emp_fname', 'emp_lname', 'emp_mname'], 'string', 'max' => 45],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['emp_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
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
    public function getEmp()
    {
        return $this->hasOne(User::className(), ['id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['emp_id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Log::className(), ['emp_id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['advise_emp_id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['emp_id' => 'emp_id']);
    }
}
