<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PetType */

$this->title = 'Змінити породу: ' . $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Pet Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pet-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
