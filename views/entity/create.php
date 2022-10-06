<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Entity $model */

$this->title = 'Create Entity';
$this->params['breadcrumbs'][] = ['label' => 'Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
    <?= $this->render('_formCreate', [
        'model' => $model,
    ]) ?>
</section>
<!-- /.content -->