<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pet */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Змінити', ['update', 'id' => $model->pet_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Знищити', ['delete', 'id' => $model->pet_id], [
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
            'pet_id',
            'owner_id',
            'name',
            'description:ntext',
            'created_at',
            'address',
            'type_id',
            'find',
            'img',
        ],
    ]) ?>

</div>
