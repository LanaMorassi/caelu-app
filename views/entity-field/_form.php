<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EntityField $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="entity-field-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_entity')->textInput() ?>

    <?= $form->field($model, 'id_entity_field_type')->textInput() ?>

    <?= $form->field($model, 'display_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
