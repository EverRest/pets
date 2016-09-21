<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PetType */

$this->title = $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Pet Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновити', ['update', 'id' => $model->type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Знищити', ['delete', 'id' => $model->type_id], [
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
            'type_id',
            'type',
            'sortes_sort_id',
        ],
    ]) ?>

</div>
