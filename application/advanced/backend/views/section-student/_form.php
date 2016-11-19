<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Section;
use common\models\Student;

/* @var $this yii\web\View */
/* @var $model common\models\SectionStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_name')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','section_name'),
        ['prompt' => 'Select Section']
        ) ?>

     <?= $form->field($model, 'section_student')->dropDownList(
        ArrayHelper::map(Student::find()->all(),'id','stud_fname','stud_lname'),
        ['prompt' => 'Select Student']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
