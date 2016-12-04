<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Subject;
use common\models\Time;
use common\models\Employee;
use common\models\AcademicYear;
use common\models\section;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(['enableAjaxValidation'=>true]); ?>

   

    <?= $form->field($model, 'sub_id')->dropDownList(
        ArrayHelper::map(Subject::find()->all(),'id','sub_name'),
        ['prompt' => 'Choose Subject']
        ) ?>

    
    <?= $form->field($model, 'sub_time_start')->dropDownList(
        ArrayHelper::map(Time::find()->all(),'id','time'),
        ['prompt' => 'Time']
        ) ?>

    <?= $form->field($model, 'sub_time_end')->dropDownList(
        ArrayHelper::map(Time::find()->all(),'id','time'),
        ['prompt' => 'Time']
        ) ?>

    <?= $form->field($model, 'teach_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(),'id','emp_lname','emp_fname'),
        ['prompt' => 'Subject Teacher']
        ) ?>

    <?= $form->field($model, 'acad_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'id','School_Year'),
        ['prompt' => 'School Year']
        ) ?>

 <?= $form->field($model, 'section')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Section']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
