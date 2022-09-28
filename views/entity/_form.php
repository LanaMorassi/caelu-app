<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Entity $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="row">

    <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Novo Campo</h3>
            </div>

            <?php $form = ActiveForm::begin(); ?>
            <div class="box-body">
                <?= $form->field($model, 'id_entity_field_type')->textInput() ?>

                <?= $form->field($model, 'display_name')->textInput(['maxlength' => true, 'id' => 'entity_field_name', 'oninput' =>  'generateCodeEntity()']) ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'disabled' => "", 'id' => 'entity_field_code']) ?>

                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('+ Adicionar', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>

    </div>

    <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Campos</h3>
            </div>
            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Campo</th>
                            <th>Tipo</th>
                            <th>&nbsp;</th>
                        </tr>
                        <?php foreach ($entityFields as $entityField) : ?>
                            <tr>
                                <td><?= $entityField['display_name']; ?></td>
                                <td><?= $entityField['tipo_campo']; ?></td>
                                <td> 
                                    <a href="<?= Url::to(['entity-field/delete', 'id' => $entityField['id']]) ?>"><i class="fa fa-remove"></i></a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>
