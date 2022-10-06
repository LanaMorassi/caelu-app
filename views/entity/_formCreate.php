<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Entity $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Nova Entidade</h3>
            </div>

            <?php $form = ActiveForm::begin(); ?>
            <div class="box-body">

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

                <div class="col-md-6">
                    <a href="javascript:history.back()" class="btn btn-danger"> Voltar </a>
                </div>

                <div class="col-md-6 text-right">
                    <div class="form-group">
                        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>