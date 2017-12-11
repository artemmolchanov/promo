<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Code */

$this->title = 'Update Code: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

$city = \app\models\City::find()->all();
$items = ArrayHelper::map($city,'city_name','city_name');
$params = [
    'prompt' => 'Choose a city'
];
?>
<div class="code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="code-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'start')->textInput(['type' => 'date']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'ending')->textInput(['type' => 'date']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'status')->dropDownList([
                    '0' => 'deactivate',
                    '1' => 'activate'
                ]); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'zone')->dropDownList($items, $params); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'remuneration')->textInput() ?>
            </div>
        </div>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
