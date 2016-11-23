<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use yii\helpers\ArrayHelper;
$this->title = 'Signup';


$this->title = 'Sign-up';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
<body style="font-family: Andale Mono; background-color:#F9EE81"> 
    <p>Please fill-out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

               
                <?php
                $authItem = ArrayHelper::map($authItem,'name','name');
                ?>
                 <?= $form-> field($model,'permissions')->checkboxList($authItem);?>

                <div class="form-group">
                    <?= Html::submitButton('Sign-up', ['class' => 'btn btn-primary', 'name' => 'sign-up-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
