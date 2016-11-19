<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "birthplace".
 *
 * @property integer $id
 * @property string $birthplace
 *
 * @property Student[] $students
 */
class Birthplace extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'birthplace';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthplace'], 'required'],
            [['birthplace'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'birthplace' => 'Birthplace',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['birth_place' => 'id']);
    }
}
