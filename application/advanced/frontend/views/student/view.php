<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
             //'id',
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'sec.sec_name',
            'email:email',
            'mothers_name:ntext',
            'fathers_name:ntext',
            'guardians_name:ntext',
            'mothers_contact_number',
            'fathers_contact_number',
            'guardians_contact_number',
            'nationality:ntext',
            'gender:ntext',
            'birthdate',
            'religion:ntext',
            'birth_place:ntext',
        ],
    ]) ?>

</div>
