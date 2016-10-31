<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Section;

/* @var $this yii\web\View */
/* @var $model common\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teach_emp_id')->dropDownList(

        ArrayHelper::map(Employee::find()->all(),'id','emp_lname','emp_fname'),
        ['prompt' => 'Select Teacher']
        ) ?>

    <?= $form->field($model, 'sub_class_id')->dropDownList(

        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Select Section']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
