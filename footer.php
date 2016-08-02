<footer class="container-fluid remi-footer">

  <div class="row">

    <div class="col-md-4 hidden-xs">
      <p><h2 class="bigtitle">Message Me</h2></p>
      <div id="form-messages" role="alert">
      </div>
      <?php
      echo '  <form id="ajax-contact" method="post" action="'.get_template_directory_uri().'/messageSend.php">'
      ?>

      <div class="form-group">
        <label for="name" class="smalltitle">Name:</label>
        <input type="text" class="form-control" id="name" name="name" data-toggle="tooltip" data-placement="right" title="Type in your name" required>
      </div>

      <div class="form-group">
        <label for="email" class="smalltitle">Email:</label>
        <input type="email" class="form-control" id="email" name="email" data-toggle="tooltip" data-placement="right" title="Type in your email" required>
      </div>

      <div class="form-group">
        <label for="message" class="smalltitle">Message:</label>
        <textarea id="message" class="form-control" name="message" data-toggle="tooltip" data-placement="right" title="Reason for your message" required></textarea>
      </div>

      <input type="hidden" class="form-control" id="email2"  value="<?php print esc_attr(get_option( 'remi_contact_email')); ?>" name="email2" required>
      <button type="submit" class="btn btn-primary">Send</button>

    </form>

  </div>
  <div class="col-md-4">
    <p><h2 class="bigtitle">Contact</h2></p>
    <p class="smalltitle"><?php print esc_attr(get_option( 'remi_contact_address')); ?></p>
    <p class="smalltitle"><?php print esc_attr(get_option( 'remi_contact_city')); ?></p>
    <p class="smalltitle"><?php print esc_attr(get_option( 'remi_contact_postcode')); ?></p>
    <p class="smalltitle"><?php print esc_attr(get_option( 'remi_contact_num1')); ?>, <?php print esc_attr(get_option( 'remi_contact_num2')); ?></p>
    <p class="smalltitle"><?php print esc_attr(get_option( 'remi_contact_email')); ?></p>

    <p><h2 class="bigtitle">Social</h2></p>
    <div class="text-left">
      <?php

      $facebook2 = esc_attr(get_option( 'facebook_handler'));
      $twitter2 = esc_attr(get_option( 'twitter_handler'));
      $gplus2 = esc_attr(get_option( 'gplus_handler'));
      $insta2 = esc_attr(get_option( 'instagram_handler'));
      $linkd2 = esc_attr(get_option( 'linkden_handler'));
      echo '
      <a href="https://www.facebook.com/'.$facebook2.'" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/'.$twitter2.'" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
      <a href="https://plus.google.com/'.$gplus2.'" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
      <a href="https://www.instagram.com/'.$insta2.'" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/'.$linkd2.'"class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>

      ';
      ?>

    </div>
  </div>

  <div class="col-md-4">.col-md-4</div>
  <div class="col-xs-12 foot-aut">
    © Copyright <a href="http://redfischer.com" rel="author" >Adecrown</a> <?php echo date("Y");?>
  </div>
</div>


</footer>
<?php wp_footer(); ?>
</body>
</html>
