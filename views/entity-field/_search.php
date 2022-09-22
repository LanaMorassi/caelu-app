<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EntityFieldSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="entity-field-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_account') ?>

    <?= $form->field($model, 'id_entity') ?>

    <?= $form->field($model, 'id_entity_field_type') ?>

    <?= $form->field($model, 'display_name') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
