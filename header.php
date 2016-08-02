<?php
$jumbotp1 = esc_attr(get_option( 'remi_jumbotron_picture'));
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remi Theme</title>
  <?php wp_head(); ?>
  <style type="text/css">
  .jumbotron
  {
      background-image:url('<?php echo $jumbotp1 ?>');
  }
  </style>
</head>

<?php
if(is_front_page())
{
  $remi_classes =array('remi-class','my-class' );
}
else {
  $remi_classes =array('no-remi-class');
}

?>
<body> <?php body_class($remi_classes); ?>

  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-image" href="#"><img src="image/logo.png" alt="Ade Crown" height="60px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!--<ul class="nav navbar-nav nav-pills navbar-right">-->
          <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right'
                )
              );
            ?>
        <!--
          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
