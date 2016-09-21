<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PetType */

$this->title = 'Додати нову породу';
$this->params['breadcrumbs'][] = ['label' => 'Pet Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
