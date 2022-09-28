<?php

use app\models\Entity;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EntitySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Entities';
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
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
          <div class="box-tools">
            <button class="btn btn-success">+ Novo</button>
          </div>
        </div>

        <div class="box-body">
          <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
              ['class' => 'yii\grid\SerialColumn'],
              'name',
              'code',
              [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Entity $model, $key, $index, $column) {
                  return Url::toRoute([$action, 'id' => $model->id]);
                }
              ],
            ],
          ]); ?>
        </div>

      </div>

    </div>
  </div>

</section>
<!-- /.content -->