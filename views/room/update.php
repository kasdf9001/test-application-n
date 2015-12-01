<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = 'Rename room: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<div class="room-form">

	    <?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($model, 'Name')->textInput() ?>

		    <div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		    </div>

	    <?php ActiveForm::end(); ?>

	</div>

</div>
