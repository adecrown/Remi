<h1>Remi Theme Contact Options</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php">
  <?php settings_fields('remi-contact-group');?>
  <?php do_settings_sections( 'Adekunle_remi2' )?>
  <?php submit_button()?>
</form>
