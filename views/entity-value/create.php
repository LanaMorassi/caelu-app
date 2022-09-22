<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EntityValue $model */

$this->title = 'Create Entity Value';
$this->params['breadcrumbs'][] = ['label' => 'Entity Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
