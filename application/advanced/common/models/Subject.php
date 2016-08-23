<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $sub_name
 * @property integer $teach_emp_id
 * @property string $sub_time
 * @property integer $sub_class_id
 *
 * @property Grade[] $grades
 * @property Schedule[] $schedules
 * @property Employee $teachEmp
 * @property Section $subClass
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_name', 'teach_emp_id', 'sub_time', 'sub_class_id'], 'required'],
            [['teach_emp_id', 'sub_class_id'], 'integer'],
            [['sub_time'], 'safe'],
            [['sub_name'], 'string', 'max' => 35],
            [['teach_emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['teach_emp_id' => 'id']],
            [['sub_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['sub_class_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_name' => 'Subject Name',
            'teach_emp_id' => 'Teacher',
            'sub_time' => 'Subject Time',
            'sub_class_id' => 'Sub Class ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['sub_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['sub_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachEmp()
    {
        return $this->hasOne(Employee::className(), ['id' => 'teach_emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubClass()
    {
        return $this->hasOne(Section::className(), ['id' => 'sub_class_id']);
    }
}
