<?php
/*
===========================
ADMIN PAGE
===========================
*/


function remi_add_admin_page()
{
  // generate remi admin page
  add_menu_page('Remi Theme Options','Remi','manage_options','Adekunle_remi','remi_theme_create_page',get_template_directory_uri() . '/image/remi_icon_icon.ico', '110' );

  // genere remi admin sub pages
  add_submenu_page( 'Adekunle_remi', 'Remi Theme Options', 'General', 'manage_options', 'Adekunle_remi','remi_theme_create_page' );

  add_submenu_page( 'Adekunle_remi', 'Remi Contact Options', 'Contact Options', 'manage_options', 'Adekunle_remi_contact','remi_theme_contact_page' );

  //Activate custom settings
  add_action( 'admin_init', 'remi_custom_settings' );
}


add_action('admin_menu','remi_add_admin_page');


function remi_custom_settings()
{
  /*
  for general page
  */
  register_setting( 'remi-settings-group','thumbnail_one');
  register_setting( 'remi-settings-group','thumbnail_one_title');
  register_setting( 'remi-settings-group','thumbnail_one_link');
  register_setting( 'remi-settings-group','thumbnail_one_pic');

  register_setting( 'remi-settings-group','thumbnail_two');
  register_setting( 'remi-settings-group','thumbnail_two_title');
  register_setting( 'remi-settings-group','thumbnail_two_link');
  register_setting( 'remi-settings-group','thumbnail_two_pic');

  register_setting( 'remi-settings-group','thumbnail_three');
  register_setting( 'remi-settings-group','thumbnail_three_title');
  register_setting( 'remi-settings-group','thumbnail_three_link');
  register_setting( 'remi-settings-group','thumbnail_three_pic');

  register_setting( 'remi-settings-group','remi_jumbotron');
  register_setting( 'remi-settings-group','remi_jumbotron_link');
  register_setting( 'remi-settings-group','remi_jumbotron_greeting');
  register_setting( 'remi-settings-group','remi_jumbotron_picture');
  register_setting( 'remi-settings-group','remi_home_list');
  register_setting( 'remi-settings-group','remi_home_list_title');


  /*
  for contact page
  */
  register_setting( 'remi-contact-group','remi_contact_email');
  register_setting( 'remi-contact-group','remi_contact_address');
  register_setting( 'remi-contact-group','remi_contact_city');
  register_setting( 'remi-contact-group','remi_contact_postcode');
  register_setting( 'remi-contact-group','remi_contact_num1');
  register_setting( 'remi-contact-group','remi_contact_num2');
  register_setting( 'remi-contact-group','twitter_handler','remi_sanitize_twitter_handler');
  register_setting( 'remi-contact-group','facebook_handler');
  register_setting( 'remi-contact-group','gplus_handler');
  register_setting( 'remi-contact-group','instagram_handler');
  register_setting( 'remi-contact-group','linkden_handler');


  add_settings_section( 'remi-home-options', 'Home Options',
  'remi_home_options', 'Adekunle_remi');

  add_settings_section( 'remi-contact-options', 'Contact Options',
  'remi_contact_options', 'Adekunle_remi2');


  /*
  for general page
  */
  add_settings_field( 'thumbnail-one', 'Thumbnail One', 'remi_thumbnail_one',
  'Adekunle_remi','remi-home-options');

  add_settings_field( 'thumbnail-two', 'Thumbnail Two', 'remi_thumbnail_two',
  'Adekunle_remi','remi-home-options');

  add_settings_field( 'thumbnail-three', 'Thumbnail Three', 'remi_thumbnail_three',
  'Adekunle_remi','remi-home-options');

  add_settings_field( 'remi-jumbotron-im', 'Jumbotron', 'remi_jumbotron_handler',
  'Adekunle_remi','remi-home-options');

  add_settings_field( 'remi-home-lis', 'Homepage Lists', 'remi_home_page_list',
  'Adekunle_remi','remi-home-options');


  /*
  for contact page
  */
  add_settings_field( 'email-add', 'Email Address', 'remi_email_address',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'address-add', 'Full Address', 'remi_a_address',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'phone-add', 'Contact Number', 'remi_a_contact',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'twitter-im', 'Twitter Handler', 'remi_home_twitter_handler',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'facebook-im', 'Facebook Handler', 'remi_home_facebook_handler',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'gplus-im', 'Google+ Handler', 'remi_home_gplus_handler',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'instagram-im', 'Instagram Handler', 'remi_home_instgram_handler',
  'Adekunle_remi2','remi-contact-options');

  add_settings_field( 'linkden-im', 'LinkdIn Handler', 'remi_home_linkden_handler',
  'Adekunle_remi2','remi-contact-options');

}

function remi_home_page_list()
{
  $homelis = esc_attr(get_option( 'remi_home_list'));
  $homelistitle = esc_attr(get_option( 'remi_home_list_title'));
  echo'
  <textarea class="form-control" rows="5"  column="8" id="remi_home_list" name="remi_home_list">'.$homelis.'</textarea>
  <p class="description">Make sure each word or sentence in your list above is seperated by semicolon(;).</p>

  <input type="text" name="remi_home_list_title" value="'.$homelistitle.'"placeholder="List Title"
  />
  <p class="description">Give your list a title.</p>
  ';
}

function remi_a_contact()
{
  $phone1r = esc_attr(get_option( 'remi_contact_num1'));
  $phone2r =esc_attr(get_option( 'remi_contact_num2'));
  echo '
  <input type="tel" name="remi_contact_num1" value="'.$phone1r.'"placeholder="Contact Number 1"
  />
  <input type="tel" name="remi_contact_num2" value="'.$phone2r.'"placeholder="Contact Number 2"
  />';
}

function remi_a_address()
{
  $streetadd = esc_attr(get_option( 'remi_contact_address'));
  $cityadd =esc_attr(get_option( 'remi_contact_city'));
  $postcodeadd =esc_attr(get_option( 'remi_contact_postcode'));

  echo '
  <input type="text" name="remi_contact_address" value="'.$streetadd.'"placeholder="House number and street"
  /><input type="text" name="remi_contact_city" value="'.$cityadd.'"placeholder="City"
  /><input type="text" name="remi_contact_postcode" value="'.$postcodeadd.'"placeholder="Post Code"
  />';
}


function remi_email_address()
{
  $emailadd = esc_attr(get_option( 'remi_contact_email'));
  echo '
  <input type="email" name="remi_contact_email" value="'.$emailadd.'"placeholder="Your Email"
  />';
}

function remi_jumbotron_handler()
{
  $jumbo1 = esc_attr(get_option( 'remi_jumbotron'));
  $jumblinkone = esc_attr(get_option( 'remi_jumbotron_link'));
  $jumbgreet = esc_attr(get_option( 'remi_jumbotron_greeting'));
  $jumbpic = esc_attr(get_option( 'remi_jumbotron_picture'));
  //echo '<input type="text" name="thumbnail_one" value="'.$firstName.'"';
  echo'
  <textarea class="form-control" rows="5"  column="8" id="remi_jumbotron" name="remi_jumbotron">'.$jumbo1.'</textarea>
  <input type="text" name="remi_jumbotron_link" value="'.$jumblinkone.'" placeholder="Link"
  />
  <input type="text" name="remi_jumbotron_greeting" value="'.$jumbgreet.'"placeholder="Greeting"
  />
  <input type="button" class="button button-secondary" value="Upload a picture" id="upload-button">
  <input type="hidden" id="jumbopt" name="remi_jumbotron_picture" value="'.$jumbpic.'"/>
  ';
}

function remi_home_gplus_handler()
{
  $gplus = esc_attr(get_option( 'gplus_handler'));
  echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ Handler"/>';
}

function remi_home_facebook_handler()
{
  $facebook = esc_attr(get_option( 'facebook_handler'));
  echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Handler"/>';
}

function remi_home_twitter_handler()
{
  $twitter = esc_attr(get_option( 'twitter_handler'));
  echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter Handler"
  /> <p class="description">Input your twitter handle without the @ character.</p>';
}

function remi_home_instgram_handler()
{
  $instagramer = esc_attr(get_option( 'instagram_handler'));
  echo '<input type="text" name="instagram_handler" value="'.$instagramer.'" placeholder="Instagram Handler"
  />';
}
function remi_home_linkden_handler()
{
  $linkdener = esc_attr(get_option( 'linkden_handler'));
  echo '<input type="text" name="linkden_handler" value="'.$linkdener.'" placeholder="LinkdIn Handler"
  />';
}


function remi_thumbnail_one()
{
  $thumbnail1 = esc_attr(get_option( 'thumbnail_one'));
  $linkone = esc_attr(get_option( 'thumbnail_one_link'));
  $picone = esc_attr(get_option( 'thumbnail_one_pic'));
  $thumbT1 = esc_attr(get_option( 'thumbnail_one_title'));
  //echo '<input type="text" name="thumbnail_one" value="'.$firstName.'"';
  echo'
  <textarea class="form-control" rows="5"  column="8" id="thumbnail_one" name="thumbnail_one">'.$thumbnail1.'</textarea>
  <input type="text" name="thumbnail_one_title" value="'.$thumbT1.'" placeholder="Thumbnail One Title"
  />
  <input type="text" name="thumbnail_one_link" value="'.$linkone.'" placeholder="Thumbnail One Link"
  />
  <input type="button" class="button button-secondary" value="Upload first thumbnail" id="upload-button-thumb-one">
  <input type="hidden" id="jumboptm" name="thumbnail_one_pic" value="'.$picone.'"/>
  ';
}

function remi_thumbnail_two()
{
  $thumbnail2 = esc_attr(get_option('thumbnail_two'));
  $linktwo = esc_attr(get_option( 'thumbnail_two_link'));
  $pic2 = esc_attr(get_option( 'thumbnail_two_pic'));
  $thumbT2 = esc_attr(get_option( 'thumbnail_two_title'));
  echo'
  <textarea class="form-control" rows="5"  column="8" id="thumbnail_two" name="thumbnail_two">'.$thumbnail2.'</textarea>
  <input type="text" name="thumbnail_two_title" value="'.$thumbT2.'" placeholder="Thumbnail Two Title"
  />
  <input type="text" name="thumbnail_two_link" value="'.$linktwo.'" placeholder="Thumbnail Two Link"
  />
  <input type="button" class="button button-secondary" value="Upload second thumbnail" id="upload-button-thumb-two">
  <input type="hidden" id="jumboptm2" name="thumbnail_two_pic" value="'.$pic2.'"/>
  ';
}

function remi_thumbnail_three()
{
  $thumbnail3 = esc_attr(get_option('thumbnail_three'));
  $linkthree = esc_attr(get_option( 'thumbnail_three_link'));
  $pic3 = esc_attr(get_option( 'thumbnail_three_pic'));
  $thumbT3 = esc_attr(get_option( 'thumbnail_three_title'));
  echo'
  <textarea class="form-control" rows="5"  column="8" id="thumbnail_three" name="thumbnail_three">'.$thumbnail3.'</textarea>
  <input type="text" name="thumbnail_three_title" value="'.$thumbT3.'" placeholder="Thumbnail Three Title"
  />
  <input type="text" name="thumbnail_three_link" value="'.$linkthree.'" placeholder="Thumbnail Three Link"
  />
  <input type="button" class="button button-secondary" value="Upload third thumbnail" id="upload-button-thumb-three">
  <input type="hidden" id="jumboptm3" name="thumbnail_three_pic" value="'.$pic3.'"/>
  ';
}


//sanitation function
function remi_sanitize_twitter_handler($input)
{
  $output = sanitize_text_field($input);
  $output = str_replace('@','',$output);
  return $output;
}

function remi_home_options()
{
  echo 'customize the home information';
}

function remi_contact_options()
{
  echo 'Add your contact details';
}

function remi_theme_create_page()
{
  // generation of admin page
  require_once ( get_template_directory() . '/inc/templates/remi-admin.php' );
}


function remi_theme_contact_page()
{
  // generation of contact page
  require_once ( get_template_directory() . '/inc/templates/remi-contact.php' );
}
