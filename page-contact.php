<?php get_header();?>

<div class="container-fluid pull-down">
  <?php
  $homead1 = esc_attr(get_option( 'remi_contact_address'));
  $cityad = esc_attr(get_option( 'remi_contact_city'));
  //$listsrad1 = explode(" ",$homead1);
  $namead = str_replace(' ', '+', $homead1);
  $nacityad = str_replace(' ', '+', $cityad);
  ?>

  <iframe
  width="100%"
  height="400"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAbmIS0twUptqcXJprAgulmEsuhuT8vRCY
  &q=<?php print $name; ?>,<?php print $nacityad; ?>" allowfullscreen>
</iframe>

</div>
<div class="container pull-down">
  <div class="row">
    <div class="col-md-8 mainpost">
      <p><h2 class="bigtitle">Message Me</h2></p>
      <div id="form-messages" role="alert">
      </div>
      <?php
      echo '  <form id="ajax-contact" method="post" action="'.get_template_directory_uri().'/messageSend.php">'
      ?>

      <div class="form-group">
        <label for="name" class="smalltitle2">Name:</label>
        <input type="text" class="form-control" id="name" name="name" data-toggle="tooltip" data-placement="right" title="Type in your name" required>
      </div>

      <div class="form-group">
        <label for="email" class="smalltitle2">Email:</label>
        <input type="email" class="form-control" id="email" name="email" data-toggle="tooltip" data-placement="right" title="Type in your email" required>
      </div>

      <div class="form-group">
        <label for="message" class="smalltitle2">Message:</label>
        <textarea id="message" class="form-control" name="message" data-toggle="tooltip" data-placement="right" title="Reason for your message" required></textarea>
      </div>

      <input type="hidden" class="form-control" id="email2"  value="<?php print esc_attr(get_option( 'remi_contact_email')); ?>" name="email2" required>

      <button type="submit" class="btn btn-primary">Send Message</button>

    </form>
    <br/>
    <p><h2 class="bigtitle">Contact</h2></p>
    <p class="smalltitle23"><?php print esc_attr(get_option( 'remi_contact_address')); ?></p>
    <p class="smalltitle23"><?php print esc_attr(get_option( 'remi_contact_city')); ?></p>
    <p class="smalltitle23"><?php print esc_attr(get_option( 'remi_contact_postcode')); ?></p>
    <p class="smalltitle23">Tel: <?php print esc_attr(get_option( 'remi_contact_num1')); ?>, <?php print esc_attr(get_option( 'remi_contact_num2')); ?></p>
    <p class="smalltitle23">Email: <a href="mailto:<?php print esc_attr(get_option( 'remi_contact_email')); ?>" target="_top"><?php print esc_attr(get_option( 'remi_contact_email')); ?></a></p>
  </div>

  <div class="col-md-4 hidden-xs">
  <p class="banner-cont"> Tel:</p>
    <p class="banner-cont">  <?php print esc_attr(get_option( 'remi_contact_num1')); ?></p>
    <p class="banner-cont">  <?php print esc_attr(get_option( 'remi_contact_num2')); ?></p>
  </div>
</div>
</div>
<?php get_footer(); ?>
