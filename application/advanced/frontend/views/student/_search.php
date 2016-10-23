<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'stud_id_num') ?>

    <?= $form->field($model, 'stud_fname') ?>

    <?= $form->field($model, 'stud_lname') ?>

    <?= $form->field($model, 'stud_mname') ?>

    <?php // echo $form->field($model, 'sec_id') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'mothers_name') ?>

    <?php // echo $form->field($model, 'fathers_name') ?>

    <?php // echo $form->field($model, 'guardians_name') ?>

    <?php // echo $form->field($model, 'mothers_contact_number') ?>

    <?php // echo $form->field($model, 'fathers_contact_number') ?>

    <?php // echo $form->field($model, 'guardians_contact_number') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
