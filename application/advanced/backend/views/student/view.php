<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Student */


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
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'gender0.gender',
            'home_number',
            'cityName.city_name',
            'province0.province',
            'zip_code',
            'birthdate',
            'birthPlace.birthplace',
            'religion',
            'nationality',
            'email:email',
            'mothers_name',
            'mothers_contact_number',
            'fathers_name',
            'fathers_contact_number',
            'guardians_name',
            'guardians_contact_number',
            
        ],
    ]) ?>

</div>
