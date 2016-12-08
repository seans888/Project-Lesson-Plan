<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        
        'brandLabel' => 'VSJA Management System',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'my-navbar navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    }else if (yii::$app->user->can('admin')){
            $menuItems[] = ['label' => 'Add User', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Students', 'url' => ['/student/index']];
              $menuItems[] = ['label' => 'Quarter', 'url' => ['/quarter/index']];
              $menuItems[] = ['label' => 'Section', 'url' => ['/section/index']];
              $menuItems[] = ['label' => 'Schedule', 'url' => ['/subject/index']];
                 $menuItems[] = ['label' => 'Schedule Assignment', 'url' => ['/schedule/index']];
             $menuItems[] = ['label' => 'Subject', 'url' => ['/subject/index']];
             $menuItems[] = ['label' => 'Academic Year', 'url' => ['/academic-year/index']];


            $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
            
        } 
        else if(yii::$app->user->can('registrar')){
             $menuItems[] = ['label' => 'Students', 'url' => ['/student/index']];
              $menuItems[] = ['label' => 'Quarter', 'url' => ['/quarter/index']];
              $menuItems[] = ['label' => 'Section', 'url' => ['/section/index']];
              $menuItems[] = ['label' => 'Schedule', 'url' => ['/subject/index']];
               $menuItems[] = ['label' => 'Academic Year', 'url' => ['/academic-year/index']];

             $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
        }
        else if(yii::$app->user->can('department_head')){
            $menuItems[] = ['label' => 'Schedule Assignment', 'url' => ['/schedule/index']];
             $menuItems[] = ['label' => 'Section', 'url' => ['/subject/index']];

            $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
        }
        else if(yii::$app->user->can('HR')){
            $menuItems[] = ['label' => 'Employee', 'url' => ['/employee/index']];
             $menuItems[] = ['label' => 'Job', 'url' => ['/job/index']];

            $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
        }
    else  {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
            
    } 

    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>





    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <center>
        <font color="white">
        &copy; VILLE ST. JOHN ACADEMY <?= date('Y') ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
