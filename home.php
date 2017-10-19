<?php get_header();
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'featured' );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $do_not_duplicate = $post->ID; 
	  get_template_part( 'content-jumbotron', get_post_format() );
  endforeach; 
  wp_reset_postdata();?>
  <div class="container-fluid ty_content_home">
    <div class="text-center">  
      <h1 class="ty_recent_posts_title">Recent Posts</h1>
      <hr>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 ty_recent_posts">
        <?php $recentquery = new WP_Query( 'posts_per_page=6' ); 
          if($recentquery->have_posts()): while($recentquery->have_posts()): $recentquery->the_post();
          if ($post->ID == $do_not_duplicate) continue;?>
        <?php get_template_part('content-snapshot', get_post_format());
          endwhile; endif;?>
      </div>
    </div>
    <div class="row">
      <div class="ty_featured_image" style="background-color: #eee;">
        <div class="container ty_browse">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h1>Browse By Category</h1>
            </div>  
          </div>
          <div class="row">
            <div class="col-md-4 ty_category_description text-center">
              <h1 class="ty_recent_posts_title">
                <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>">
                  Daily Takes
                </a>
              </h1>
              <p>
                <?php echo category_description( get_category_by_slug('dailytakes')->term_id ); ?> 
              </p>
              <div>
                <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
                  See all Daily Takes
                </a>
              </div>
            </div>
            <div class="col-md-4 ty_category_description text-center">
              <h1 class="ty_recent_posts_title">
                <a href="<?php echo esc_url( $home_url . '/category/weeklyrundown/' ); ?>">
                  Weekly Rundown
                </a>
              </h1>
              <p>
                <?php echo category_description( get_category_by_slug('dailytakes')->term_id ); ?> 
              </p>
              <div>
                <a href="<?php echo esc_url( $home_url . '/category/weeklyrundown/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
                  See all Weekly Rundown
                </a>
              </div>
            </div>
            <div class="col-md-4 ty_category_description text-center">
              <h1 class="ty_recent_posts_title">
                <a href="<?php echo esc_url( $home_url . '/category/featured/' ); ?>">
                  Featured
                </a>
              </h1>
              <p>
                <?php echo category_description( get_category_by_slug('featured')->term_id ); ?> 
              </p>
              <div>
                <a href="<?php echo esc_url( $home_url . '/category/featured/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
                  See all Featured
                </a>
              </div>
            </div>
          </div>
        </div>
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
        if ($twitterImage && $twitterTimeline) $twitterTimeline.height($twitterImage.height());
      }
      adjustTwitterContainer();
      $(window).resize(adjustTwitterContainer);
    });
  </script>
<?php get_footer(); ?>