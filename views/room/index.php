<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of all rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'Name:ntext',
            'Reservation:ntext',

            [
                'format'=>'raw',
                'header'=>'Reserve or remove',
                'value'=>function($data) {
                    if ($data->reserved)
                    {
                        return Html::a('Delete reservation', 
                            ['/room/unreserve','id'=>$data->ID], ['class'=>'btn btn-primary']);
                    }
                    else 
                    {
                        return Html::a('Make a reservation', 
                            ['/room/reserve','id'=>$data->ID], ['class'=>'btn btn-primary']);
                    }
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn', 
                'template'=>'{update} {delete}',
                'header'=>'Manage',
                'buttons' => 
                [
                    'delete' => function($url, $model, $key) {
                    return $model->reserved ? '' : 
                        Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, 
                        ['data-confirm' => 'Are you sure you want to delete this room?', 'data-method' =>'POST'] ); }
                ],
            ],
        ],

        'rowOptions' => function($data) {    
            if ($data->reserved) return ['class'=>'danger']; 
        }

    ]); ?>

</div>
