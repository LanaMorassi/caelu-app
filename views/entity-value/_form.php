<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EntityValue $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="entity-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php foreach($fields as $field): ?>
        <div class="form-group field-entityvalue-id_account has-success">
            <label class="control-label" for="entityvalue-id_account"><?= $field['name'] ?></label>
            <input type="text" class="form-control" name="<?= $field['id'] ?>">

            <div class="help-block"></div>
        </div>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
