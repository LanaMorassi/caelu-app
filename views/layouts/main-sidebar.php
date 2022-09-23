<?php 

$entities = (new \yii\db\Query())
    ->select(['*'])
    ->from('entity')
    ->where(['id_account' => (\Yii::$app->user->id)])
    ->all();

?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <div class="default-img-profile" ><?= substr(\Yii::$app->user->identity->username,0,1) ?></div>

          <!-- <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <p><?= \Yii::$app->user->identity->username ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="/entity"><i class="fa fa-book"></i> <span>Entity</span></a></li>
        <li><a href="/entity-field"><i class="fa fa-book"></i> <span>Entity Fields</span></a></li>

        <?php foreach($entities as $entity): ?>
          <li><a href="/entity-value/index?entity=<?= $entity['code'] ?>"><i class="fa fa-book"></i> <span><?=  $entity['name'] ?></span></a></li>
        <?php endforeach; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
