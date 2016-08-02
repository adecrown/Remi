<?php get_header();?>
<div class="jumbotron">

  <div class="container">

    <?php
    $jumbot1 = esc_attr(get_option( 'remi_jumbotron'));
    $jumbotlink1 = esc_attr(get_option( 'remi_jumbotron_link'));
    $jumbotgreet = esc_attr(get_option( 'remi_jumbotron_greeting'));
    $facebook1 = esc_attr(get_option( 'facebook_handler'));
    $twitter1 = esc_attr(get_option( 'twitter_handler'));
    $gplus1 = esc_attr(get_option( 'gplus_handler'));
    echo '
    <h1>'.$jumbotgreet.'</h1>
    <p>'.$jumbot1.'</p>

    <p><a href="'.$jumbotlink1.'" class="btn btn-primary btn-lg" role="button">Learn more</a>
    </p>

    <a href="https://www.facebook.com/'.$facebook1.'"> <img src="'.get_template_directory_uri().'/image/remi-facebook.png" alt="Facebook" class=" socialpng"></a>
    <a href="https://twitter.com/'.$twitter1.'"><img src="'.get_template_directory_uri().'/image/remi-twitter.png" alt="Twitter" class=" socialpng"></a>
    <a href="https://plus.google.com/'.$gplus1.'"><img src="'.get_template_directory_uri().'/image/remi-gplus.png" alt="Google+" class=" socialpng"></a>
    ';
    ?>

  </div>
</div>
<div class="container">
  <div class="row">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <?php
          $thumbnail1 = esc_attr(get_option( 'thumbnail_one'));
          $link1 = esc_attr(get_option( 'thumbnail_one_link'));
          $pictone = esc_attr(get_option( 'thumbnail_one_pic'));
          $thumT = esc_attr(get_option( 'thumbnail_one_title'));
          ?>
          <img src="<?php print $pictone ?>" alt="image">
          <div class="caption">
            <h3><?php print $thumT ;?></h3>

            <p><?php print $thumbnail1 ;?></p>
            <p><a href="<?php print $link1 ?>" class="btn btn-primary" role="button">More</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <?php
          $thumbnail1 = esc_attr(get_option( 'thumbnail_two'));
          $link1 = esc_attr(get_option( 'thumbnail_two_link'));
          $picttwo = esc_attr(get_option( 'thumbnail_two_pic'));
          $thumT2 = esc_attr(get_option( 'thumbnail_two_title'));
          ?>
          <img src="<?php print $picttwo ?>" alt="image">
          <div class="caption">
            <h3><?php print $thumT2 ;?></h3>

            <p><?php print $thumbnail2 ;?></p>
            <p><a href="<?php print $link2 ?>" class="btn btn-primary" role="button">More</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <?php
          $thumbnail3 = esc_attr(get_option( 'thumbnail_three'));
          $link3 = esc_attr(get_option( 'thumbnail_three_link'));
          $pictthree = esc_attr(get_option( 'thumbnail_three_pic'));
          $thumT3 = esc_attr(get_option( 'thumbnail_three_title'));
          ?>
          <img src="<?php print $pictthree ?>" alt="image">
          <div class="caption">
            <h3><?php print $thumT3 ;?></h3>
            <p><?php print $thumbnail3 ;?></p>
            <p><a href="<?php print $link3 ?>" class="btn btn-primary" role="button">More</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 mainpost">
      <?php
      if( have_posts() )
      {
        while( have_posts()):the_post();
        ?>
        <h3> <?php the_content(); ?> </h3>
      <?php endwhile;
    }
    ?>
  </div>
  <div class="col-md-4">
    <ul class="list-group">
      <?php
      $homelistitle1 = esc_attr(get_option( 'remi_home_list_title'));
      echo '  <li class="list-group-item active capi">'.$homelistitle1.'</li>';

      $homelis1 = esc_attr(get_option( 'remi_home_list'));
      $listsr = explode(";",$homelis1);

      foreach($listsr as $x => $x_value) {
        if($x_value != "")
        {
          echo '<li class="list-group-item">'.$x_value.'</li>';
        }
      }
      ?>

    </ul>
  </div>
</div>
</div>

<?php get_footer(); ?>
