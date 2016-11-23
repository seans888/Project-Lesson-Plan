<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Birthplace */

$this->title = 'Create Birthplace';
$this->params['breadcrumbs'][] = ['label' => 'Birthplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthplace-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
