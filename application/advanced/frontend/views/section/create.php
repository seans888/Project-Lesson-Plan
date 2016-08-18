<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SectionPost */

$this->title = 'Create Section Post';
$this->params['breadcrumbs'][] = ['label' => 'Section Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
