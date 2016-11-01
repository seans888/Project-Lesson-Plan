<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stud_id_num')->textInput() ?>

    <?= $form->field($model, 'stud_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip_code')->textInput() ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardians_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_contact_number')->textInput() ?>

    <?= $form->field($model, 'fathers_contact_number')->textInput() ?>

    <?= $form->field($model, 'guardians_contact_number')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add Student' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
