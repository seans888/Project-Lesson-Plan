<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Section;

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

    <?= $form->field($model, 'sec_id')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Select Section']
        ) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fathers_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'guardians_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mothers_contact_number')->textInput() ?>

    <?= $form->field($model, 'fathers_contact_number')->textInput() ?>

    <?= $form->field($model, 'guardians_contact_number')->textInput() ?>

    <?= $form->field($model, 'nationality')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gender')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'religion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'birth_place')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
