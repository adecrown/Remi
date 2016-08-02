<?php get_header();?>
<div class="container pull-down">
  <div class="row">
    <div class="col-md-8">
      <?php
      if( have_posts() )
      {
        while( have_posts()):the_post();?>
        <div class="col-md-12 pagetitleR">
          <h3> <?php the_title(); ?> </h3>
        </div>
        <h3> <?php the_content(); ?> </h3>
      <?php endwhile;
    }
    ?>
  </div>
  <div class="col-md-4 remi-sidebar">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.</div>
</div>



</div>

<?php get_footer(); ?>
