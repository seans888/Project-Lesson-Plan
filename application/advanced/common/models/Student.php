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
 * @property string $home_number
 * @property string $city_name
 * @property string $province
 * @property integer $zip_code
 * @property string $birthdate
 * @property string $religion
 * @property string $gender
 * @property string $nationality
 * @property string $email
 * @property string $mothers_name
 * @property string $fathers_name
 * @property string $guardians_name
 * @property integer $mothers_contact_number
 * @property integer $fathers_contact_number
 * @property integer $guardians_contact_number
 * @property string $birth_place
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
            [['stud_id_num', 'stud_fname', 'stud_lname', 'home_number', 'city_name', 'province', 'zip_code', 'birthdate', 'religion', 'gender', 'nationality', 'email', 'guardians_name', 'guardians_contact_number', 'birth_place'], 'required'],
            [['stud_id_num', 'zip_code', 'mothers_contact_number', 'fathers_contact_number', 'guardians_contact_number'], 'integer'],
            [['birthdate'], 'safe'],
            [['stud_fname', 'stud_lname', 'stud_mname', 'city_name', 'province', 'nationality', 'mothers_name', 'fathers_name', 'guardians_name', 'birth_place'], 'string', 'max' => 64],
            [['home_number'], 'string', 'max' => 70],
            [['religion'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 255],
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
            'home_number' => 'Home Number',
            'city_name' => 'City Name',
            'province' => 'Province',
            'zip_code' => 'Zip Code',
            'birthdate' => 'Birthdate',
            'religion' => 'Religion',
            'gender' => 'Gender',
            'nationality' => 'Nationality',
            'email' => 'Email',
            'mothers_name' => 'Mothers Name',
            'fathers_name' => 'Fathers Name',
            'guardians_name' => 'Guardians Name',
            'mothers_contact_number' => 'Mothers Contact Number',
            'fathers_contact_number' => 'Fathers Contact Number',
            'guardians_contact_number' => 'Guardians Contact Number',
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
}
