<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = 'Make a reservation for room: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name];
$this->params['breadcrumbs'][] = 'Reserve';
?>
<div class="room-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<div class="room-form">

	    <?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($model, 'Reservation')->textInput() ?>

		    <div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		    </div>

	    <?php ActiveForm::end(); ?>

	</div>


</div>
