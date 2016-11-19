<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property integer $id
 * @property integer $acad_year_id
 * @property integer $stud_id
 * @property integer $emp_id
 * @property integer $sub_id
 * @property integer $grade
 * @property integer $quarter
 *
 * @property AcademicYear $acadYear
 * @property Student $stud
 * @property Employee $emp
 * @property Subject $sub
 * @property Quarter $quarter0
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acad_year_id', 'stud_id', 'emp_id', 'sub_id', 'grade', 'quarter'], 'required'],
            [['acad_year_id', 'stud_id', 'emp_id', 'sub_id', 'grade', 'quarter'], 'integer'],
            [['acad_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['acad_year_id' => 'id']],
            [['stud_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['stud_id' => 'id']],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['emp_id' => 'id']],
            [['sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['sub_id' => 'id']],
            [['quarter'], 'exist', 'skipOnError' => true, 'targetClass' => Quarter::className(), 'targetAttribute' => ['quarter' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
<<<<<<< HEAD
            'acad_year_id' => 'Academic Year',
            'stud_id' => 'Student',
            'emp_id' => 'Employee',
            'sub_id' => 'Subject',
=======
            'acad_year_id' => 'Acad Year ID',
            'stud_id' => 'Stud ID',
            'emp_id' => 'Emp ID',
            'sub_id' => 'Sub ID',
>>>>>>> a5f0003cee29df763bf8e251733535bedd689285
            'grade' => 'Grade',
            'quarter' => 'Quarter',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcadYear()
    {
        return $this->hasOne(AcademicYear::className(), ['id' => 'acad_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStud()
    {
        return $this->hasOne(Student::className(), ['id' => 'stud_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['id' => 'emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSub()
    {
        return $this->hasOne(Subject::className(), ['id' => 'sub_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarter0()
    {
        return $this->hasOne(Quarter::className(), ['id' => 'quarter']);
    }
}
