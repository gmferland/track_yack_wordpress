<?php

// Add scripts and stylesheets
function trackyack_scripts() {
  wp_enqueue_style( 'app', get_template_directory_uri() . '/build/app.1a7258cc010b89d4f3cf.css');
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '3.3.6' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/styles/font-awesome/css/font-awesome.min.css' );
  // wp_enqueue_script( 'app', get_template_directory_uri() . '/build/app.cb5c5a37e00d1379cf2e.js', array(), false, true );
  wp_enqueue_script( 'vendor', get_template_directory_uri() . '/build/vendor.50ebd42e92a63188c71b.js', array( 'jquery' ), false, true );
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
  <input type="text" name="twitter_url" id="twitter_url" placeholder="ex: https://twitter.com/username"value="<?php echo get_option('twitter_url'); ?>" />
<?php }
function setting_twitter_user() { ?>
  <input type="text" name="twitter_user" id="twitter_user" placeholder="ex: @username" value="<?php echo get_option( 'twitter_user' ); ?>" />
<?php }

// Facebook
function setting_facebook_url() { ?>
  <input type="text" name="facebook_url" id="facebook_url" placeholder="ex: https://www.facebook.com/username" value="<?php echo get_option('facebook_url'); ?>" />
<?php }
function setting_facebook_user() { ?>
  <input type="text" name="facebook_user" id="facebook_user" placeholder="ex: User Name" value="<?php echo get_option( 'facebook_user' ); ?>" />
<?php }

// Instagram
function setting_instagram_url() { ?>
  <input type="text" name="instagram_url" id="instagram_url" placeholder="ex: https://www.instagram.com/username" value="<?php echo get_option('instagram_url'); ?>" />
<?php }
function setting_instagram_user() { ?>
  <input type="text" name="instagram_user" id="instagram_user" placeholder="ex: username" value="<?php echo get_option( 'instagram_user' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section-social', 'Social Media Settings', null, 'theme-options' );
  add_settings_field( 'twitter_user', 'Twitter username', 'setting_twitter_user', 'theme-options', 'section-social' );
  add_settings_field( 'twitter_url', 'Twitter URL', 'setting_twitter_url', 'theme-options', 'section-social' );
  add_settings_field( 'facebook_user', 'Facebook username', 'setting_facebook_user', 'theme-options', 'section-social' );
  add_settings_field( 'facebook_url', 'Facebook URL', 'setting_facebook_url', 'theme-options', 'section-social' );
  add_settings_field( 'instagram_user', 'Instagram username', 'setting_instagram_user', 'theme-options', 'section-social' );
  add_settings_field( 'instagram_url', 'Instagram URL', 'setting_instagram_url', 'theme-options', 'section-social' );

  register_setting('section-social', 'twitter_user');
  register_setting('section-social', 'twitter_url');
  register_setting('section-social', 'facebook_user');
  register_setting('section-social', 'facebook_url');
  register_setting('section-social', 'instagram_user');
  register_setting('section-social', 'instagram_url');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );
