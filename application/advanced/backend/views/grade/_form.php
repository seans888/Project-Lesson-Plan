<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\AcademicYear;
use common\models\Student;
use common\models\Employee;
use common\models\Subject;
use common\models\Quarter;

/* @var $this yii\web\View */
/* @var $model common\models\Grade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'acad_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'id','School_Year'),
        ['prompt' => 'Select Academic Year']
        ) ?>

    <?= $form->field($model, 'stud_id')->dropDownList(
        ArrayHelper::map(Student::find()->all(),'id','stud_lname','stud_fname'),
        ['prompt' => 'Select Student']
        ) ?>

    <?= $form->field($model, 'emp_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(),'id','emp_lname','emp_fname'),
        ['prompt' => 'Select Teacher']
        ) ?>

    <?= $form->field($model, 'sub_id')->dropDownList(
        ArrayHelper::map(Subject::find()->all(),'id','sub_name'),
        ['prompt' => 'Select Subject']
        ) ?>


    <?= $form->field($model, 'grade')->textInput() ?>

 <?= $form->field($model, 'quarter')->dropDownList(
        ArrayHelper::map(Quarter::find()->all(),'id','quarter'),
        ['prompt' => 'Select Quarter']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
