<?php

use yii\helpers\Html;

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>






        <!-- End Level two -->
    </ul>
</li>
</ul>

<!-- SEARCH FORM -->
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <?php
    if (!Yii::$app->user->isGuest) {
        ?>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"> <?php
                if (!Yii::$app->user->isGuest) {
                    echo Yii::$app->user->identity->username;
                }
                ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

                    <p>
                     <?php
                     if (!Yii::$app->user->isGuest) {
                        echo ucwords(strtolower(Yii::$app->user->identity->nama));
                    }
                    ?>
                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <div class="row">
                    <div class="col-4 text-center">
                        <a href="#">Followers</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="#">Sales</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="#">Friends</a>
                    </div>
                </div>
                <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                <?= Html::a('Sign out', ['site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat float-right']) ?>
            </li>
        </ul>
    </li>
<?php }?>
</ul>
</nav>