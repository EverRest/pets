<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\PetSort;

/* @var $this yii\web\View */
/* @var $model frontend\models\PetType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pet-type-form">

    <?php $form = ActiveForm::begin(); ?>
    <!--
    <?= $form->field($model, 'sortes_sort_id')->textInput() ?>
	-->

	<?= $form->field($model, 'sortes_sort_id')->dropDownList(
		ArrayHelper::map(PetSort::find()->all(),'sort_id','sort'),
		['prompt'=>'Виберіть тип']
	) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Змінити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
