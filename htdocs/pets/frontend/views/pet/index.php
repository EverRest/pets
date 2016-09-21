<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Загублені улюбленці';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати загубленого', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(['timeout' => 2000]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            //'pet_id',
            'owner.email',
            'name',
            'description:ntext',
            //'created_at',
            'address',
            'type.type',
            // 'find',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
