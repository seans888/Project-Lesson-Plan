<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LogPost */

$this->title = 'Create Log Post';
$this->params['breadcrumbs'][] = ['label' => 'Log Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
