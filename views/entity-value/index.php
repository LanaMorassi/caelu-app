<?php

use app\models\EntityValue;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EntityValueSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Entity Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-value-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Entity Value', ['create?entity='.$entity['code']], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <?php foreach($fields as $field): ?>
                <th>
                    <?= $field['name'] ?>
                </th>
            <?php endforeach; ?>
       
        <th class="action-column">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item): ?>
            <tr data-key="1">
                <?php foreach($fields as $field): ?>
                    <td><?= isset($item[$field['name']]) ? $item[$field['name']] : '' ?></td>
                <?php endforeach; ?>
                <td> actions</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_account',
            'id_entity_field',
            'id_entity_value_group',
            'value:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EntityValue $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?> -->


</div>
