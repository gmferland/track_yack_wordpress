<?php

// Add scripts and stylesheets
function trackyack_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'site', get_template_directory_uri() . '/css/site.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'trackyack_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section-social' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter_url() { ?>
  <input type="text" name="twitter_url" id="twitter_url" placeholder="https://twitter.com/username"value="<?php echo get_option('twitter_url'); ?>" />
<?php }
function setting_twitter_user() { ?>
  <input type="text" name="twitter_user" id="twitter_user" placeholder="@username" value="<?php echo get_option( 'twitter_user' ); ?>" />
<?php }

// Facebook
function setting_facebook_url() { ?>
  <input type="text" name="facebook_url" id="facebook_url" placeholder="https://www.facebook.com/username" value="<?php echo get_option('facebook_url'); ?>" />
<?php }
function setting_facebook_user() { ?>
  <input type="text" name="facebook_user" id="facebook_user" placeholder="User Name" value="<?php echo get_option( 'facebook_user' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section-social', 'Social Media Settings', null, 'theme-options' );
  add_settings_field( 'twitter_user', 'Twitter username', 'setting_twitter_user', 'theme-options', 'section-social' );
  add_settings_field( 'twitter_url', 'Twitter URL', 'setting_twitter_url', 'theme-options', 'section-social' );
  add_settings_field( 'facebook_user', 'Facebook username', 'setting_facebook_user', 'theme-options', 'section-social' );
  add_settings_field( 'facebook_url', 'Facebook URL', 'setting_facebook_url', 'theme-options', 'section-social' );

  register_setting('section-social', 'twitter_user');
  register_setting('section-social', 'twitter_url');
  register_setting('section-social', 'facebook_user');
  register_setting('section-social', 'facebook_url');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );
