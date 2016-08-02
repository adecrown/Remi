<h1>Remi Theme Options</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php">
  <?php settings_fields('remi-settings-group');?>
  <?php do_settings_sections( 'Adekunle_remi' )?>
  <?php submit_button()?>
</form>
