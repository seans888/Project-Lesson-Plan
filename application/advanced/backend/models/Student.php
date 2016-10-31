<?php

namespace app\models;

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
 * @property string $mothers_name
 * @property string $fathers_name
 * @property string $guardians_name
 * @property integer $mothers_contact_number
 * @property integer $fathers_contact_number
 * @property integer $guardians_contact_number
 * @property string $nationality
 * @property string $gender
 * @property string $birthdate
 * @property string $religion
 * @property string $birth_place
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
            [['stud_id_num', 'stud_fname', 'stud_lname', 'stud_mname', 'sec_id', 'email', 'guardians_name', 'guardians_contact_number', 'nationality', 'gender', 'birthdate', 'religion', 'birth_place'], 'required'],
            [['stud_id_num', 'sec_id', 'mothers_contact_number', 'fathers_contact_number', 'guardians_contact_number'], 'integer'],
            [['mothers_name', 'fathers_name', 'guardians_name', 'nationality', 'gender', 'religion', 'birth_place'], 'string'],
            [['birthdate'], 'safe'],
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
            'mothers_name' => 'Mothers Name',
            'fathers_name' => 'Fathers Name',
            'guardians_name' => 'Guardians Name',
            'mothers_contact_number' => 'Mothers Contact Number',
            'fathers_contact_number' => 'Fathers Contact Number',
            'guardians_contact_number' => 'Guardians Contact Number',
            'nationality' => 'Nationality',
            'gender' => 'Gender',
            'birthdate' => 'Birthdate',
            'religion' => 'Religion',
            'birth_place' => 'Birth Place',
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
