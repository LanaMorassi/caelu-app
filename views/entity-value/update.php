<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EntityValue $model */

$this->title = 'Update Entity Value: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Entity Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="entity-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
