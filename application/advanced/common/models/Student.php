<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $stud_id_num
 * @property string $stud_fname
 * @property string $stud_lname
 * @property string $stud_mname
 * @property integer $sec_id
 * @property string $email
 *
 * @property Grade[] $grades
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stud_id_num', 'stud_fname', 'stud_lname', 'sec_id', 'email'], 'required'],
            [['id', 'stud_id_num', 'sec_id'], 'integer'],
            [['stud_fname', 'stud_lname', 'stud_mname', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stud_id_num' => 'Stud Id Num',
            'stud_fname' => 'Stud Fname',
            'stud_lname' => 'Stud Lname',
            'stud_mname' => 'Stud Mname',
            'sec_id' => 'Sec ID',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['stud_id' => 'id']);
    }
}
