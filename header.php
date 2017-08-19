<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <?php wp_head() ?>
  </head>
  <body>
    <nav class="navbar navbar-full ty_header">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed ty_header_dropdown_small" data-toggle="collapse" data-target="#ty-header-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="hidden-xs navbar-brand ty_header_logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img alt="brand" src="<?php echo get_bloginfo( 'template_directory' );?>/images/trackyack_no_tagline.png" />
          </a>
          <span class="sr-only">TrackYack</span>
        </div>
        <div class="collapse navbar-collapse" id="ty-header-collapse">
          <ul class="nav ty_header_links">
            <li class="visible-xs">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
            </li>
            <li>
              <a href="<?php $category_id = get_cat_ID( 'feature' ); echo esc_url( get_category_link( $category_id ) ); ?>">
                Features
              </a>
            </li>
            <li>
              <a href="<?php $category_id = get_cat_ID( 'daily' ); echo esc_url( get_category_link( $category_id ) ); ?>">
                Daily Takes
              </a>
            </li>
            <li class="hidden-sm">
              <a href="<?php $category_id = get_cat_ID( 'weekly' ); echo esc_url( get_category_link( $category_id ) ); ?>">
                Weekly Dish
              </a>
            </li>
            <li class="hidden-sm">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/about/">About</a>
            </li>
            <li class="visible-xs">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/join-us/">Join us!</a>
            </li>
            <li role="presentation" class="hidden-lg hidden-xs ty_header_dropdown_med dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                More <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="visible-sm">
                  <a href="<?php $category_id = get_cat_ID( 'weekly' ); echo esc_url( get_category_link( $category_id ) ); ?>">
                    Weekly Dish
                  </a>
                </li>
                <li class="visible-sm">
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/about/">About</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/join-us/">Join us!</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="visible-lg navbar-right ty_header_links">
            <a href="<?php echo get_option('facebook_url');?>"><i class="social fa fa-facebook fa-2x"></i></a>
            <a href="<?php echo get_option('twitter_url');?>"><i class="social fa fa-twitter fa-2x"></i></a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/join-us/" role="button" class="btn ty_button ty_header_button">Join us!</a>
          </div>
        </div>
      </div>  
    </nav>
    <div class="container-fluid ty_content">
    <!-- Container tag closed in footer.php -->
  <!-- Body tag closed in footer.php -->
<!-- Html tag closed in footer.php -->