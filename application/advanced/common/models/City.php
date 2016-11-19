<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $city_name
 *
 * @property Student[] $students
 * @property Student[] $students0
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_name'], 'required'],
            [['city_name'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_name' => 'City Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['city_name' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents0()
    {
        return $this->hasMany(Student::className(), ['birth_place' => 'id']);
    }
}
