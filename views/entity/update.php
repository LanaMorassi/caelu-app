<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Entity $model */

$this->title = 'Update Entity: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Segmentação
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= Html::encode($this->title) ?></li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <?= $this->render('_form', [
        'model' => $model,
        'entityFields' => $entityFields
    ]) ?>

</section>
<!-- /.content -->