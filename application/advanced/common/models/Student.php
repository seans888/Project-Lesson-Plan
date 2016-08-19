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
 * @property Section $sec
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
            [['stud_id_num', 'stud_fname', 'stud_lname', 'stud_mname', 'sec_id', 'email'], 'required'],
            [['stud_id_num', 'sec_id'], 'integer'],
            [['stud_fname', 'stud_lname', 'stud_mname'], 'string', 'max' => 35],
            [['email'], 'string', 'max' => 255],
            [['sec_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['sec_id' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSec()
    {
        return $this->hasOne(Section::className(), ['id' => 'sec_id']);
    }
}
