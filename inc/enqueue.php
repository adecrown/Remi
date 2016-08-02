<?php

function remi_load_admin_scripts($hook)
{
  wp_enqueue_media();
  wp_register_script( 'remi-admin-script', get_template_directory_uri().'/js/remi.admin.js',array('jquery'),'1.0.0', true );
  wp_enqueue_script('remi-admin-script' );
}


add_action( 'admin_enqueue_scripts','remi_load_admin_scripts' )

?>
