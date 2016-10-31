<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quarter".
 *
 * @property integer $id
 * @property integer $School_Year
 * @property integer $quarter
 * @property string $quarter_start
 * @property string $quarter_end
 */
class Quarter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quarter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['School_Year', 'quarter', 'quarter_start', 'quarter_end'], 'required'],
            [['School_Year', 'quarter'], 'integer'],
            [['quarter_start', 'quarter_end'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'School_Year' => 'School  Year',
            'quarter' => 'Quarter',
            'quarter_start' => 'Quarter Start (YY/MM/DD)',
            'quarter_end' => 'Quarter End (YY/MM/DD)',
        ];
    }
}
