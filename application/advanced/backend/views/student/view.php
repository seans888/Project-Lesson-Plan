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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'home_number',
            'city_name',
            'province',
            'zip_code',
            'birthdate',
            'religion',
            'gender',
            'nationality',
            'email:email',
            'mothers_name',
            'fathers_name',
            'guardians_name',
            'mothers_contact_number',
            'fathers_contact_number',
            'guardians_contact_number',
            'birth_place',
        ],
    ]) ?>

</div>
