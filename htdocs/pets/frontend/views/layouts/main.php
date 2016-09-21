<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
 <!--   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9f4vaqJWN_wp_rxw5lDTwveJbD4Qo-Lg&amp;libraries=places&amp;callback=initMap"></script>-->
</head>
<body>
<?php $this->beginBody() ?>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="row">  
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="#">
                <p><span>P</span><strong>e</strong>t</p>
                <p><span>S</span><strong>ea</strong>rch</p>
              </a>
            </div><!-- end navbar-header -->
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" id="map-search" class="form-control" placeholder="Введіть адресу">
              </div>
              <button type="submit" class="btn btn-default">Пошук</button>
            </form>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right menu-top">
                <li><a href="#">Домашня <span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">Про Нас <span class="glyphicon glyphicon-info-sign" ></span></a></li>
                <li><a href="#">Контакт <span class="glyphicon glyphicon-envelope" ></span></a></li>
                <!--
                <li><a href="#">Реєстрація <span class="glyphicon glyphicon-plus"></span></a></li>
                <li><a href="#">Логін <span class="glyphicon glyphicon-user"></span></a></li>
              -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Авторизація <span class="glyphicon glyphicon-user"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Реєстрація</a></li>
                    <li><a href="#">Логін</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Пошук <span class="glyphicon glyphicon-search"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Галерея Знайдених</a></li>
                    <li><a href="#">Управління категоріями</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Пошук Загублених</a></li>
                  </ul><!-- end navbar-nav -->
                </li>
              </ul><!-- end navbar-collapse -->
            </div><!-- end.navbar-collapse -->
          </div><!-- end row -->
        </div><!-- end container-->
      </nav>
    </header>
        
    <?= $content ?>

    <footer class="navbar-fixed-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 col-xs-3">
            <p>Copyright &#169;2016</p>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-6">
            <nav class="bottom-menu">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-vk fa-3x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3 col-sm-3 col-xs-3">
            <p>Designed by <a href="#">me</a> 
              <span class="glyphicon glyphicon-star-empty"></span>
            </p>
          </div>
        </div><!-- end row -->
      </div><!-- end container -->
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>