<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AcademicYear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-year-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'School_Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acad_year_start')->textInput() ?>

    <?= $form->field($model, 'acad_year_end')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
