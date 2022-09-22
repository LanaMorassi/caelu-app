<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EntityField $model */

$this->title = 'Create Entity Field';
$this->params['breadcrumbs'][] = ['label' => 'Entity Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-field-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
