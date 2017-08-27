<?php get_header();
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'featured' );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $do_not_duplicate = $post->ID; 
	  get_template_part( 'content-jumbotron', get_post_format() );
  endforeach; 
  wp_reset_postdata();?>
  <div class="container ty_content_home">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 ty_recent_posts">
        <h2 class="ty_recent_posts_title">Daily Takes</h2>
        <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
          See more Daily Takes
        </a>
        <hr>
        <?php 
          $args = array( 'posts_per_page' => 6, 'category_name' => 'dailytakes' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
              get_template_part( 'content-snapshot', get_post_format() );
            endforeach;
            wp_reset_postdata();?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 ty_recent_posts">
        <h2 class="ty_recent_posts_title">Weekly Rundown</h2>
        <a href="<?php echo esc_url( $home_url . '/category/weeklyrundown/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
          See more Weekly Rundown
        </a>
        <hr>
        <?php 
          $args = array( 'posts_per_page' => 6, 'category_name' => 'weeklyrundown' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
              get_template_part( 'content-snapshot', get_post_format() );
            endforeach; 
            wp_reset_postdata();?>
      </div>
    </div>
  </div>
  <div class="row ty_twitter">
    <div class="col-sm-8 ty_twitter_image">
      <img id="twitter-banner" src="<?php echo esc_url($theme_url);?>/images/twitter-banner.jpg" />
      <div class="ty_twitter_overlay">
        <h2>Follow TrackYack on twitter for the latest NESCAC XC/TF news and results!</h2>
        <a class="twitter-follow-button" 
          href="<?php echo get_option('twitter_url'); ?>"
          data-size="large"
          data-show-count="false">
          Follow <?php echo get_option('twitter_user'); ?>
        </a>
      </div>
    </div>
    <div class="hidden-xs col-sm-4 ty_twitter_timeline">
      <a class="twitter-timeline"
        href="<?php echo get_option('twitter_url'); ?>"
        data-width="100%"
        data-height="100%">
      Tweets by <?php echo get_option('twitter_user'); ?>
      </a>
    </div>
  </div>
  <script>
    jQuery(document).ready(function() {
      var $ = jQuery;
      function adjustTwitterContainer() {
        $twitterImage = $('#twitter-banner');
        $twitterTimeline = $('.ty_twitter_timeline');
        ($twitterImage && $twitterTimeline) && $twitterTimeline.height($twitterImage.height());
      }
      adjustTwitterContainer();
      $(window).resize(adjustTwitterContainer);
    });
  </script>
<?php get_footer(); ?>