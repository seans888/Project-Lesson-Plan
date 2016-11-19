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
 * @property integer $city_name
 * @property integer $province
 * @property integer $zip_code
 * @property string $birthdate
 * @property string $religion
 * @property integer $gender
 * @property string $nationality
 * @property string $email
 * @property string $mothers_name
 * @property string $fathers_name
 * @property string $guardians_name
 * @property string $mothers_contact_number
 * @property string $fathers_contact_number
 * @property string $guardians_contact_number
 * @property integer $birth_place
 *
 * @property Grade[] $grades
 * @property SectionStudent[] $sectionStudents
 * @property City $cityName
 * @property Gender $gender0
 * @property Province $province0
 * @property Birthplace $birthPlace
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
            [['stud_id_num', 'city_name', 'province', 'zip_code', 'gender', 'birth_place'], 'integer'],
            [['birthdate'], 'safe'],
            [['stud_fname', 'stud_lname', 'stud_mname', 'nationality', 'mothers_name', 'fathers_name', 'guardians_name'], 'string', 'max' => 64],
            [['home_number'], 'string', 'max' => 70],
            [['religion'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 255],
            [['mothers_contact_number', 'fathers_contact_number', 'guardians_contact_number'], 'string', 'max' => 11],
            [['city_name'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_name' => 'id']],
            [['gender'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::className(), 'targetAttribute' => ['gender' => 'id']],
            [['province'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province' => 'id']],
            [['birth_place'], 'exist', 'skipOnError' => true, 'targetClass' => Birthplace::className(), 'targetAttribute' => ['birth_place' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stud_id_num' => 'Student Number',
            'stud_fname' => 'Firstname',
            'stud_lname' => 'Lastname',
            'stud_mname' => 'Middlename',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionStudents()
    {
        return $this->hasMany(SectionStudent::className(), ['section_student' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityName()
    {
        return $this->hasOne(City::className(), ['id' => 'city_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGender0()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince0()
    {
        return $this->hasOne(Province::className(), ['id' => 'province']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBirthPlace()
    {
        return $this->hasOne(Birthplace::className(), ['id' => 'birth_place']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
}
