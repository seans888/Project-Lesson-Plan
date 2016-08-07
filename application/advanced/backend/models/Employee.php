<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_job
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_mname
 * @property string $email
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
            [['id', 'emp_job', 'emp_fname', 'emp_lname', 'emp_mname', 'email'], 'required'],
            [['id'], 'integer'],
            [['emp_job', 'emp_fname', 'emp_lname', 'emp_mname', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_job' => 'Emp Job',
            'emp_fname' => 'Emp Fname',
            'emp_lname' => 'Emp Lname',
            'emp_mname' => 'Emp Mname',
            'email' => 'Email',
        ];
    }
}
