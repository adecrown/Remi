<?php
//require_once ( get_stylesheet_directory() . '/theme-options.php' );

require  get_template_directory() . '/inc/function-admin.php';
require  get_template_directory() . '/inc/enqueue.php';

function remi_script_enqueue()
{
  wp_enqueue_style('bootstrapStyle',get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3', 'all' );

  wp_enqueue_style('customStyle',get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );

wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/bootstrap/js/jquery.js', array(), '1.12.3', true);

wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '4', true);

  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/remi.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts','remi_script_enqueue');

function remi_theme_setup()
{
  add_theme_support('menus');
  register_nav_menu('primary','Primary Header Navigation' );
}

add_action('init','remi_theme_setup')
?>
