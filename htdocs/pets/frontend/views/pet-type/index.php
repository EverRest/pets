<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PetTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Породи улюбленців';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати нову', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(['timeout' => 2000]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'type_id',
            'type',
            'sortesSort.sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
