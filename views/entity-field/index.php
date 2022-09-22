<?php

use app\models\EntityField;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EntityFieldSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Entity Fields';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-field-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Entity Field', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_account',
            'id_entity',
            'id_entity_field_type',
            'display_name',
            //'name',
            //'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EntityField $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
