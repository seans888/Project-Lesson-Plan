<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $sub_name
 * @property integer $emp_id
 * @property string $sub_time
 *
 * @property Grade[] $grades
 * @property Sched[] $scheds
 * @property Employee $emp
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
            [['id', 'sub_name', 'emp_id', 'sub_time'], 'required'],
            [['id', 'emp_id'], 'integer'],
            [['sub_time'], 'safe'],
            [['sub_name'], 'string', 'max' => 45],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['emp_id' => 'emp_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_name' => 'Sub Name',
            'emp_id' => 'Emp ID',
            'sub_time' => 'Sub Time',
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
    public function getScheds()
    {
        return $this->hasMany(Sched::className(), ['sub_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['emp_id' => 'emp_id']);
    }
}
