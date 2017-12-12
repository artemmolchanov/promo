<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Discount', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'zone',
            'start',
            'ending',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    if ($model->status == 0)
                        return "deactivate";
                    else return "activate";
                }
            ],
            'remuneration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
