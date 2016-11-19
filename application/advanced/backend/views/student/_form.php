<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\City;
use common\models\Gender;
use common\models\Province;
use common\models\Birthplace;
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

    <?= $form->field($model, 'gender')->dropDownList(
        ArrayHelper::map(Gender::find()->all(),'id','gender'),
        ['prompt' => 'Choose Gender']
        ) ?>

    <?= $form->field($model, 'home_number')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'city_name')->dropDownList(
        ArrayHelper::map(City::find()->all(),'id','city_name'),
        ['prompt' => 'Choose City']
        ) ?>

  <?= $form->field($model, 'province')->dropDownList(
        ArrayHelper::map(Province::find()->all(),'id','province'),
        ['prompt' => 'Choose Province']
        ) ?>

    <?= $form->field($model, 'zip_code')->textInput() ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'birth_place')->dropDownList(
        ArrayHelper::map(Birthplace::find()->all(),'id','birthplace'),
        ['prompt' => 'Choose Birthplace']
        ) ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

     
    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_name')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'mothers_contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathers_name')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'fathers_contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardians_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardians_contact_number')->textInput(['maxlength' => true]) ?>

     


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
