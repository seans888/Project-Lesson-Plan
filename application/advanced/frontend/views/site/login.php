<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

 <img src ="http://i63.tinypic.com/2znph6p.png">
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">

 <body style="font-family: Andale Mono; background-color:#F9EE81"> 
 <center>
 <img src ="http://i63.tinypic.com/2znph6p.png"> 
 </center>
 <br>
 
<div class="site-login">
	
    <div class="center-div">
		
        <div class="col-lg-5" style="text-align: center">
		 <h2><?= Html::encode($this->title) ?></h2>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
				
                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
		 <div class="col-lg-2">
		 </div>	
		 <div class="col-lg-5" style="text-align: center">
		 <h1>Is this your first time here?</h1><br>
		 <h4><b> Welcome to Ville Saint John Academy Online Grades Viewer</b></h4><br>
		 <p>To login, use your VSJA network account and password. Answer all the information needed to register your VSJA network account.</p>
		 </p>if you are unable login, please visit the Registrar office</p>
		 </div>
	    </div>
		
</div>

